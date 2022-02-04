<?php

namespace SmeltLabs\PocketMonsters\Contracts;

interface EncountersContract
{
    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getEncounterMethodByName(string $name): string|array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getEncounterMethodById(int $id): string|array;
    public function getAllEncounterMethods(): string|array;
    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getEncounterConditionByName(string $name): string|array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getEncounterConditionById(int $id): string|array;
    public function getAllEncounterConditions(): string|array;
    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getEncounterCondValueByName(string $name): string|array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getEncounterCondValueById(int $id): string|array;
    public function getAllEncounterCondValues(): string|array;
}
