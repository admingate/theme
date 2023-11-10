<?php

namespace Admingate\Theme\Facades;

use Admingate\Theme\ThemeOption;
use Illuminate\Support\Facades\Facade;

/**
 * @see \Admingate\Theme\ThemeOption
 */
class ThemeOptionFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return ThemeOption::class;
    }
}
