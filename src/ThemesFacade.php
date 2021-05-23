<?php

namespace WriteMv\Themes;

use Illuminate\Support\Facades\Facade;

/**
 * @see \WriteMv\Themes\Skeleton\SkeletonClass
 */
class ThemesFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'themes';
    }
}
