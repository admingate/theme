<?php

namespace Admingate\Theme\Facades;

use Admingate\Theme\Supports\AdminBar;
use Illuminate\Support\Facades\Facade;

/**
 * @see \Admingate\Theme\Supports\AdminBar
 */
class AdminBarFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return AdminBar::class;
    }
}
