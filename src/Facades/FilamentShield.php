<?php

namespace Theavuth9\FilamentShield\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Theavuth9\FilamentShield\FilamentShield
 */
class FilamentShield extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'filament-shield';
    }
}
