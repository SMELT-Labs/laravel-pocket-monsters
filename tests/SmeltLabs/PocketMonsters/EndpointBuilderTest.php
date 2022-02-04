<?php

namespace SmeltLabs\PocketMonsters;

use Illuminate\Support\Facades\Http;
use SmeltLabs\PocketMonsters\Traits\Testing\HasDummyData;
use Tests\TestCase;

class EndpointBuilderTest extends TestCase
{

    use HasDummyData;

    private EndpointBuilder $builder;

    public function setUp(): void
    {
        parent::setUp();
        $this->builder = new EndpointBuilder();
    }

    private function assertUrlOk(string $url) {
        echo $url;
        $this->assertEquals(200, Http::get($url)->status());
    }


    public function testGetBerryByName(): void
    {
        $this->assertUrlOk($this->builder->getBerryByName($this->berry));
    }

    public function testGetBerryById(): void
    {
        $this->assertUrlOk($this->builder->getBerryById($this->integer));
    }

    public function testGetAllBerries(): void
    {
        $this->assertUrlOk($this->builder->getAllBerries());
    }

    public function testGetBerryFirmnessTypeByName(): void
    {
         $this->assertUrlOk($this->builder->getBerryFirmnessTypeByName($this->berryFirmness));
    }

    public function testGetBerryFirmnessTypeById(): void
    {
         $this->assertUrlOk($this->builder->  getBerryFirmnessTypeById($this->integer));
    }

    public function testGetAllBerryFirmnessTypes(): void
    {
        $this->assertUrlOk($this->builder->getAllBerryFirmnessTypes());
    }

    public function testGetBerryFlavorByName(): void
    {
        $this->assertUrlOk($this->builder->getBerryFlavorByName($this->berryFlavor));
    }

    public function testGetBerryFlavorById(): void
    {
        $this->assertUrlOk($this->builder->getBerryFlavorById($this->integer));
    }

    public function testGetAllBerryFlavors(): void
    {
        $this->assertUrlOk($this->builder->getAllBerryFlavors());
    }

    public function testGetContestTypeByName(): void
    {
        $this->assertUrlOk($this->builder->getContestTypeByName($this->contestType));
    }

    public function testGetContestTypeById(): void
    {
        $this->assertUrlOk($this->builder->getContestTypeById($this->integer));
    }

    public function testGetAllContestTypes(): void
    {
        $this->assertUrlOk($this->builder->getAllContestTypes());
    }

    public function testGetContestEffectById(): void
    {
        $this->assertUrlOk($this->builder->getContestEffectById($this->integer));
    }

    public function testGetAllContestEffects(): void
    {
        $this->assertUrlOk($this->builder->getAllContestEffects());
    }

    public function testGetSuperContestEffectById(): void
    {
        $this->assertUrlOk($this->builder->getSuperContestEffectById($this->integer));
    }

    public function testGetAllSuperContestEffects(): void
    {
        $this->assertUrlOk($this->builder->getAllSuperContestEffects());
    }

    public function testGetEncounterMethodByName(): void
    {
        $this->assertUrlOk($this->builder->getEncounterMethodByName($this->encounterMethod));
    }

    public function testGetEncounterMethodById(): void
    {
        $this->assertUrlOk($this->builder->getEncounterMethodById($this->integer));
    }

    public function testGetAllEncounterMethods(): void
    {
        $this->assertUrlOk($this->builder->getAllEncounterMethods());
    }

    public function testGetEncounterConditionByName(): void
    {
        $this->assertUrlOk($this->builder->getEncounterConditionByName($this->encounterCondition));
    }

    public function testGetEncounterConditionById(): void
    {
        $this->assertUrlOk($this->builder->getEncounterConditionById($this->integer));
    }

    public function testGetAllEncounterConditions(): void
    {
        $this->assertUrlOk($this->builder->getAllEncounterConditions());
    }

    public function testGetEncounterCondValueByName(): void
    {
        $this->assertUrlOk($this->builder->getEncounterCondValueByName($this->encounterCondValue));
    }

    public function testGetEncounterCondValueById(): void
    {
        $this->assertUrlOk($this->builder->getEncounterConditionById($this->integer));
    }

    public function testGetAllEncounterCondValues(): void
    {
        $this->assertUrlOk($this->builder->getAllEncounterCondValues());
    }

    public function testGetEvolutionChainById(): void
    {
        $this->assertUrlOk($this->builder->getEvolutionChainById($this->integer));
    }

    public function testGetAllEvolutionChains(): void
    {
        $this->assertUrlOk($this->builder->getAllEvolutionChains());
    }

    public function testGetEvolutionTriggerByName(): void
    {
        $this->assertUrlOk($this->builder->getEvolutionTriggerByName($this->evolutionTrigger));
    }

    public function testGetEvolutionTriggerById(): void
    {
        $this->assertUrlOk($this->builder->getEvolutionTriggerById($this->integer));
    }

    public function testGetAllEvolutionTriggers(): void
    {
        $this->assertUrlOk($this->builder->getAllEvolutionTriggers());
    }

    public function testGetGenerationByName(): void
    {
        $this->assertUrlOk($this->builder->getGenerationByName($this->generation));
    }

    public function testGetGenerationById(): void
    {
        $this->assertUrlOk($this->builder->getGenerationById($this->integer));
    }

    public function testGetAllGenerations(): void
    {
        $this->assertUrlOk($this->builder->getAllGenerations());
    }

    public function testGetPokedexByName(): void
    {
        $this->assertUrlOk($this->builder->getPokedexByName($this->pokedex));
    }

    public function testGetPokedexById(): void
    {
        $this->assertUrlOk($this->builder->getPokedexById($this->integer));
    }

    public function testGetAllPokedexs(): void
    {
        $this->assertUrlOk($this->builder->getAllPokedexs());
    }

    public function testGetVersionByName(): void
    {
        $this->assertUrlOk($this->builder->getVersionByName($this->version));
    }

    public function testGetVersionById(): void
    {
        $this->assertUrlOk($this->builder->getVersionById($this->integer));
    }

    public function testGetAllVersions(): void
    {
        $this->assertUrlOk($this->builder->getAllVersions());
    }

    public function testGetVersionGroupByName(): void
    {
        $this->assertUrlOk($this->builder->getVersionGroupByName($this->versionGroup));
    }

    public function testGetVersionGroupById(): void
    {
        $this->assertUrlOk($this->builder->getVersionGroupById($this->integer));
    }

    public function testGetAllVersionGroups(): void
    {
        $this->assertUrlOk($this->builder->getAllVersionGroups());
    }

    public function testGetItemByName(): void
    {
        $this->assertUrlOk($this->builder->getItemByName($this->item));
    }

    public function testGetItemById(): void
    {
        $this->assertUrlOk($this->builder->getItemById($this->integer));
    }

    public function testGetAllItems(): void
    {
        $this->assertUrlOk($this->builder->getAllItems());
    }

    public function testGetItemAttributeByName(): void
    {
        $this->assertUrlOk($this->builder->getItemAttributeByName($this->itemAttribute));
    }

    public function testGetItemAttributeById(): void
    {
        $this->assertUrlOk($this->builder->getItemAttributeById($this->integer));
    }

    public function testGetAllItemAttributes(): void
    {
        $this->assertUrlOk($this->builder->getAllItemAttributes());
    }

    public function testGetItemCategoryByName(): void
    {
        $this->assertUrlOk($this->builder->getItemCategoryByName($this->itemCategory));
    }

    public function testGetItemCategoryById(): void
    {
        $this->assertUrlOk($this->builder->getItemCategoryById($this->integer));
    }

    public function testGetAllItemCategories(): void
    {
        $this->assertUrlOk($this->builder->getAllItemCategories());
    }

    public function testGetItemFlingEffectByName(): void
    {
        $this->assertUrlOk($this->builder->getItemFlingEffectByName($this->itemFlingEffect));
    }

    public function testGetItemFlingEffectById(): void
    {
        $this->assertUrlOk($this->builder->getItemFlingEffectById($this->integer));
    }

    public function testGetAllItemFlingEffects(): void
    {
        $this->assertUrlOk($this->builder->getAllItemFlingEffects());
    }

    public function testGetItemPocketByName(): void
    {
        $this->assertUrlOk($this->builder->getItemPocketByName($this->itemPocket));
    }

    public function testGetItemPocketById(): void
    {
        $this->assertUrlOk($this->builder->getItemPocketById($this->integer));
    }

    public function testGetAllItemPockets(): void
    {
        $this->assertUrlOk($this->builder->getAllItemPockets());
    }

    public function testGetLocationByName(): void
    {
        $this->assertUrlOk($this->builder->getLocationByName($this->location));
    }

    public function testGetLocationById(): void
    {
        $this->assertUrlOk($this->builder->getLocationById($this->integer));
    }

    public function testGetAllLocations(): void
    {
        $this->assertUrlOk($this->builder->getAllLocations());
    }

    public function testGetLocationAreaByName(): void
    {
        $this->assertUrlOk($this->builder->getLocationAreaByName($this->locationArea));
    }

    public function testGetLocationAreaById(): void
    {
        $this->assertUrlOk($this->builder->getLocationAreaById($this->integer));
    }

    public function testGetAllLocationAreas(): void
    {
        $this->assertUrlOk($this->builder->getAllLocationAreas());
    }

    public function testGetPalParkAreaByName(): void
    {
        $this->assertUrlOk($this->builder->getPalParkAreaByName($this->palParkArea));
    }

    public function testGetPalParkAreaById(): void
    {
        $this->assertUrlOk($this->builder->getPalParkAreaById($this->integer));
    }

    public function testGetAllPalParkAreas(): void
    {
        $this->assertUrlOk($this->builder->getAllPalParkAreas());
    }

    public function testGetRegionByName(): void
    {
        $this->assertUrlOk($this->builder->getRegionByName($this->region));
    }

    public function testGetRegionById(): void
    {
        $this->assertUrlOk($this->builder->getRegionById($this->integer));
    }

    public function testGetAllRegions(): void
    {
        $this->assertUrlOk($this->builder->getAllRegions());
    }

    public function testGetMachineById(): void
    {
        $this->assertUrlOk($this->builder->getMachineById($this->integer));
    }

    public function testGetAllMachines(): void
    {
        $this->assertUrlOk($this->builder->getAllMachines());
    }

    public function testGetMoveByName(): void
    {
        $this->assertUrlOk($this->builder->getMoveByName($this->move));
    }

    public function testGetMoveById(): void
    {
        $this->assertUrlOk($this->builder->getMoveById($this->integer));
    }

    public function testGetAllMoves(): void
    {
        $this->assertUrlOk($this->builder->getAllMoves());
    }

    public function testGetMoveAilmentByName(): void
    {
        $this->assertUrlOk($this->builder->getMoveAilmentByName($this->moveAilment));
    }

    public function testGetMoveAilmentById(): void
    {
        $this->assertUrlOk($this->builder->getMoveAilmentById($this->integer));
    }

    public function testGetAllMoveAilments(): void
    {
        $this->assertUrlOk($this->builder->getAllMoveAilments());
    }

    public function testGetMoveBattleStyleByName(): void
    {
        $this->assertUrlOk($this->builder->getMoveBattleStyleByName($this->moveBattleStyle));
    }

    public function testGetMoveBattleStyleById(): void
    {
        $this->assertUrlOk($this->builder->getMoveBattleStyleById($this->integer));
    }

    public function testGetAllMoveBattleStyles(): void
    {
        $this->assertUrlOk($this->builder->getAllMoveBattleStyles());
    }

    public function testGetMoveCategoryByName(): void
    {
        $this->assertUrlOk($this->builder->getMoveCategoryByName($this->moveCategory));
    }

    public function testGetMoveCategoryById(): void
    {
        $this->assertUrlOk($this->builder->getMoveCategoryById($this->integer));
    }

    public function testGetAllMoveCategories(): void
    {
        $this->assertUrlOk($this->builder->getAllMoveCategories());
    }

    public function testGetMoveDamageClassByName(): void
    {
        $this->assertUrlOk($this->builder->getMoveDamageClassByName($this->moveDamageClass));
    }

    public function testGetMoveDamageClassById(): void
    {
        $this->assertUrlOk($this->builder->getMoveDamageClassById($this->integer));
    }

    public function testGetAllMoveDamageClasses(): void
    {
        $this->assertUrlOk($this->builder->getAllMoveDamageClasses());
    }

    public function testGetMoveLearnMethodByName(): void
    {
        $this->assertUrlOk($this->builder->getMoveLearnMethodByName($this->moveLearnMethod));
    }

    public function testGetMoveLearnMethodById(): void
    {
        $this->assertUrlOk($this->builder->getMoveLearnMethodById($this->integer));
    }

    public function testGetAllMoveLearnMethods(): void
    {
        $this->assertUrlOk($this->builder->getAllMoveLearnMethods());
    }

    public function testGetMoveTargetByName(): void
    {
        $this->assertUrlOk($this->builder->getMoveTargetByName($this->moveTarget));
    }

    public function testGetMoveTargetById(): void
    {
        $this->assertUrlOk($this->builder->getMoveTargetById($this->integer));
    }

    public function testGetAllMoveTargets(): void
    {
        $this->assertUrlOk($this->builder->getAllMoveTargets());
    }

    public function testGetAbilityByName(): void
    {
        $this->assertUrlOk($this->builder->getAbilityByName($this->ability));
    }

    public function testGetAbilityById(): void
    {
        $this->assertUrlOk($this->builder->getAbilityById($this->integer));
    }

    public function testGetAllAbilities(): void
    {
        $this->assertUrlOk($this->builder->getAllAbilities());
    }

    public function testGetCharacteristicById(): void
    {
        $this->assertUrlOk($this->builder->getCharacteristicById($this->integer));
    }

    public function testGetAllCharacteristics(): void
    {
        $this->assertUrlOk($this->builder->getAllCharacteristics());
    }

    public function testGetEggGroupByName(): void
    {
        $this->assertUrlOk($this->builder->getEggGroupByName($this->eggGroup));
    }

    public function testGetEggGroupById(): void
    {
        $this->assertUrlOk($this->builder->getEggGroupById($this->integer));
    }

    public function testGetAllEggGroups(): void
    {
        $this->assertUrlOk($this->builder->getAllEggGroups());
    }

    public function testGetGenderByName(): void
    {
        $this->assertUrlOk($this->builder->getGenderByName($this->gender));
    }

    public function testGetGenderById(): void
    {
        $this->assertUrlOk($this->builder->getGenderById($this->integer));
    }

    public function testGetAllGenders(): void
    {
        $this->assertUrlOk($this->builder->getAllGenders());
    }

    public function testGetGrowthRateByName(): void
    {
        $this->assertUrlOk($this->builder->getGrowthRateByName($this->growthRate));
    }

    public function testGetGrowthRateById(): void
    {
        $this->assertUrlOk($this->builder->getGrowthRateById($this->integer));
    }

    public function testGetAllGrowthRates(): void
    {
        $this->assertUrlOk($this->builder->getAllGrowthRates());
    }

    public function testGetNatureByName(): void
    {
        $this->assertUrlOk($this->builder->getNatureByName($this->nature));
    }

    public function testGetNatureById(): void
    {
        $this->assertUrlOk($this->builder->getNatureById($this->integer));
    }

    public function testGetAllNatures(): void
    {
        $this->assertUrlOk($this->builder->getAllNatures());
    }

    public function testGetPokeathlonStatByName(): void
    {
        $this->assertUrlOk($this->builder->getPokeathlonStatByName($this->pokeathlonStat));
    }

    public function testGetPokeathlonStatById(): void
    {
        $this->assertUrlOk($this->builder->getPokeathlonStatById($this->integer));
    }

    public function testGetAllPokeathlonStats(): void
    {
        $this->assertUrlOk($this->builder->getAllPokeathlonStats());
    }

    public function testGetPokemonByName(): void
    {
        $this->assertUrlOk($this->builder->getPokemonByName($this->pokemon));
    }

    public function testGetPokemonById(): void
    {
        $this->assertUrlOk($this->builder->getPokemonById($this->integer));
    }

    public function testGetAllPokemon(): void
    {
        $this->assertUrlOk($this->builder->getAllPokemon());
    }

    public function testGetPokemonLocationAreasByName(): void
    {
        $this->assertUrlOk($this->builder->getPokemonLocationAreasByName($this->pokemon));
    }

    public function testGetPokemonLocationAreasById(): void
    {
        $this->assertUrlOk($this->builder->getPokemonLocationAreasById($this->integer));
    }

    public function testGetPokemonColorByName(): void
    {
        $this->assertUrlOk($this->builder->getPokemonColorByName($this->pokemonColor));
    }

    public function testGetPokemonColorById(): void
    {
        $this->assertUrlOk($this->builder->getPokemonColorById($this->integer));
    }

    public function testGetAllPokemonColors(): void
    {
        $this->assertUrlOk($this->builder->getAllPokemonColors());
    }

    public function testGetPokemonFormByName(): void
    {
        $this->assertUrlOk($this->builder->getPokemonFormByName($this->pokemon));
    }

    public function testGetPokemonFormById(): void
    {
        $this->assertUrlOk($this->builder->getPokemonFormById($this->integer));
    }

    public function testGetAllPokemonForms(): void
    {
        $this->assertUrlOk($this->builder->getAllPokemonForms());
    }

    public function testGetPokemonHabitatByName(): void
    {
        $this->assertUrlOk($this->builder->getPokemonHabitatByName($this->pokemonHabitat));
    }

    public function testGetPokemonHabitatById(): void
    {
        $this->assertUrlOk($this->builder->getPokemonHabitatById($this->integer));
    }

    public function testGetAllPokemonHabitats(): void
    {
        $this->assertUrlOk($this->builder->getAllPokemonHabitats());
    }

    public function testGetPokemonShapeByName(): void
    {
        $this->assertUrlOk($this->builder->getPokemonShapeByName($this->pokemonShape));
    }

    public function testGetPokemonShapeById(): void
    {
        $this->assertUrlOk($this->builder->getPokemonShapeById($this->integer));
    }

    public function testGetAllPokemonShapes(): void
    {
        $this->assertUrlOk($this->builder->getAllPokemonShapes());
    }

    public function testGetPokemonSpeciesByName(): void
    {
        $this->assertUrlOk($this->builder->getPokemonSpeciesByName($this->pokemon));
    }

    public function testGetPokemonSpeciesById(): void
    {
        $this->assertUrlOk($this->builder->getPokemonSpeciesById($this->integer));
    }

    public function testGetAllPokemonSpecies(): void
    {
        $this->assertUrlOk($this->builder->getAllPokemonSpecies());
    }

    public function testGetStatByName(): void
    {
        $this->assertUrlOk($this->builder->getStatByName($this->stat));
    }

    public function testGetStatById(): void
    {
        $this->assertUrlOk($this->builder->getStatById($this->integer));
    }

    public function testGetAllStats(): void
    {
        $this->assertUrlOk($this->builder->getAllStats());
    }

    public function testGetTypeByName(): void
    {
        $this->assertUrlOk($this->builder->getTypeByName($this->type));
    }

    public function testGetTypeById(): void
    {
        $this->assertUrlOk($this->builder->getTypeById($this->integer));
    }

    public function testGetAllTypes(): void
    {
        $this->assertUrlOk($this->builder->getAllTypes());
    }

    public function testGetLanguageByName(): void
    {
        $this->assertUrlOk($this->builder->getLanguageByName($this->language));
    }

    public function testGetLanguageById(): void
    {
        $this->assertUrlOk($this->builder->getLanguageById($this->integer));
    }

    public function testGetAllLanguages(): void
    {
        $this->assertUrlOk($this->builder->getAllLanguages());
    }
}
