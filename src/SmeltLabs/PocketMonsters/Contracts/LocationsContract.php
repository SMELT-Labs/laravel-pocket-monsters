<?php

namespace SmeltLabs\PocketMonsters\Contracts;

interface LocationsContract
{
    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getLocationByName(string $name): string|array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getLocationById(int $id): string|array;
    public function getAllLocations(): string|array;
    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getLocationAreaByName(string $name): string|array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getLocationAreaById(int $id): string|array;
    public function getAllLocationAreas(): string|array;
    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getPalParkAreaByName(string $name): string|array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getPalParkAreaById(int $id): string|array;
    public function getAllPalParkAreas(): string|array;
    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getRegionByName(string $name): string|array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getRegionById(int $id): string|array;
    public function getAllRegions(): string|array;
}
