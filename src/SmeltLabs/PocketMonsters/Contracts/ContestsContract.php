<?php

namespace SmeltLabs\PocketMonsters\Contracts;

interface ContestsContract
{

    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getContestTypeByName(string $name): string|array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getContestTypeById(int $id): string|array;
    public function getAllContestTypes(): string|array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getContestEffectById(int $id): string|array;
    public function getAllContestEffects(): string|array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getSuperContestEffectById(int $id): string|array;
    public function getAllSuperContestEffects(): string|array;
}
