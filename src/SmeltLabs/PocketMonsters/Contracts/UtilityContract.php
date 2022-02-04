<?php

namespace SmeltLabs\PocketMonsters\Contracts;

interface UtilityContract
{
    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getLanguageByName(string $name): string|array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getLanguageById(int $id): string|array;
    public function getAllLanguages(): string|array;
}
