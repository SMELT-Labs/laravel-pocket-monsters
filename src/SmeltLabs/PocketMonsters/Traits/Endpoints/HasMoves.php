<?php

namespace SmeltLabs\PocketMonsters\Traits\Endpoints;

trait HasMoves
{

    public function getMoveByName(string $name): string
    {
        return $this->urlV2("move", $name);
    }

    public function getMoveById(int $id): string
    {
        return $this->urlV2("move", $id);
    }

    public function getAllMoves(): string
    {
        return $this->urlV2("move");
    }

    public function getMoveAilmentByName(string $name): string
    {
        return $this->urlV2("move-ailment", $name);
    }

    public function getMoveAilmentById(int $id): string
    {
        return $this->urlV2("move-ailment", $id);
    }

    public function getAllMoveAilments(): string
    {
        return $this->urlV2("move-ailment");
    }

    public function getMoveBattleStyleByName(string $name): string
    {
        return $this->urlV2("move-battle-style", $name);
    }

    public function getMoveBattleStyleById(int $id): string
    {
        return $this->urlV2("move-battle-style", $id);
    }

    public function getAllMoveBattleStyles(): string
    {
        return $this->urlV2("move-battle-style");
    }

    public function getMoveCategoryByName(string $name): string
    {
        return $this->urlV2("move-category", $name);
    }

    public function getMoveCategoryById(int $id): string
    {
        return $this->urlV2("move-category", $id);
    }

    public function getAllMoveCategories(): string
    {
        return $this->urlV2("move-category");
    }

    public function getMoveDamageClassByName(string $name): string
    {
        return $this->urlV2("move-damage-class", $name);
    }

    public function getMoveDamageClassById(int $id): string
    {
        return $this->urlV2("move-damage-class", $id);
    }

    public function getAllMoveDamageClasses(): string
    {
        return $this->urlV2("move-damage-class");
    }

    public function getMoveLearnMethodByName(string $name): string
    {
        return $this->urlV2("move-learn-method", $name);
    }

    public function getMoveLearnMethodById(int $id): string
    {
        return $this->urlV2("move-learn-method", $id);
    }

    public function getAllMoveLearnMethods(): string
    {
        return $this->urlV2("move-learn-method");
    }

    public function getMoveTargetByName(string $name): string
    {
        return $this->urlV2("move-target", $name);
    }

    public function getMoveTargetById(int $id): string
    {
        return $this->urlV2("move-target", $id);
    }

    public function getAllMoveTargets(): string
    {
        return $this->urlV2("move-target");
    }
}
