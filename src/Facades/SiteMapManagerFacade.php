<?php

namespace Admingate\Theme\Facades;

use Admingate\Theme\Supports\SiteMapManager;
use Illuminate\Support\Facades\Facade;

/**
 * @see \Admingate\Theme\Supports\SiteMapManager
 */
class SiteMapManagerFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return SiteMapManager::class;
    }
}
