<?php

namespace SmeltLabs\PocketMonsters\Traits\Fetchers;

trait HasItems
{
    public function getItemByName(string $name): array
    {
        return $this->fetch($this->builder->getItemByName($name));
    }

    public function getItemById(int $id): array
    {
        return $this->fetch($this->builder->getItemById($id));
    }

    public function getAllItems(): array
    {
        return $this->fetch($this->builder->getAllItems());
    }

    public function getItemAttributeByName(string $name): array
    {
        return $this->fetch($this->builder->getItemAttributeByName($name));
    }

    public function getItemAttributeById(int $id): array
    {
        return $this->fetch($this->builder->getItemAttributeById($id));
    }

    public function getAllItemAttributes(): array
    {
        return $this->fetch($this->builder->getAllItemAttributes());
    }

    public function getItemCategoryByName(string $name): array
    {
        return $this->fetch($this->builder->getItemCategoryByName($name));
    }

    public function getItemCategoryById(int $id): array
    {
        return $this->fetch($this->builder->getItemCategoryById($id));
    }

    public function getAllItemCategories(): array
    {
        return $this->fetch($this->builder->getAllItemCategories());
    }

    public function getItemFlingEffectByName(string $name): array
    {
        return $this->fetch($this->builder->getItemFlingEffectByName($name));
    }

    public function getItemFlingEffectById(int $id): array
    {
        return $this->fetch($this->builder->getItemFlingEffectById($id));
    }

    public function getAllItemFlingEffects(): array
    {
        return $this->fetch($this->builder->getAllItemFlingEffects());
    }

    public function getItemPocketByName(string $name): array
    {
        return $this->fetch($this->builder->getItemPocketByName($name));
    }

    public function getItemPocketById(int $id): array
    {
        return $this->fetch($this->builder->getItemPocketById($id));
    }

    public function getAllItemPockets(): array
    {
        return $this->fetch($this->builder->getAllItemPockets());
    }
}
