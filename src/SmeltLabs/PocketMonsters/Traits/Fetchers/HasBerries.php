<?php

namespace SmeltLabs\PocketMonsters\Traits\Fetchers;

trait HasBerries
{
    public function getBerryByName(string $name): array
    {
        return $this->fetch($this->builder->getBerryByName($name));
    }

    public function getBerryById(int $id): array
    {
        return $this->fetch($this->builder->getBerryById($id));
    }

    public function getAllBerries(): array
    {
        return $this->fetch($this->builder->getAllBerries());
    }

    public function getBerryFirmnessTypeByName(string $name): array
    {
        return $this->fetch($this->builder->getBerryFirmnessTypeByName($name));
    }

    public function getBerryFirmnessTypeById(int $id): array
    {
        return $this->fetch($this->builder->getBerryFirmnessTypeById($id));
    }

    public function getAllBerryFirmnessTypes(): array
    {
        return $this->fetch($this->builder->getAllBerryFirmnessTypes());
    }

    public function getBerryFlavorByName(string $name): array
    {
        return $this->fetch($this->builder->getBerryFlavorByName($name));
    }

    public function getBerryFlavorById(int $id): array
    {
        return $this->fetch($this->builder->getBerryFlavorById($id));
    }

    public function getAllBerryFlavors(): array
    {
        return $this->fetch($this->builder->getAllBerryFlavors());
    }


}
