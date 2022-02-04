<?php

namespace SmeltLabs\PocketMonsters\Traits\Endpoints;

use function url;

trait HasEndpoints
{
    private string $apiV2 = "https://pokeapi.co/api/v2";

    protected function urlV2(string $path, string|int $param=null) {
        return isset($param) ? url("$this->apiV2/$path/$param") : url("$this->apiV2/$path");
    }
}
