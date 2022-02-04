<?php

namespace SmeltLabs\PocketMonsters\Traits\Endpoints;

trait HasEvolution
{
    public function getEvolutionChainById(int $id): string
    {
        return $this->urlV2("evolution-chain", $id);
    }

    public function getAllEvolutionChains(): string
    {
        return $this->urlV2("evolution-chain");
    }

    public function getEvolutionTriggerByName(string $name): string
    {
        return $this->urlV2("evolution-trigger", $name);
    }

    public function getEvolutionTriggerById(int $id): string
    {
        return $this->urlV2("evolution-trigger", $id);
    }

    public function getAllEvolutionTriggers(): string
    {
        return $this->urlV2("evolution-trigger");
    }
}
