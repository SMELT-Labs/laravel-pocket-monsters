<?php

namespace SmeltLabs\PocketMonsters\Traits\Fetchers;

trait HasPokemon
{
    public function getAbilityByName(string $name): array
    {
        return $this->fetch($this->builder->getAbilityByName($name));
    }

    public function getAbilityById(int $id): array
    {
        return $this->fetch($this->builder->getAbilityById($id));
    }

    public function getAllAbilities(): array
    {
        return $this->fetch($this->builder->getAllAbilities());
    }

    public function getCharacteristicById(int $id): array
    {
        return $this->fetch($this->builder->getCharacteristicById($id));
    }

    public function getAllCharacteristics(): array
    {
        return $this->fetch($this->builder->getAllCharacteristics());
    }

    public function getEggGroupByName(string $name): array
    {
        return $this->fetch($this->builder->getEggGroupByName($name));
    }

    public function getEggGroupById(int $id): array
    {
        return $this->fetch($this->builder->getEggGroupById($id));
    }

    public function getAllEggGroups(): array
    {
        return $this->fetch($this->builder->getAllEggGroups());
    }

    public function getGenderByName(string $name): array
    {
        return $this->fetch($this->builder->getGenderByName($name));
    }

    public function getGenderById(int $id): array
    {
        return $this->fetch($this->builder->getGenderById($id));
    }

    public function getAllGenders(): array
    {
        return $this->fetch($this->builder->getAllGenders());
    }

    public function getGrowthRateByName(string $name): array
    {
        return $this->fetch($this->builder->getGrowthRateByName($name));
    }

    public function getGrowthRateById(int $id): array
    {
        return $this->fetch($this->builder->getGrowthRateById($id));
    }

    public function getAllGrowthRates(): array
    {
        return $this->fetch($this->builder->getAllGrowthRates());
    }

    public function getNatureByName(string $name): array
    {
        return $this->fetch($this->builder->getNatureByName($name));
    }

    public function getNatureById(int $id): array
    {
        return $this->fetch($this->builder->getNatureById($id));
    }

    public function getAllNatures(): array
    {
        return $this->fetch($this->builder->getAllNatures());
    }

    public function getPokeathlonStatByName(string $name): array
    {
        return $this->fetch($this->builder->getPokeathlonStatByName($name));
    }

    public function getPokeathlonStatById(int $id): array
    {
        return $this->fetch($this->builder->getPokeathlonStatById($id));
    }

    public function getAllPokeathlonStats(): array
    {
        return $this->fetch($this->builder->getAllPokeathlonStats());
    }

    public function getPokemonByName(string $name): array
    {
        return $this->fetch($this->builder->getPokemonByName($name));
    }

    public function getPokemonById(int $id): array
    {
        return $this->fetch($this->builder->getPokemonById($id));
    }

    public function getAllPokemon(): array
    {
        return $this->fetch($this->builder->getAllPokemon());
    }

    public function getPokemonLocationAreasByName(string $name): array
    {
        return $this->fetch($this->builder->getPokemonLocationAreasByName($name));
    }

    public function getPokemonLocationAreasById(int $id): array
    {
        return $this->fetch($this->builder->getPokemonLocationAreasById($id));
    }

    public function getPokemonColorByName(string $name): array
    {
        return $this->fetch($this->builder->getPokemonColorByName($name));
    }

    public function getPokemonColorById(int $id): array
    {
        return $this->fetch($this->builder->getPokemonColorById($id));
    }

    public function getAllPokemonColors(): array
    {
        return $this->fetch($this->builder->getAllPokemonColors());
    }

    public function getPokemonFormByName(string $name): array
    {
        return $this->fetch($this->builder->getPokemonFormByName($name));
    }

    public function getPokemonFormById(int $id): array
    {
        return $this->fetch($this->builder->getPokemonFormById($id));
    }

    public function getAllPokemonForms(): array
    {
        return $this->fetch($this->builder->getAllPokemonForms());
    }

    public function getPokemonHabitatByName(string $name): array
    {
        return $this->fetch($this->builder->getPokemonHabitatByName($name));
    }

    public function getPokemonHabitatById(int $id): array
    {
        return $this->fetch($this->builder->getPokemonHabitatById($id));
    }

    public function getAllPokemonHabitats(): array
    {
        return $this->fetch($this->builder->getAllPokemonHabitats());
    }

    public function getPokemonShapeByName(string $name): array
    {
        return $this->fetch($this->builder->getPokemonShapeByName($name));
    }

    public function getPokemonShapeById(int $id): array
    {
        return $this->fetch($this->builder->getPokemonShapeById($id));
    }

    public function getAllPokemonShapes(): array
    {
        return $this->fetch($this->builder->getAllPokemonShapes());
    }

    public function getPokemonSpeciesByName(string $name): array
    {
        return $this->fetch($this->builder->getPokemonSpeciesByName($name));
    }

    public function getPokemonSpeciesById(int $id): array
    {
        return $this->fetch($this->builder->getPokemonSpeciesById($id));
    }

    public function getAllPokemonSpecies(): array
    {
        return $this->fetch($this->builder->getAllPokemonSpecies());
    }

    public function getStatByName(string $name): array
    {
        return $this->fetch($this->builder->getStatByName($name));
    }

    public function getStatById(int $id): array
    {
        return $this->fetch($this->builder->getStatById($id));
    }

    public function getAllStats(): array
    {
        return $this->fetch($this->builder->getAllStats());
    }

    public function getTypeByName(string $name): array
    {
        return $this->fetch($this->builder->getTypeByName($name));
    }

    public function getTypeById(int $id): array
    {
        return $this->fetch($this->builder->getTypeById($id));
    }

    public function getAllTypes(): array
    {
        return $this->fetch($this->builder->getAllTypes());
    }
}
