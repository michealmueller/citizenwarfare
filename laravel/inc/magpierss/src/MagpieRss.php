<?php
/**
 * Created by PhpStorm.
 * Company: MuellerTek
 * User: Micheal Mueller
 * Date: 4/25/2018
 * Time: 6:41 PM
 */

namespace inc\magpierss\src;


use inc\magpierss\src;

class MagpieRss
{

    public function fetch_rss ($url) {
        if (!defined('DIR_SEP')) {
            define('DIR_SEP', DIRECTORY_SEPARATOR);
        }

        if (!defined('MAGPIE_DIR')) {
            define('MAGPIE_DIR', dirname(__FILE__) . DIR_SEP);
        }

        define('MAGPIE_VERSION', '0.72');

        $MAGPIE_ERROR = "";

        // initialize constants
        self::init();

        if ( !isset($url) ) {
            error("fetch_rss called without a url");
            return false;
        }

        // if cache is disabled
        if ( !MAGPIE_CACHE_ON ) {
            // fetch file, and parse it
            $resp = self::_fetch_remote_file( $url );
            if ( is_success( $resp->status ) ) {
                return _response_to_rss( $resp );
            }
            else {
                error("Failed to fetch $url and cache is off");
                return false;
            }
        }
        // else cache is ON
        else {
            // Flow
            // 1. check cache
            // 2. if there is a hit, make sure its fresh
            // 3. if cached obj fails freshness check, fetch remote
            // 4. if remote fails, return stale object, or error

            $cache = new RSSCacheClass();

            if (MAGPIE_DEBUG and $cache->ERROR) {
                debug($cache->ERROR, E_USER_WARNING);
            }


            $cache_status    = 1;       // response of check_cache
            $request_headers = array(); // HTTP headers to send with fetch
            $rss             = 0;       // parsed RSS object
            $errormsg        = 0;       // errors, if any

            // store parsed XML by desired output encoding
            // as character munging happens at parse time
            $cache_key       = $url . MAGPIE_OUTPUT_ENCODING;

            if (!$cache->ERROR) {
                // return cache HIT, MISS, or STALE
                $cache_status = $cache->check_cache( $cache_key);
            }

            // if object cached, and cache is fresh, return cached obj
            if ( $cache_status == 'HIT' ) {
                $rss = $cache->get( $cache_key );
                if ( isset($rss) and $rss ) {
                    // should be cache age
                    $rss->from_cache = 1;
                    if ( MAGPIE_DEBUG > 1) {
                        debug("MagpieRSS: Cache HIT", E_USER_NOTICE);
                    }
                    return $rss;
                }
            }

            // else attempt a conditional get

            // setup headers
            if ( $cache_status == 'STALE' ) {
                $rss = $cache->get( $cache_key );
                if ( $rss and $rss->etag and $rss->last_modified ) {
                    $request_headers['If-None-Match'] = $rss->etag;
                    $request_headers['If-Last-Modified'] = $rss->last_modified;
                }
            }

            $resp = self::_fetch_remote_file( $url, $request_headers );

            if (isset($resp) and $resp) {
                if ($resp->status == '304' ) {
                    // we have the most current copy
                    if ( MAGPIE_DEBUG > 1) {
                        debug("Got 304 for $url");
                    }
                    // reset cache on 304 (at minutillo insistent prodding)
                    $cache->set($cache_key, $rss);
                    return $rss;
                }
                elseif ( self::is_success( $resp->status ) ) {
                    $rss = _response_to_rss( $resp );
                    if ( $rss ) {
                        if (MAGPIE_DEBUG > 1) {
                            debug("Fetch successful");
                        }
                        // add object to cache
                        $cache->set( $cache_key, $rss );
                        return $rss;
                    }
                }
                else {
                    $errormsg = "Failed to fetch $url ";
                    if ( $resp->status == '-100' ) {
                        $errormsg .= "(Request timed out after " . MAGPIE_FETCH_TIME_OUT . " seconds)";
                    }
                    elseif ( $resp->error ) {
                        # compensate for Snoopy's annoying habbit to tacking
                        # on '\n'
                        $http_error = substr($resp->error, 0, -2);
                        $errormsg .= "(HTTP Error: $http_error)";
                    }
                    else {
                        $errormsg .=  "(HTTP Response: " . $resp->response_code .')';
                    }
                }
            }
            else {
                $errormsg = "Unable to retrieve RSS file for unknown reasons.";
            }

            // else fetch failed

            // attempt to return cached object
            if ($rss) {
                if ( MAGPIE_DEBUG ) {
                    debug("Returning STALE object for $url");
                }
                return $rss;
            }

            // else we totally failed
            self::error( $errormsg );

            return false;

        } // end if ( !MAGPIE_CACHE_ON ) {
    } // end fetch_rss()

    /*=======================================================================*\
        Function:   error
        Purpose:    set MAGPIE_ERROR, and trigger error
    \*=======================================================================*/

    public function error ($errormsg, $lvl=E_USER_WARNING) {
        global $MAGPIE_ERROR;

        // append PHP's error message if track_errors enabled
        if ( isset($php_errormsg) ) {
            $errormsg .= " ($php_errormsg)";
        }
        if ( $errormsg ) {
            $errormsg = "MagpieRSS: $errormsg";
            $MAGPIE_ERROR = $errormsg;
            trigger_error( $errormsg, $lvl);
        }
    }

    public function debug ($debugmsg, $lvl=E_USER_NOTICE) {
        trigger_error("MagpieRSS [debug] $debugmsg", $lvl);
    }

    /*=======================================================================*\
        Function:   magpie_error
        Purpose:    accessor for the magpie error variable
    \*=======================================================================*/
    public function magpie_error ($errormsg="") {
        global $MAGPIE_ERROR;

        if ( isset($errormsg) and $errormsg ) {
            $MAGPIE_ERROR = $errormsg;
        }

        return $MAGPIE_ERROR;
    }

    /*=======================================================================*\
        Function:   self::_fetch_remote_file
        Purpose:    retrieve an arbitrary remote file
        Input:      url of the remote file
                    headers to send along with the request (optional)
        Output:     an HTTP response object (see Snoopy.class.inc)  
    \*=======================================================================*/
    public function _fetch_remote_file ($url, $headers = "" ) {
        // Snoopy is an HTTP client in PHP
        $client = new SnoopyClass();
        $client->agent = MAGPIE_USER_AGENT;
        $client->read_timeout = MAGPIE_FETCH_TIME_OUT;
        $client->use_gzip = MAGPIE_USE_GZIP;
        if (is_array($headers) ) {
            $client->rawheaders = $headers;
        }

        @$client->fetch($url);
        return $client;

    }

    /*=======================================================================*\
        Function:   _response_to_rss
        Purpose:    parse an HTTP response object into an RSS object
        Input:      an HTTP response object (see Snoopy)
        Output:     parsed RSS object (see rss_parse)
    \*=======================================================================*/
    public function _response_to_rss ($resp) {
        $rss = new MagpieRSSClass( $resp->results);

        // if RSS parsed successfully       
        if ( $rss and !$rss->ERROR) {

            // find Etag, and Last-Modified
            foreach($resp->headers as $h) {
                // 2003-03-02 - Nicola Asuni (www.tecnick.com) - fixed bug "Undefined offset: 1"
                if (strpos($h, ": ")) {
                    list($field, $val) = explode(": ", $h, 2);
                }
                else {
                    $field = $h;
                    $val = "";
                }

                if ( $field == 'ETag' ) {
                    $rss->etag = $val;
                }

                if ( $field == 'Last-Modified' ) {
                    $rss->last_modified = $val;
                }
            }

            return $rss;
        } // else construct error message
        else {
            $errormsg = "Failed to parse RSS file.";

            if ($rss) {
                $errormsg .= " (" . $rss->ERROR . ")";
            }
            error($errormsg);

            return false;
        } // end if ($rss and !$rss->error)
    }

    /*=======================================================================*\
        Function:   init
        Purpose:    setup constants with default values
                    check for user overrides
    \*=======================================================================*/
    public function init () {
        if ( defined('MAGPIE_INITALIZED') ) {
            return;
        }
        else {
            define('MAGPIE_INITALIZED', true);
        }

        if ( !defined('MAGPIE_CACHE_ON') ) {
            define('MAGPIE_CACHE_ON', true);
        }

        if ( !defined('MAGPIE_CACHE_DIR') ) {
            define('MAGPIE_CACHE_DIR', './cache');
        }

        if ( !defined('MAGPIE_CACHE_AGE') ) {
            define('MAGPIE_CACHE_AGE', 60*60); // one hour
        }

        if ( !defined('MAGPIE_CACHE_FRESH_ONLY') ) {
            define('MAGPIE_CACHE_FRESH_ONLY', false);
        }

        if ( !defined('MAGPIE_OUTPUT_ENCODING') ) {
            define('MAGPIE_OUTPUT_ENCODING', 'ISO-8859-1');
        }

        if ( !defined('MAGPIE_INPUT_ENCODING') ) {
            define('MAGPIE_INPUT_ENCODING', null);
        }

        if ( !defined('MAGPIE_DETECT_ENCODING') ) {
            define('MAGPIE_DETECT_ENCODING', true);
        }

        if ( !defined('MAGPIE_DEBUG') ) {
            define('MAGPIE_DEBUG', 0);
        }

        if ( !defined('MAGPIE_USER_AGENT') ) {
            $ua = 'MagpieRSS/'. MAGPIE_VERSION . ' (+http://magpierss.sf.net';

            if ( MAGPIE_CACHE_ON ) {
                $ua = $ua . ')';
            }
            else {
                $ua = $ua . '; No cache)';
            }

            define('MAGPIE_USER_AGENT', $ua);
        }

        if ( !defined('MAGPIE_FETCH_TIME_OUT') ) {
            define('MAGPIE_FETCH_TIME_OUT', 5); // 5 second timeout
        }

        // use gzip encoding to fetch rss files if supported?
        if ( !defined('MAGPIE_USE_GZIP') ) {
            define('MAGPIE_USE_GZIP', true);
        }
    }

// NOTE: the following code should really be in Snoopy, or at least
// somewhere other then rss_fetch!

    /*=======================================================================*\
        HTTP STATUS CODE PREDICATES
        These functions attempt to classify an HTTP status code
        based on RFC 2616 and RFC 2518.
        
        All of them take an HTTP status code as input, and return true or false
    
        All this code is adapted from LWP's HTTP::Status.
    \*=======================================================================*/


    /*=======================================================================*\
        Function:   is_info
        Purpose:    return true if Informational status code
    \*=======================================================================*/
    public function is_info ($sc) {
        return $sc >= 100 && $sc < 200;
    }

    /*=======================================================================*\
        Function:   is_success
        Purpose:    return true if Successful status code
    \*=======================================================================*/
    public function is_success ($sc) {
        return $sc >= 200 && $sc < 300;
    }

    /*=======================================================================*\
        Function:   is_redirect
        Purpose:    return true if Redirection status code
    \*=======================================================================*/
    public function is_redirect ($sc) {
        return $sc >= 300 && $sc < 400;
    }

    /*=======================================================================*\
        Function:   is_error
        Purpose:    return true if Error status code
    \*=======================================================================*/
    public function is_error ($sc) {
        return $sc >= 400 && $sc < 600;
    }

    /*=======================================================================*\
        Function:   is_client_error
        Purpose:    return true if Error status code, and its a client error
    \*=======================================================================*/
    public function is_client_error ($sc) {
        return $sc >= 400 && $sc < 500;
    }

    /*=======================================================================*\
        Function:   is_client_error
        Purpose:    return true if Error status code, and its a server error
    \*=======================================================================*/
    public function is_server_error ($sc) {
        return $sc >= 500 && $sc < 600;
    }
}