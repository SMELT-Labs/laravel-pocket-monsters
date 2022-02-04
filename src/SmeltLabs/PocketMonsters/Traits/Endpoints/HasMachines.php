<?php

namespace SmeltLabs\PocketMonsters\Traits\Endpoints;

trait HasMachines {
    public function getMachineById(int $id): string
    {
        return $this->urlV2("machine", $id);
    }

    public function getAllMachines(): string
    {
        return $this->urlV2("machine");
    }
}
