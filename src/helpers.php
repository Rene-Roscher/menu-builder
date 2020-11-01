<?php

if (! function_exists('menuBuilder')) {
    /**
     * @param $uri
     * @return string|null
     */
    function sidebarcheck($uri)
    {
        if (count($uri = explode('.', $uri)) == 3)
            return request()->routeIs("$uri[0].$uri[1].*") ? 'active' : null;
        if (count($uri) == 2)
            return request()->routeIs("$uri[0].$uri[1]") ? 'active' : null;
        if (count($uri) == 0)
            return request()->routeIs("$uri*") ? 'active' : null;
    }
}

if (! function_exists('menuBuilder')) {
    /**
     * @return \ReneRoscher\MenuBuilder\MenuBuilder
     */
    function menuBuilder()
    {
        return \ReneRoscher\MenuBuilder\MenuBuilderFacade::getFacadeRoot();
    }
}

if (! function_exists('user')) {
    function user()
    {
        return auth()->user();
    }
}
