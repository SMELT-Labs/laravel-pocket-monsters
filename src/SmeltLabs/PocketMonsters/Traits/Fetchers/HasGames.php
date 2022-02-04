<?php

namespace SmeltLabs\PocketMonsters\Traits\Fetchers;

trait HasGames
{
    public function getGenerationByName(string $name): array
    {
        return $this->fetch($this->builder->getGenerationByName($name));
    }

    public function getGenerationById(int $id): array
    {
        return $this->fetch($this->builder->getGenerationById($id));
    }

    public function getAllGenerations(): array
    {
        return $this->fetch($this->builder->getAllGenerations());
    }

    public function getPokedexByName(string $name): array
    {
        return $this->fetch($this->builder->getPokedexByName($name));
    }

    public function getPokedexById(int $id): array
    {
        // TODO: Implement getPokedexById() method.
        return $this->fetch($this->builder->getPokedexById());
    }

    public function getAllPokedexs(): array
    {
        return $this->fetch($this->builder->getAllPokedexs());
    }

    public function getVersionByName(string $name): array
    {
        return $this->fetch($this->builder->getVersionByName($name));
    }

    public function getVersionById(int $id): array
    {
        return $this->fetch($this->builder->getVersionById($id));
    }

    public function getAllVersions(): array
    {
        return $this->fetch($this->builder->getAllVersions());
    }

    public function getVersionGroupByName(string $name): array
    {
        return $this->fetch($this->builder->getVersionGroupByName());
    }

    public function getVersionGroupById(int $id): array
    {
        return $this->fetch($this->builder->getVersionGroupById($id));
    }

    public function getAllVersionGroups(): array
    {
        return $this->fetch($this->builder->getAllVersionGroups());
    }

}
