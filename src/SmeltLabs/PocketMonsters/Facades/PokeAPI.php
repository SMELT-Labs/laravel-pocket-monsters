<?php

namespace SmeltLabs\PocketMonsters\Facades;

use Illuminate\Support\Facades\Facade;

class PokeAPI extends Facade
{

    protected static function getFacadeAccessor(): string
    {
        return static::class;
    }

}
