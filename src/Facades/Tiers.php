<?php

namespace Batistack\Tiers\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Batistack\Tiers\Tiers
 */
class Tiers extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Batistack\Tiers\Tiers::class;
    }
}
