<?php

namespace SmeltLabs\PocketMonsters\Contracts;

interface MovesContract
{
    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getMoveByName(string $name): string|array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getMoveById(int $id): string|array;
    public function getAllMoves(): string|array;
    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getMoveAilmentByName(string $name): string|array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getMoveAilmentById(int $id): string|array;
    public function getAllMoveAilments(): string|array;
    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getMoveBattleStyleByName(string $name): string|array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getMoveBattleStyleById(int $id): string|array;
    public function getAllMoveBattleStyles(): string|array;
    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getMoveCategoryByName(string $name): string|array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getMoveCategoryById(int $id): string|array;
    public function getAllMoveCategories(): string|array;
    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getMoveDamageClassByName(string $name): string|array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getMoveDamageClassById(int $id): string|array;
    public function getAllMoveDamageClasses(): string|array;
    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getMoveLearnMethodByName(string $name): string|array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getMoveLearnMethodById(int $id): string|array;
    public function getAllMoveLearnMethods(): string|array;
    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getMoveTargetByName(string $name): string|array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getMoveTargetById(int $id): string|array;
    public function getAllMoveTargets(): string|array;
}
