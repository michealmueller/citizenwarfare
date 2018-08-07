<?php

namespace App\Http\Controllers;

use App\Rss;
use Carbon\Carbon;
use dg\rssphp\src\Feed;
use inc\magpierss\src\MagpieRss as Magpie;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class RssController extends Controller implements ShouldQueue
{
    //for running in the background so it does not effect loading.
    use InteractsWithQueue, SerializesModels;

    private $feeds;
    public function __construct()
    {
        $this->feeds = [
            'rsi' => 'https://robertsspaceindustries.com/comm-link/rss',
            'inn' => 'http://imperialnews.network/category/blog/feed/',
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fetch($recordNum)
    {
        //
        return DB::table('rsses')->orderBy('rss_pubDate', 'DESC')->take($recordNum)->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \dg\rssphp\src\FeedException
     */
    public function store()
    {
        //TODO::move this to Laravel cron later.
        $Feed = new Feed;
        foreach($this->feeds as $rss) {
            $feedData = $Feed->load($rss)->toArray();

            if (isset($feedData)) {
                foreach ($feedData['item'] as $post) {
                    if (DB::table('rsses')->where('rss_title', $post['title'])->count() <= 0) {
                        //if the title does not exist add to DB
                        //fix date first then add
                        $postDate = Carbon::parse($post['pubDate']);

                        //adjust content
                        $post['contentExerpt'] = self::getExerpt($post['content:encoded']);

                        $feed[] = DB::table('rsses')->insert([
                            'rss_feed' => $feedData['title'],
                            'rss_feedImage' => $feedData['image']['url'],
                            'rss_title' => $post['title'],
                            'rss_link' => $post['link'],
                            'rss_pubDate' => $postDate,
                            'rss_content' => $post['content:encoded'],
                            'rss_contentExerpt' => $post['contentExerpt'],
                            'created_at' => Carbon::now(),
                        ]);
                    }
                }
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rss  $rss
     * @return \Illuminate\Http\Response
     */
    public function getExerpt($data)
    {
        //
        $dataExerpt = self::grabSentences($data);
        return $dataExerpt;
    }

    public function grabSentences($body, $sentencesToDisplay = 2) {
        $nakedBody = preg_replace('/\s+/',' ',strip_tags($body));
        $sentences = preg_split('/(\.|\?|\!)(\s)/',$nakedBody);

        if (count($sentences) <= $sentencesToDisplay) {
            return $nakedBody;
        }

        $stopAt = 0;
        foreach ($sentences as $i => $sentence) {
            $stopAt += strlen($sentence);

            if ($i >= $sentencesToDisplay - 1) {
                break;
            }
        }

        $stopAt += ($sentencesToDisplay * 2);
        return trim(substr($nakedBody, 0, $stopAt));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rss  $rss
     * @return \Illuminate\Http\Response
     */
    public function edit(Rss $rss)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rss  $rss
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rss $rss)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rss  $rss
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rss $rss)
    {
        //
    }
}
