<?php

namespace Resto2web\Cms;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Resto2web\Cms\Skeleton\SkeletonClass
 */
class CmsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'cms';
    }
}
