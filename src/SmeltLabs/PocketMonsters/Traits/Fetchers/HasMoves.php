<?php

namespace SmeltLabs\PocketMonsters\Traits\Fetchers;

trait HasMoves
{

    public function getMoveByName(string $name): array
    {
        return $this->fetch($this->builder->getMoveByName($name));
    }

    public function getMoveById(int $id): array
    {
        return $this->fetch($this->builder->getMoveById($id));
    }

    public function getAllMoves(): array
    {
        return $this->fetch($this->builder->getAllMoves());
    }

    public function getMoveAilmentByName(string $name): array
    {
        return $this->fetch($this->builder->getMoveAilmentByName($name));
    }

    public function getMoveAilmentById(int $id): array
    {
        return $this->fetch($this->builder->getMoveAilmentById($id));
    }

    public function getAllMoveAilments(): array
    {
        return $this->fetch($this->builder->getAllMoveAilments());
    }

    public function getMoveBattleStyleByName(string $name): array
    {
        return $this->fetch($this->builder->getMoveBattleStyleByName($name));
    }

    public function getMoveBattleStyleById(int $id): array
    {
        return $this->fetch($this->builder->getMoveBattleStyleById($id));
    }

    public function getAllMoveBattleStyles(): array
    {
        return $this->fetch($this->builder->getAllMoveBattleStyles());
    }

    public function getMoveCategoryByName(string $name): array
    {
        return $this->fetch($this->builder->getMoveCategoryByName($name));
    }

    public function getMoveCategoryById(int $id): array
    {
        return $this->fetch($this->builder->getMoveCategoryById($id));
    }

    public function getAllMoveCategories(): array
    {
        return $this->fetch($this->builder->getAllMoveCategories());
    }

    public function getMoveDamageClassByName(string $name): array
    {
        return $this->fetch($this->builder->getMoveDamageClassByName($name));
    }

    public function getMoveDamageClassById(int $id): array
    {
        return $this->fetch($this->builder->getMoveDamageClassById($id));
    }

    public function getAllMoveDamageClasses(): array
    {
        return $this->fetch($this->builder->getAllMoveDamageClasses());
    }

    public function getMoveLearnMethodByName(string $name): array
    {
        return $this->fetch($this->builder->getMoveLearnMethodByName($name));
    }

    public function getMoveLearnMethodById(int $id): array
    {
        return $this->fetch($this->builder->getMoveLearnMethodById($id));
    }

    public function getAllMoveLearnMethods(): array
    {
        return $this->fetch($this->builder->getAllMoveLearnMethods());
    }

    public function getMoveTargetByName(string $name): array
    {
        return $this->fetch($this->builder->getMoveTargetByName($name));
    }

    public function getMoveTargetById(int $id): array
    {
        return $this->fetch($this->builder->getMoveTargetById($id));
    }

    public function getAllMoveTargets(): array
    {
        return $this->fetch($this->builder->getAllMoveTargets());
    }
}
