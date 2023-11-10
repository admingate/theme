<?php

namespace Admingate\Theme\Facades;

use Admingate\Theme\Theme;
use Illuminate\Support\Facades\Facade;

/**
 * @see \Admingate\Theme\Theme
 */
class ThemeFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return Theme::class;
    }
}
