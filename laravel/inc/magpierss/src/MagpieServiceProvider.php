<?php
/**
 * Created by PhpStorm.
 * Company: MuellerTek
 * User: Micheal Mueller
 * Date: 4/20/2018
 * Time: 9:18 AM
 */
namespace inc\magpierss\src;

use Illuminate\Support\ServiceProvider;

class MagpieServiceProvider extends ServiceProvider{
    public function register()
    {
        $this->app->bind('Magpie', 'inc\magpierss\src' );
    }
}