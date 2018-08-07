<?php
/**
 * Created by PhpStorm.
 * Company: MuellerTek
 * User: Micheal Mueller
 * Date: 4/20/2018
 * Time: 9:18 AM
 */

namespace dg\rssphp\src;

use Illuminate\Support\ServiceProvider;

class FeedServiceProvider extends ServiceProvider{
    public function register()
    {
        $this->app->bind('Feed', 'dg\rssphp\src' );
    }
}