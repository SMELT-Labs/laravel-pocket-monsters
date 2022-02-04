<?php

namespace SmeltLabs\PocketMonsters\Traits\Fetchers;

trait HasContests
{
    public function getContestTypeByName(string $name): array
    {
        return $this->fetch($this->builder->getContestTypeByName($name));
    }

    public function getContestTypeById(int $id): array
    {
        return $this->fetch($this->builder->getContestTypeById($id));
    }

    public function getAllContestTypes(): array
    {
        return $this->fetch($this->builder->getAllContestTypes());
    }

    public function getContestEffectById(int $id): array
    {
        return $this->fetch($this->builder->getContestEffectById($id));
    }

    public function getAllContestEffects(): array
    {
        return $this->fetch($this->builder->getAllContestEffects());
    }

    public function getSuperContestEffectById(int $id): array
    {
        return $this->fetch($this->builder->getSuperContestEffectById($id));
    }

    public function getAllSuperContestEffects(): array
    {
        return $this->fetch($this->builder->getAllSuperContestEffects());
    }

}
