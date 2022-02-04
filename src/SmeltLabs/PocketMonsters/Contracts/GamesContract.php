<?php

namespace SmeltLabs\PocketMonsters\Contracts;

interface GamesContract
{
    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getGenerationByName(string $name): string|array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getGenerationById(int $id): string|array;

    public function getAllGenerations(): string|array;

    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getPokedexByName(string $name): string|array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getPokedexById(int $id): string|array;

    public function getAllPokedexs(): string|array;

    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getVersionByName(string $name): string|array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getVersionById(int $id): string|array;

    public function getAllVersions(): string|array;

    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getVersionGroupByName(string $name): string|array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getVersionGroupById(int $id): string|array;

    public function getAllVersionGroups(): string|array;
}
