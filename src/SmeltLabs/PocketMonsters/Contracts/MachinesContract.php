<?php

namespace SmeltLabs\PocketMonsters\Contracts;

interface MachinesContract
{
    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getMachineById(int $id): string|array;
    public function getAllMachines(): string|array;
}
