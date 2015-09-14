<?php

namespace Noylecorp\Url;

use Illuminate\Support\Facades\Facade;

class ManagerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'urlmgr'; }
}