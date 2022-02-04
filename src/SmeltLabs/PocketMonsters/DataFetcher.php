<?php

namespace SmeltLabs\PocketMonsters;

use SmeltLabs\PocketMonsters\Traits\Fetchers\HasBerries;
use SmeltLabs\PocketMonsters\Traits\Fetchers\HasContests;
use SmeltLabs\PocketMonsters\Traits\Fetchers\HasEncounters;
use SmeltLabs\PocketMonsters\Traits\Fetchers\HasEvolution;
use SmeltLabs\PocketMonsters\Traits\Fetchers\HasGames;
use SmeltLabs\PocketMonsters\Traits\Fetchers\HasItems;
use SmeltLabs\PocketMonsters\Traits\Fetchers\HasLocations;
use SmeltLabs\PocketMonsters\Traits\Fetchers\HasMachines;
use SmeltLabs\PocketMonsters\Traits\Fetchers\HasMoves;
use SmeltLabs\PocketMonsters\Traits\Fetchers\HasPokemon;
use SmeltLabs\PocketMonsters\Traits\Fetchers\HasUtility;

class DataFetcher implements APIV2
{
    use HasBerries,
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
