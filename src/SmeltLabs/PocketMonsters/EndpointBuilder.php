<?php

namespace SmeltLabs\PocketMonsters;

use SmeltLabs\PocketMonsters\Traits\Endpoints\HasBerries;
use SmeltLabs\PocketMonsters\Traits\Endpoints\HasContests;
use SmeltLabs\PocketMonsters\Traits\Endpoints\HasEncounters;
use SmeltLabs\PocketMonsters\Traits\Endpoints\HasEndpoints;
use SmeltLabs\PocketMonsters\Traits\Endpoints\HasEvolution;
use SmeltLabs\PocketMonsters\Traits\Endpoints\HasGames;
use SmeltLabs\PocketMonsters\Traits\Endpoints\HasItems;
use SmeltLabs\PocketMonsters\Traits\Endpoints\HasLocations;
use SmeltLabs\PocketMonsters\Traits\Endpoints\HasMachines;
use SmeltLabs\PocketMonsters\Traits\Endpoints\HasMoves;
use SmeltLabs\PocketMonsters\Traits\Endpoints\HasPokemon;
use SmeltLabs\PocketMonsters\Traits\Endpoints\HasUtility;

class EndpointBuilder implements APIV2
{
    use HasEndpoints,
        HasBerries,
        HasContests,
        HasEncounters,
        HasEvolution,
        HasGames,
        HasItems,
        HasLocations,
        HasMachines,
        HasMoves,
        HasPokemon,
        HasUtility;
}
