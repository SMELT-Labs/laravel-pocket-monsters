<?php

namespace SmeltLabs\PocketMonsters\Contracts;

interface BerriesContract
{

    /**
     * Get a berry by its name.
     *
     * Berries are small fruits that can provide HP and status condition restoration,
     * stat enhancement, and even damage negation when eaten by Pokémon.
     * Check out Bulbapedia for greater detail.
     * @param string $name
     * @return array
     */
    public function getBerryByName(string $name): string|array;

    /**
     * Get a berry by its id number.
     *
     * Berries are small fruits that can provide HP and status condition restoration,
     * stat enhancement, and even damage negation when eaten by Pokémon.
     * Check out Bulbapedia for greater detail.
     * @param string $name
     * @return array
     */
    public function getBerryById(int $id): string|array;

    /**
     * Get all berries.
     *
     * Berries are small fruits that can provide HP and status condition restoration,
     * stat enhancement, and even damage negation when eaten by Pokémon.
     * Check out Bulbapedia for greater detail.
     * @param string $name
     * @return array
     */
    public function getAllBerries(): string|array;

    /**
     * Get a type of berry firmness by name.
     *
     * Berries can be soft or hard. Check out Bulbapedia for greater detail.
     * @param string $name
     * @return array
     */
    public function getBerryFirmnessTypeByName(string $name): string|array;

    /**
     * Get a type of berry firmness by id.
     *
     * Berries can be soft or hard. Check out Bulbapedia for greater detail.
     * @param int $id
     * @return array
     */
    public function getBerryFirmnessTypeById(int $id): string|array;

    /**
     * Get all types of berry firmness
     *
     * Berries can be soft or hard. Check out Bulbapedia for greater detail.
     * @return array
     */
    public function getAllBerryFirmnessTypes(): string|array;

    /**
     * Get a berry flavor by its name.
     *
     * Flavors determine whether a Pokémon will benefit or suffer from eating a berry based on their nature. Check out Bulbapedia for greater detail.
     * @param string $name
     * @return array
     */
    public function getBerryFlavorByName(string $name): string|array;

    /**
     * Get a berry flavor by its id.
     *
     * Flavors determine whether a Pokémon will benefit or suffer from eating a berry based on their nature. Check out Bulbapedia for greater detail.
     * @param int $id
     * @return array
     */
    public function getBerryFlavorById(int $id): string|array;

    /**
     * Get all types of berry flavors.
     *
     * Flavors determine whether a Pokémon will benefit or suffer from eating a berry based on their nature. Check out Bulbapedia for greater detail.
     * @return array
     */
    public function getAllBerryFlavors(): string|array;
}
