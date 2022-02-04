<?php

namespace SmeltLabs\PocketMonsters\Traits\Fetchers;

trait HasEvolution
{
    public function getEvolutionChainById(int $id): array
    {
        return $this->fetch($this->builder->getEvolutionChainById($id));
    }

    public function getAllEvolutionChains(): array
    {
        return $this->fetch($this->builder->getAllEvolutionChains());
    }

    public function getEvolutionTriggerByName(string $name): array
    {
        return $this->fetch($this->builder->getEvolutionTriggerByName($name));
    }

    public function getEvolutionTriggerById(int $id): array
    {
        return $this->fetch($this->builder->getEvolutionTriggerById($id));
    }

    public function getAllEvolutionTriggers(): array
    {
        return $this->fetch($this->builder->getAllEvolutionTriggers());
    }
}
