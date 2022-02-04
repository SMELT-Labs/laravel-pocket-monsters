<?php

namespace SmeltLabs\PocketMonsters\Traits\Endpoints;

trait HasBerries
{
    public function getBerryByName(string $name): string
    {
        return $this->urlV2("berry", $name);
    }

    public function getBerryById(int $id): string
    {
        return $this->urlV2("berry", $id);
    }

    public function getAllBerries(): string
    {
        return $this->urlV2("berry");
    }

    public function getBerryFirmnessTypeByName(string $name): string
    {
        return $this->urlV2("berry-firmness", $name);
    }

    public function getBerryFirmnessTypeById(int $id): string
    {
        return $this->urlV2("berry-firmness", $id);
    }

    public function getAllBerryFirmnessTypes(): string
    {
        return $this->urlV2("berry-firmness");
    }

    public function getBerryFlavorByName(string $name): string
    {
        return $this->urlV2("berry-flavor", $name);
    }

    public function getBerryFlavorById(int $id): string
    {
        return $this->urlV2("berry-flavor", $id);
    }

    public function getAllBerryFlavors(): string
    {
        return $this->urlV2("berry-flavor");
    }

}
