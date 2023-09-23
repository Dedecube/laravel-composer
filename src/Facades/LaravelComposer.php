<?php

namespace Dedecube\Composer\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Dedecube\Composer\LaravelComposer
 */
class LaravelComposer extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Dedecube\Composer\LaravelComposer::class;
    }
}
