<?php

namespace SmeltLabs\PocketMonsters\Traits\Endpoints;

trait HasLocations
{
    public function getLocationByName(string $name): string
    {
        return $this->urlV2("location", $name);
    }

    public function getLocationById(int $id): string
    {
        return $this->urlV2("location", $id);
    }

    public function getAllLocations(): string
    {
        return $this->urlV2("location");
    }

    public function getLocationAreaByName(string $name): string
    {
        return $this->urlV2("location-area", $name);
    }

    public function getLocationAreaById(int $id): string
    {
        return $this->urlV2("location-area", $id);
    }

    public function getAllLocationAreas(): string
    {
        return $this->urlV2("location-area");
    }

    public function getPalParkAreaByName(string $name): string
    {
        return $this->urlV2("pal-park-area", $name);
    }

    public function getPalParkAreaById(int $id): string
    {
        return $this->urlV2("pal-park-area", $id);
    }

    public function getAllPalParkAreas(): string
    {
        return $this->urlV2("pal-park-area");
    }

    public function getRegionByName(string $name): string
    {
        return $this->urlV2("region", $name);
    }

    public function getRegionById(int $id): string
    {
        return $this->urlV2("region", $id);
    }

    public function getAllRegions(): string
    {
        return $this->urlV2("region");
    }
}
