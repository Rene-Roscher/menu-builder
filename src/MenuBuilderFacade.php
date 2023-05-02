<?php

namespace ReneRoscher\MenuBuilder;

use Illuminate\Support\Facades\Facade;

/**
 * Class MenuBuilderFacade
 * @package App\Providers\Facades
 * @method static MenuBuilder add(MenuElement $element)
 * @method static MenuElement element($display, $href, $icon = '', $permission = null)
 * @method static MenuElement model($model, $icon = '', $permission = null)
 * @method static MenuDropdown dropdown($display, $icon, $permission = null)
 * @method static MenuElement get($key)
 * @method static set($key, $value)
 * @method static MenuElement getElements()
 * @method static render()
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
