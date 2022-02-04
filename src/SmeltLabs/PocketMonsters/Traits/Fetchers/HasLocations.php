<?php

namespace SmeltLabs\PocketMonsters\Traits\Fetchers;

trait HasLocations
{
    public function getLocationByName(string $name): array
    {
        return $this->fetch($this->builder->getLocationByName($name));
    }

    public function getLocationById(int $id): array
    {
        return $this->fetch($this->builder->getLocationById($id));
    }

    public function getAllLocations(): array
    {
        return $this->fetch($this->builder->getAllLocations());
    }

    public function getLocationAreaByName(string $name): array
    {
        return $this->fetch($this->builder->getLocationAreaByName($name));
    }

    public function getLocationAreaById(int $id): array
    {
        return $this->fetch($this->builder->getLocationAreaById($id));
    }

    public function getAllLocationAreas(): array
    {
        return $this->fetch($this->builder->getAllLocationAreas());
    }

    public function getPalParkAreaByName(string $name): array
    {
        return $this->fetch($this->builder->getPalParkAreaByName($name));
    }

    public function getPalParkAreaById(int $id): array
    {
        return $this->fetch($this->builder->getPalParkAreaById($id));
    }

    public function getAllPalParkAreas(): array
    {
        return $this->fetch($this->builder->getAllPalParkAreas());
    }

    public function getRegionByName(string $name): array
    {
        return $this->fetch($this->builder->getRegionByName($name));
    }

    public function getRegionById(int $id): array
    {
        return $this->fetch($this->builder->getRegionById($id));
    }

    public function getAllRegions(): array
    {
        return $this->fetch($this->builder->getAllRegions());
    }
}
