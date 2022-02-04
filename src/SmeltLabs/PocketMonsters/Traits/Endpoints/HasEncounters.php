<?php

namespace SmeltLabs\PocketMonsters\Traits\Endpoints;

trait HasEncounters
{
    public function getEncounterMethodByName(string $name): string
    {
        return $this->urlV2("encounter-method", $name);
    }

    public function getEncounterMethodById(int $id): string
    {
        return $this->urlV2("encounter-method", $id);
    }

    public function getAllEncounterMethods(): string
    {
        return $this->urlV2("encounter-method");
    }

    public function getEncounterConditionByName(string $name): string
    {
        return $this->urlV2("encounter-condition", $name);
    }

    public function getEncounterConditionById(int $id): string
    {
        return $this->urlV2("encounter-condition", $id);
    }

    public function getAllEncounterConditions(): string
    {
        return $this->urlV2("encounter-condition");
    }

    public function getEncounterCondValueByName(string $name): string
    {
        return $this->urlV2("encounter-condition-value", $name);
    }

    public function getEncounterCondValueById(int $id): string
    {
        return $this->urlV2("encounter-condition-value", $id);
    }

    public function getAllEncounterCondValues(): string
    {
        return $this->urlV2("encounter-condition-value");
    }
}
