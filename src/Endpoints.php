<?php

namespace SmeltLabs\PocketMonsters;

interface Endpoints
{
    //=====================================
    // B E R R I E S
    //=====================================

    /**
     * Get a berry by its name.
     *
     * Berries are small fruits that can provide HP and status condition restoration,
     * stat enhancement, and even damage negation when eaten by Pokémon.
     * Check out Bulbapedia for greater detail.
     * @param string $name
     * @return array
     */
    public function getBerryByName(string $name):array;

    /**
     * Get a berry by its id number.
     *
     * Berries are small fruits that can provide HP and status condition restoration,
     * stat enhancement, and even damage negation when eaten by Pokémon.
     * Check out Bulbapedia for greater detail.
     * @param string $name
     * @return array
     */
    public function getBerryById(int $id):array;

    /**
     * Get all berries.
     *
     * Berries are small fruits that can provide HP and status condition restoration,
     * stat enhancement, and even damage negation when eaten by Pokémon.
     * Check out Bulbapedia for greater detail.
     * @param string $name
     * @return array
     */
    public function getAllBerries():array;

    /**
     * Get a type of berry firmness by name.
     *
     * Berries can be soft or hard. Check out Bulbapedia for greater detail.
     * @param string $name
     * @return array
     */
    public function getBerryFirmnessTypeByName(string $name):array;

    /**
     * Get a type of berry firmness by id.
     *
     * Berries can be soft or hard. Check out Bulbapedia for greater detail.
     * @param int $id
     * @return array
     */
    public function getBerryFirmnessTypeById(int $id):array;

    /**
     * Get all types of berry firmness
     *
     * Berries can be soft or hard. Check out Bulbapedia for greater detail.
     * @return array
     */
    public function getAllBerryFirmnessTypes():array;

    /**
     * Get a berry flavor by its name.
     *
     * Flavors determine whether a Pokémon will benefit or suffer from eating a berry based on their nature. Check out Bulbapedia for greater detail.
     * @param string $name
     * @return array
     */
    public function getBerryFlavorByName(string $name):array;

    /**
     * Get a berry flavor by its id.
     *
     * Flavors determine whether a Pokémon will benefit or suffer from eating a berry based on their nature. Check out Bulbapedia for greater detail.
     * @param int $id
     * @return array
     */
    public function getBerryFlavorById(int $id):array;

    /**
     * Get all types of berry flavors.
     *
     * Flavors determine whether a Pokémon will benefit or suffer from eating a berry based on their nature. Check out Bulbapedia for greater detail.
     * @return array
     */
    public function getAllBerryFlavors():array;

    //=====================================
    // C O N T E S T S
    //=====================================

    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getContestTypeByName(string $name):array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getContestTypeById(int $id):array;
    public function getAllContestTypes():array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getContestEffectById(int $id):array;
    public function getAllContestEffects():array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getSuperContestEffectById(int $id):array;
    public function getAllSuperContestEffects():array;

    //=====================================
    // E N C O U N T E R S
    //=====================================

    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getEncounterMethodByName(string $name):array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getEncounterMethodById(int $id):array;
    public function getAllEncounterMethods():array;
    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getEncounterConditionByName(string $name):array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getEncounterConditionById(int $id):array;
    public function getAllEncounterConditions():array;
    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getEncounterCondValueByName(string $name):array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getEncounterCondValueById(int $id):array;
    public function getAllEncounterCondValues():array;

    //=====================================
    // E V O L U T I O N
    //=====================================


    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getEvolutionChainById(int $id):array;
    public function getAllEvolutionChains():array;
    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getEvolutionTriggerByName(string $name):array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getEvolutionTriggerById(int $id):array;
    public function getAllEvolutionTriggers():array;

    //=====================================
    // G A M E S
    //=====================================

    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getGenerationByName(string $name):array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getGenerationById(int $id):array;
    public function getAllGenerations():array;
    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getPokedexByName(string $name):array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getPokedexById(int $id):array;
    public function getAllPokedexs():array;
    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getVersionByName(string $name):array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getVersionById(int $id):array;
    public function getAllVersions():array;
    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getVersionGroupByName(string $name):array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getVersionGroupById(int $id):array;
    public function getAllVersionGroups():array;

    //=====================================
    // I T E M S
    //=====================================

    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getItemByName(string $name):array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getItemById(int $id):array;
    public function getAllItems():array;
    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getItemAttributeByName(string $name):array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getItemAttributeById(int $id):array;
    public function getAllItemAttributes():array;
    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getItemCategoryByName(string $name):array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getItemCategoryById(int $id):array;
    public function getAllItemCategories():array;
    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getItemFlingEffectByName(string $name):array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getItemFlingEffectById(int $id):array;
    public function getAllItemFlingEffects():array;
    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getItemPocketByName(string $name):array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getItemPocketById(int $id):array;
    public function getAllItemPockets():array;

    //=====================================
    // L O C A T I O N S
    //=====================================

    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getLocationByName(string $name):array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getLocationById(int $id):array;
    public function getAllLocations():array;
    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getLocationAreaByName(string $name):array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getLocationAreaById(int $id):array;
    public function getAllLocationAreas():array;
    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getPalParkAreaByName(string $name):array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getPalParkAreaById(int $id):array;
    public function getAllPalParkAreas():array;
    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getRegionByName(string $name):array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getRegionById(int $id):array;
    public function getAllRegions():array;

    //=====================================
    // M A C H I N E S
    //=====================================


    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getMachineById(int $id):array;
    public function getAllMachines():array;

    //=====================================
    // M O V E S
    //=====================================

    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getMoveByName(string $name):array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getMoveById(int $id):array;
    public function getAllMoves():array;
    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getMoveAilmentByName(string $name):array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getMoveAilmentById(int $id):array;
    public function getAllMoveAilments():array;
    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getMoveBattleStyleByName(string $name):array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getMoveBattleStyleById(int $id):array;
    public function getAllMoveBattleStyles():array;
    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getMoveCategoryByName(string $name):array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getMoveCategoryById(int $id):array;
    public function getAllMoveCategories():array;
    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getMoveDamageClassByName(string $name):array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getMoveDamageClassById(int $id):array;
    public function getAllMoveDamageClasses():array;
    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getMoveLearnMethodByName(string $name):array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getMoveLearnMethodById(int $id):array;
    public function getAllMoveLearnMethods():array;
    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getMoveTargetByName(string $name):array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getMoveTargetById(int $id):array;
    public function getAllMoveTargets():array;

    //=====================================
    // P O K E M O N
    //=====================================

    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getAbilityByName(string $name):array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getAbilityById(int $id):array;
    public function getAllAbilities():array;


    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getCharacteristicById(int $id):array;
    public function getAllCharacteristics():array;

    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getEggGroupByName(string $name):array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getEggGroupById(int $id):array;
    public function getAllEggGroups():array;

    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getGenderByName(string $name):array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getGenderById(int $id):array;
    public function getAllGenders():array;

    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getGrowthRateByName(string $name):array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getGrowthRateById(int $id):array;
    public function getAllGrowthRates():array;

    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getNatureByName(string $name):array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getNatureById(int $id):array;
    public function getAllNatures():array;

    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getPokeathlonStatByName(string $name):array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getPokeathlonStatById(int $id):array;
    public function getAllPokeathlonStats():array;

    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getPokemonByName(string $name):array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getPokemonById(int $id):array;
    public function getAllPokemon():array;

    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getPokemonLocationAreaByName(string $name):array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getPokemonLocationAreaById(int $id):array;
    public function getAllPokemonLocationAreas():array;

    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getPokemonColorByName(string $name):array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getPokemonColorById(int $id):array;
    public function getAllPokemonColors():array;

    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getPokemonFormByName(string $name):array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getPokemonFormById(int $id):array;
    public function getAllPokemonForms():array;

    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getPokemonHabitatByName(string $name):array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getPokemonHabitatById(int $id):array;
    public function getAllPokemonHabitats():array;

    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getPokemonShapeByName(string $name):array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getPokemonShapeById(int $id):array;
    public function getAllPokemonShapes():array;

    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getPokemonSpeciesByName(string $name):array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getPokemonSpeciesById(int $id):array;
    public function getAllPokemonSpecies():array;

    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getStatByName(string $name):array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getStatById(int $id):array;
    public function getAllStats():array;

    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getTypeByName(string $name):array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getTypeById(int $id):array;
    public function getAllTypes():array;

    //=====================================
    // U T I L I T I E S
    //=====================================

    /**
     *
     *
     * @param string $name
     * @return array
     */
    public function getLanguageByName(string $name):array;

    /**
     *
     *
     * @param int $id
     * @return array
     */
    public function getLanguageById(int $id):array;
    public function getAllLanguages():array;
}
