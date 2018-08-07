<?php
/**
 * Created by PhpStorm.
 * Company: MuellerTek
 * User: Micheal Mueller
 * Date: 4/20/2018
 * Time: 9:04 AM
 */
namespace dg\rssphp\src;

use Illuminate\Support\Facades\Facade;

class FeedFacade extends Facade {
    /**
     * Get the binding in the IoC container
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Feed'; // the IoC binding.
    }
}