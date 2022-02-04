<?php

namespace SmeltLabs\PocketMonsters\Contracts;

interface EvolutionContract
{
    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getEvolutionChainById(int $id): string|array;
    public function getAllEvolutionChains(): string|array;
    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getEvolutionTriggerByName(string $name): string|array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getEvolutionTriggerById(int $id): string|array;
    public function getAllEvolutionTriggers(): string|array;
}
