<?php

namespace ReneRoscher\MenuBuilder;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ReneRoscher\MenuBuilder\Skeleton\SkeletonClass
 */
class MenuBuilderFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'menu-builder';
    }
}
