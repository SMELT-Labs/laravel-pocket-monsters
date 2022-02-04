<?php

namespace SmeltLabs\PocketMonsters\Traits\Fetchers;

trait HasEncounters
{
    public function getEncounterMethodByName(string $name): array
    {
        return $this->fetch($this->builder->getEncounterMethodByName($name));
    }

    public function getEncounterMethodById(int $id): array
    {
        return $this->fetch($this->builder->getEncounterMethodById($id));
    }

    public function getAllEncounterMethods(): array
    {
        return $this->fetch($this->builder->getAllEncounterMethods());
    }

    public function getEncounterConditionByName(string $name): array
    {
        return $this->fetch($this->builder->getEncounterConditionByName($name));
    }

    public function getEncounterConditionById(int $id): array
    {
        return $this->fetch($this->builder->getEncounterConditionById($id));
    }

    public function getAllEncounterConditions(): array
    {
        return $this->fetch($this->builder->getAllEncounterConditions());
    }

    public function getEncounterCondValueByName(string $name): array
    {
        return $this->fetch($this->builder->getEncounterCondValueByName($name));
    }

    public function getEncounterCondValueById(int $id): array
    {
        return $this->fetch($this->builder->getEncounterCondValueById($id));
    }

    public function getAllEncounterCondValues(): array
    {
        return $this->fetch($this->builder->getAllEncounterCondValues());
    }
}
