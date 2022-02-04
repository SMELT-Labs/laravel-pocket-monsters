<?php

namespace SmeltLabs\PocketMonsters\Traits\Endpoints;

trait HasItems
{
    public function getItemByName(string $name): string
    {
        return $this->urlV2("item", $name);
    }

    public function getItemById(int $id): string
    {
        return $this->urlV2("item", $id);
    }

    public function getAllItems(): string
    {
        return $this->urlV2("item");
    }

    public function getItemAttributeByName(string $name): string
    {
        return $this->urlV2("item-attribute", $name);
    }

    public function getItemAttributeById(int $id): string
    {
        return $this->urlV2("item-attribute", $id);
    }

    public function getAllItemAttributes(): string
    {
        return $this->urlV2("item-attribute");
    }

    public function getItemCategoryByName(string $name): string
    {
        return $this->urlV2("item-category", $name);
    }

    public function getItemCategoryById(int $id): string
    {
        return $this->urlV2("item-category", $id);
    }

    public function getAllItemCategories(): string
    {
        return $this->urlV2("item-category");
    }

    public function getItemFlingEffectByName(string $name): string
    {
        return $this->urlV2("item-fling-effect", $name);
    }

    public function getItemFlingEffectById(int $id): string
    {
        return $this->urlV2("item-fling-effect", $id);
    }

    public function getAllItemFlingEffects(): string
    {
        return $this->urlV2("item-fling-effect");
    }

    public function getItemPocketByName(string $name): string
    {
        return $this->urlV2("item-pocket", $name);
    }

    public function getItemPocketById(int $id): string
    {
        return $this->urlV2("item-pocket", $id);
    }

    public function getAllItemPockets(): string
    {
        return $this->urlV2("item-pocket");
    }
}
