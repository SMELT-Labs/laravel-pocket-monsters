<?php

namespace SmeltLabs\PocketMonsters\Traits\Fetchers;

trait HasMachines {
    public function getMachineById(int $id): array
    {
        return $this->fetch($this->builder->getMachineById($id));
    }

    public function getAllMachines(): array
    {
        return $this->fetch($this->builder->getAllMachines());
    }
}
