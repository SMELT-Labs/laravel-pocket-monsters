<?php

namespace SmeltLabs\PocketMonsters\Contracts;

interface ItemsContract
{
    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getItemByName(string $name): string|array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getItemById(int $id): string|array;
    public function getAllItems(): string|array;
    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getItemAttributeByName(string $name): string|array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getItemAttributeById(int $id): string|array;
    public function getAllItemAttributes(): string|array;
    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getItemCategoryByName(string $name): string|array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getItemCategoryById(int $id): string|array;
    public function getAllItemCategories(): string|array;
    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getItemFlingEffectByName(string $name): string|array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getItemFlingEffectById(int $id): string|array;
    public function getAllItemFlingEffects(): string|array;
    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getItemPocketByName(string $name): string|array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getItemPocketById(int $id): string|array;
    public function getAllItemPockets(): string|array;
}
