<?php

namespace Eamirgh\LaravelStaticPages;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Eamirgh\LaravelStaticPages\Skeleton\SkeletonClass
 */
class LaravelStaticPagesFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-static-pages';
    }
}
