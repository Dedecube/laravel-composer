<?php

namespace Dedecube\Composer\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Dedecube\Composer\Composer
 */
class Composer extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Dedecube\Composer\Contracts\ComposerInterface::class;
    }
}
