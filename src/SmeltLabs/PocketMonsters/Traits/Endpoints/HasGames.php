<?php

namespace SmeltLabs\PocketMonsters\Traits\Endpoints;

trait HasGames
{
    public function getGenerationByName(string $name): string
    {
        return $this->urlV2("generation", $name);
    }

    public function getGenerationById(int $id): string
    {
        return $this->urlV2("generation", $id);
    }

    public function getAllGenerations(): string
    {
        return $this->urlV2("generation");
    }

    public function getPokedexByName(string $name): string
    {
        return $this->urlV2("pokedex", $name);
    }

    public function getPokedexById(int $id): string
    {
        return $this->urlV2("pokedex", $id);
    }

    public function getAllPokedexs(): string
    {
        return $this->urlV2("pokedex");
    }

    public function getVersionByName(string $name): string
    {
        return $this->urlV2("version", $name);
    }

    public function getVersionById(int $id): string
    {
        return $this->urlV2("version", $id);
    }

    public function getAllVersions(): string
    {
        return $this->urlV2("version");
    }

    public function getVersionGroupByName(string $name): string
    {
        return $this->urlV2("version-group", $name);
    }

    public function getVersionGroupById(int $id): string
    {
        return $this->urlV2("version-group", $id);
    }

    public function getAllVersionGroups(): string
    {
        return $this->urlV2("version-group");
    }
}
