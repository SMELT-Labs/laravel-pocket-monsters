<?php

namespace SmeltLabs\PocketMonsters\Traits\Endpoints;

trait HasPokemon
{
    public function getAbilityByName(string $name): string
    {
        return $this->urlV2("ability", $name);
    }

    public function getAbilityById(int $id): string
    {
        return $this->urlV2("ability", $id);
    }

    public function getAllAbilities(): string
    {
        return $this->urlV2("ability");
    }

    public function getCharacteristicById(int $id): string
    {
        return $this->urlV2("characteristic", $id);
    }

    public function getAllCharacteristics(): string
    {
        return $this->urlV2("characteristic");
    }

    public function getEggGroupByName(string $name): string
    {
        return $this->urlV2("egg-group", $name);
    }

    public function getEggGroupById(int $id): string
    {
        return $this->urlV2("egg-group", $id);
    }

    public function getAllEggGroups(): string
    {
        return $this->urlV2("egg-group");
    }

    public function getGenderByName(string $name): string
    {
        return $this->urlV2("gender", $name);
    }

    public function getGenderById(int $id): string
    {
        return $this->urlV2("gender", $id);
    }

    public function getAllGenders(): string
    {
        return $this->urlV2("gender");
    }

    public function getGrowthRateByName(string $name): string
    {
        return $this->urlV2("growth-rate", $name);
    }

    public function getGrowthRateById(int $id): string
    {
        return $this->urlV2("growth-rate", $id);
    }

    public function getAllGrowthRates(): string
    {
        return $this->urlV2("growth-rate");
    }

    public function getNatureByName(string $name): string
    {
        return $this->urlV2("nature", $name);
    }

    public function getNatureById(int $id): string
    {
        return $this->urlV2("nature", $id);
    }

    public function getAllNatures(): string
    {
        return $this->urlV2("nature");
    }

    public function getPokeathlonStatByName(string $name): string
    {
        return $this->urlV2("pokeathlon-stat", $name);
    }

    public function getPokeathlonStatById(int $id): string
    {
        return $this->urlV2("pokeathlon-stat", $id);
    }

    public function getAllPokeathlonStats(): string
    {
        return $this->urlV2("pokeathlon-stat");
    }

    public function getPokemonByName(string $name): string
    {
        return $this->urlV2("pokemon", $name);
    }

    public function getPokemonById(int $id): string
    {
        return $this->urlV2("pokemon", $id);
    }

    public function getAllPokemon(): string
    {
        return $this->urlV2("pokemon");
    }

    public function getPokemonLocationAreasByName(string $name): string
    {
        return $this->urlV2("pokemon", $name) . "/encounters";
    }

    public function getPokemonLocationAreasById(int $id): string
    {
        return $this->urlV2("pokemon", $id) . "/encounters";
    }

    public function getPokemonColorByName(string $name): string
    {
        return $this->urlV2("pokemon-color", $name);
    }

    public function getPokemonColorById(int $id): string
    {
        return $this->urlV2("pokemon-color", $id);
    }

    public function getAllPokemonColors(): string
    {
        return $this->urlV2("pokemon-color");
    }

    public function getPokemonFormByName(string $name): string
    {
        return $this->urlV2("pokemon-form", $name);
    }

    public function getPokemonFormById(int $id): string
    {
        return $this->urlV2("pokemon-form", $id);
    }

    public function getAllPokemonForms(): string
    {
        return $this->urlV2("pokemon-form");
    }

    public function getPokemonHabitatByName(string $name): string
    {
        return $this->urlV2("pokemon-habitat", $name);
    }

    public function getPokemonHabitatById(int $id): string
    {
        return $this->urlV2("pokemon-habitat", $id);
    }

    public function getAllPokemonHabitats(): string
    {
        return $this->urlV2("pokemon-habitat");
    }

    public function getPokemonShapeByName(string $name): string
    {
        return $this->urlV2("pokemon-shape", $name);
    }

    public function getPokemonShapeById(int $id): string
    {
        return $this->urlV2("pokemon-shape", $id);
    }

    public function getAllPokemonShapes(): string
    {
        return $this->urlV2("pokemon-shape");
    }

    public function getPokemonSpeciesByName(string $name): string
    {
        return $this->urlV2("pokemon-species", $name);
    }

    public function getPokemonSpeciesById(int $id): string
    {
        return $this->urlV2("pokemon-species", $id);
    }

    public function getAllPokemonSpecies(): string
    {
        return $this->urlV2("pokemon-species");
    }

    public function getStatByName(string $name): string
    {
        return $this->urlV2("stat", $name);
    }

    public function getStatById(int $id): string
    {
        return $this->urlV2("stat", $id);
    }

    public function getAllStats(): string
    {
        return $this->urlV2("stat");
    }

    public function getTypeByName(string $name): string
    {
        return $this->urlV2("type", $name);
    }

    public function getTypeById(int $id): string
    {
        return $this->urlV2("type", $id);
    }

    public function getAllTypes(): string
    {
        return $this->urlV2("type");
    }
}
