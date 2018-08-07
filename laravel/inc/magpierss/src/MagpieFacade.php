<?php
/**
 * Created by PhpStorm.
 * Company: MuellerTek
 * User: Micheal Mueller
 * Date: 4/20/2018
 * Time: 9:04 AM
 */
namespace inc\magpierss\src;

use Illuminate\Support\Facades\Facade;

class MagpieFacade extends Facade {
    /**
     * Get the binding in the IoC container
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Magpie'; // the IoC binding.
    }
}