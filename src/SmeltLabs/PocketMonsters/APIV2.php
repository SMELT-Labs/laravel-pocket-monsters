<?php

namespace SmeltLabs\PocketMonsters;

use SmeltLabs\PocketMonsters\Contracts\BerriesContract;
use SmeltLabs\PocketMonsters\Contracts\ContestsContract;
use SmeltLabs\PocketMonsters\Contracts\EncountersContract;
use SmeltLabs\PocketMonsters\Contracts\EvolutionContract;
use SmeltLabs\PocketMonsters\Contracts\GamesContract;
use SmeltLabs\PocketMonsters\Contracts\ItemsContract;
use SmeltLabs\PocketMonsters\Contracts\LocationsContract;
use SmeltLabs\PocketMonsters\Contracts\MachinesContract;
use SmeltLabs\PocketMonsters\Contracts\MovesContract;
use SmeltLabs\PocketMonsters\Contracts\PokemonContract;
use SmeltLabs\PocketMonsters\Contracts\UtilityContract;


interface APIV2 extends
    BerriesContract,
    ContestsContract,
    EncountersContract,
    EvolutionContract,
    GamesContract,
    ItemsContract,
    LocationsContract,
    MachinesContract,
    MovesContract,
    PokemonContract,
    UtilityContract
{
}
