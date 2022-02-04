<?php

namespace SmeltLabs\PocketMonsters\Traits\Endpoints;

trait HasContests
{
    public function getContestTypeByName(string $name): string
    {
        return $this->urlV2("contest-type", $name);
    }

    public function getContestTypeById(int $id): string
    {
        return $this->urlV2("contest-type", $id);
    }

    public function getAllContestTypes(): string
    {
        return $this->urlV2("contest-type");
    }

    public function getContestEffectById(int $id): string
    {
        return $this->urlV2("contest-effect", $id);
    }

    public function getAllContestEffects(): string
    {
        return $this->urlV2("contest-effect");
    }

    public function getSuperContestEffectById(int $id): string
    {
        return $this->urlV2("super-contest-effect", $id);
    }

    public function getAllSuperContestEffects(): string
    {
        return $this->urlV2("super-contest-effect");
    }

}
