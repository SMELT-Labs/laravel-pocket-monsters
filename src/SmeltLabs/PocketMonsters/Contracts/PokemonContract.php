<?php

namespace SmeltLabs\PocketMonsters\Contracts;

interface PokemonContract
{
    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getAbilityByName(string $name): string|array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getAbilityById(int $id): string|array;
    public function getAllAbilities(): string|array;


    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getCharacteristicById(int $id): string|array;
    public function getAllCharacteristics(): string|array;

    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getEggGroupByName(string $name): string|array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getEggGroupById(int $id): string|array;
    public function getAllEggGroups(): string|array;

    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getGenderByName(string $name): string|array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getGenderById(int $id): string|array;
    public function getAllGenders(): string|array;

    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getGrowthRateByName(string $name): string|array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getGrowthRateById(int $id): string|array;
    public function getAllGrowthRates(): string|array;

    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getNatureByName(string $name): string|array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getNatureById(int $id): string|array;
    public function getAllNatures(): string|array;

    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getPokeathlonStatByName(string $name): string|array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getPokeathlonStatById(int $id): string|array;
    public function getAllPokeathlonStats(): string|array;

    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getPokemonByName(string $name): string|array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getPokemonById(int $id): string|array;
    public function getAllPokemon(): string|array;

    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getPokemonLocationAreasByName(string $name): string|array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getPokemonLocationAreasById(int $id): string|array;

    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getPokemonColorByName(string $name): string|array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getPokemonColorById(int $id): string|array;
    public function getAllPokemonColors(): string|array;

    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getPokemonFormByName(string $name): string|array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getPokemonFormById(int $id): string|array;
    public function getAllPokemonForms(): string|array;

    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getPokemonHabitatByName(string $name): string|array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getPokemonHabitatById(int $id): string|array;
    public function getAllPokemonHabitats(): string|array;

    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getPokemonShapeByName(string $name): string|array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getPokemonShapeById(int $id): string|array;
    public function getAllPokemonShapes(): string|array;

    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getPokemonSpeciesByName(string $name): string|array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getPokemonSpeciesById(int $id): string|array;
    public function getAllPokemonSpecies(): string|array;

    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getStatByName(string $name): string|array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getStatById(int $id): string|array;
    public function getAllStats(): string|array;

    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getTypeByName(string $name): string|array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getTypeById(int $id): string|array;
    public function getAllTypes(): string|array;
}
