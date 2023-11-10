<?php

namespace Admingate\Theme\Facades;

use Admingate\Theme\Manager;
use Illuminate\Support\Facades\Facade;

/**
 * @see \Admingate\Theme\Manager
 */
class ManagerFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return Manager::class;
    }
}
