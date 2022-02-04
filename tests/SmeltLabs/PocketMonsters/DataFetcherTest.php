<?php

namespace SmeltLabs\PocketMonsters;

use Illuminate\Support\Facades\Http;
use SmeltLabs\PocketMonsters\Traits\Testing\HasDummyData;
use Tests\TestCase;

class DataFetcherTest extends TestCase
{

    use HasDummyData;

    private EndpointBuilder $endpoint;
    private DataFetcher $fetcher;

    public function setUp(): void
    {
        parent::setUp();
        $this->endpoint = new EndpointBuilder();
        $this->fetcher = new DataFetcher();
    }

    private function assertUrlOk(string $url, array $result) {
        echo $url;
        $response = Http::get($url);
        $this->assertEquals(200, $response->status());
        $json = $response->json() ?? [];
        $this->assertEquals($json, $result);
    }


    public function testGetBerryByName(): void
    {
        $this->assertUrlOk($this->endpoint->getBerryByName($this->berry),
            $this->fetcher->getBerryByName($this->berry));
    }

    public function testGetBerryById(): void
    {
        $this->assertUrlOk($this->endpoint->getBerryById($this->integer),
            $this->fetcher->getBerryById($this->integer));
    }

    public function testGetAllBerries(): void
    {
        $this->assertUrlOk($this->endpoint->getAllBerries(),
            $this->fetcher->getAllBerries());
    }

    public function testGetBerryFirmnessTypeByName(): void
    {
        $this->assertUrlOk($this->endpoint->getBerryFirmnessTypeByName($this->berryFirmness),
            $this->fetcher->getBerryFirmnessTypeByName($this->berryFirmness));
    }

    public function testGetBerryFirmnessTypeById(): void
    {
        $this->assertUrlOk($this->endpoint->  getBerryFirmnessTypeById($this->integer),
            $this->fetcher->  getBerryFirmnessTypeById($this->integer));
    }

    public function testGetAllBerryFirmnessTypes(): void
    {
        $this->assertUrlOk($this->endpoint->getAllBerryFirmnessTypes(),
            $this->fetcher->getAllBerryFirmnessTypes());
    }

    public function testGetBerryFlavorByName(): void
    {
        $this->assertUrlOk($this->endpoint->getBerryFlavorByName($this->berryFlavor),
            $this->fetcher->getBerryFlavorByName($this->berryFlavor));
    }

    public function testGetBerryFlavorById(): void
    {
        $this->assertUrlOk($this->endpoint->getBerryFlavorById($this->integer),
            $this->fetcher->getBerryFlavorById($this->integer));
    }

    public function testGetAllBerryFlavors(): void
    {
        $this->assertUrlOk($this->endpoint->getAllBerryFlavors(),
            $this->fetcher->getAllBerryFlavors());
    }

    public function testGetContestTypeByName(): void
    {
        $this->assertUrlOk($this->endpoint->getContestTypeByName($this->contestType),
            $this->fetcher->getContestTypeByName($this->contestType));
    }

    public function testGetContestTypeById(): void
    {
        $this->assertUrlOk($this->endpoint->getContestTypeById($this->integer),
            $this->fetcher->getContestTypeById($this->integer));
    }

    public function testGetAllContestTypes(): void
    {
        $this->assertUrlOk($this->endpoint->getAllContestTypes(),
            $this->fetcher->getAllContestTypes());
    }

    public function testGetContestEffectById(): void
    {
        $this->assertUrlOk($this->endpoint->getContestEffectById($this->integer),
            $this->fetcher->getContestEffectById($this->integer));
    }

    public function testGetAllContestEffects(): void
    {
        $this->assertUrlOk($this->endpoint->getAllContestEffects(),
            $this->fetcher->getAllContestEffects());
    }

    public function testGetSuperContestEffectById(): void
    {
        $this->assertUrlOk($this->endpoint->getSuperContestEffectById($this->integer),
            $this->fetcher->getSuperContestEffectById($this->integer));
    }

    public function testGetAllSuperContestEffects(): void
    {
        $this->assertUrlOk($this->endpoint->getAllSuperContestEffects(),
            $this->fetcher->getAllSuperContestEffects());
    }

    public function testGetEncounterMethodByName(): void
    {
        $this->assertUrlOk($this->endpoint->getEncounterMethodByName($this->encounterMethod),
            $this->fetcher->getEncounterMethodByName($this->encounterMethod));
    }

    public function testGetEncounterMethodById(): void
    {
        $this->assertUrlOk($this->endpoint->getEncounterMethodById($this->integer),
            $this->fetcher->getEncounterMethodById($this->integer));
    }

    public function testGetAllEncounterMethods(): void
    {
        $this->assertUrlOk($this->endpoint->getAllEncounterMethods(),
            $this->fetcher->getAllEncounterMethods());
    }

    public function testGetEncounterConditionByName(): void
    {
        $this->assertUrlOk($this->endpoint->getEncounterConditionByName($this->encounterCondition),
            $this->fetcher->getEncounterConditionByName($this->encounterCondition));
    }

    public function testGetEncounterConditionById(): void
    {
        $this->assertUrlOk($this->endpoint->getEncounterConditionById($this->integer),
            $this->fetcher->getEncounterConditionById($this->integer));
    }

    public function testGetAllEncounterConditions(): void
    {
        $this->assertUrlOk($this->endpoint->getAllEncounterConditions(),
            $this->fetcher->getAllEncounterConditions());
    }

    public function testGetEncounterCondValueByName(): void
    {
        $this->assertUrlOk($this->endpoint->getEncounterCondValueByName($this->encounterCondValue),
            $this->fetcher->getEncounterCondValueByName($this->encounterCondValue));
    }

    public function testGetEncounterCondValueById(): void
    {
        $this->assertUrlOk($this->endpoint->getEncounterConditionById($this->integer),
            $this->fetcher->getEncounterConditionById($this->integer));
    }

    public function testGetAllEncounterCondValues(): void
    {
        $this->assertUrlOk($this->endpoint->getAllEncounterCondValues(),
            $this->fetcher->getAllEncounterCondValues());
    }

    public function testGetEvolutionChainById(): void
    {
        $this->assertUrlOk($this->endpoint->getEvolutionChainById($this->integer),
            $this->fetcher->getEvolutionChainById($this->integer));
    }

    public function testGetAllEvolutionChains(): void
    {
        $this->assertUrlOk($this->endpoint->getAllEvolutionChains(),
            $this->fetcher->getAllEvolutionChains());
    }

    public function testGetEvolutionTriggerByName(): void
    {
        $this->assertUrlOk($this->endpoint->getEvolutionTriggerByName($this->evolutionTrigger),
            $this->fetcher->getEvolutionTriggerByName($this->evolutionTrigger));
    }

    public function testGetEvolutionTriggerById(): void
    {
        $this->assertUrlOk($this->endpoint->getEvolutionTriggerById($this->integer),
            $this->fetcher->getEvolutionTriggerById($this->integer));
    }

    public function testGetAllEvolutionTriggers(): void
    {
        $this->assertUrlOk($this->endpoint->getAllEvolutionTriggers(),
            $this->fetcher->getAllEvolutionTriggers());
    }

    public function testGetGenerationByName(): void
    {
        $this->assertUrlOk($this->endpoint->getGenerationByName($this->generation),
            $this->fetcher->getGenerationByName($this->generation));
    }

    public function testGetGenerationById(): void
    {
        $this->assertUrlOk($this->endpoint->getGenerationById($this->integer),
            $this->fetcher->getGenerationById($this->integer));
    }

    public function testGetAllGenerations(): void
    {
        $this->assertUrlOk($this->endpoint->getAllGenerations(),
            $this->fetcher->getAllGenerations());
    }

    public function testGetPokedexByName(): void
    {
        $this->assertUrlOk($this->endpoint->getPokedexByName($this->pokedex),
            $this->fetcher->getPokedexByName($this->pokedex));
    }

    public function testGetPokedexById(): void
    {
        $this->assertUrlOk($this->endpoint->getPokedexById($this->integer),
            $this->fetcher->getPokedexById($this->integer));
    }

    public function testGetAllPokedexs(): void
    {
        $this->assertUrlOk($this->endpoint->getAllPokedexs(),
            $this->fetcher->getAllPokedexs());
    }

    public function testGetVersionByName(): void
    {
        $this->assertUrlOk($this->endpoint->getVersionByName($this->version),
            $this->fetcher->getVersionByName($this->version));
    }

    public function testGetVersionById(): void
    {
        $this->assertUrlOk($this->endpoint->getVersionById($this->integer),
            $this->fetcher->getVersionById($this->integer));
    }

    public function testGetAllVersions(): void
    {
        $this->assertUrlOk($this->endpoint->getAllVersions(),
            $this->fetcher->getAllVersions());
    }

    public function testGetVersionGroupByName(): void
    {
        $this->assertUrlOk($this->endpoint->getVersionGroupByName($this->versionGroup),
            $this->fetcher->getVersionGroupByName($this->versionGroup));
    }

    public function testGetVersionGroupById(): void
    {
        $this->assertUrlOk($this->endpoint->getVersionGroupById($this->integer),
            $this->fetcher->getVersionGroupById($this->integer));
    }

    public function testGetAllVersionGroups(): void
    {
        $this->assertUrlOk($this->endpoint->getAllVersionGroups(),
            $this->fetcher->getAllVersionGroups());
    }

    public function testGetItemByName(): void
    {
        $this->assertUrlOk($this->endpoint->getItemByName($this->item),
            $this->fetcher->getItemByName($this->item));
    }

    public function testGetItemById(): void
    {
        $this->assertUrlOk($this->endpoint->getItemById($this->integer),
            $this->fetcher->getItemById($this->integer));
    }

    public function testGetAllItems(): void
    {
        $this->assertUrlOk($this->endpoint->getAllItems(),
            $this->fetcher->getAllItems());
    }

    public function testGetItemAttributeByName(): void
    {
        $this->assertUrlOk($this->endpoint->getItemAttributeByName($this->itemAttribute),
            $this->fetcher->getItemAttributeByName($this->itemAttribute));
    }

    public function testGetItemAttributeById(): void
    {
        $this->assertUrlOk($this->endpoint->getItemAttributeById($this->integer),
            $this->fetcher->getItemAttributeById($this->integer));
    }

    public function testGetAllItemAttributes(): void
    {
        $this->assertUrlOk($this->endpoint->getAllItemAttributes(),
            $this->fetcher->getAllItemAttributes());
    }

    public function testGetItemCategoryByName(): void
    {
        $this->assertUrlOk($this->endpoint->getItemCategoryByName($this->itemCategory),
            $this->fetcher->getItemCategoryByName($this->itemCategory));
    }

    public function testGetItemCategoryById(): void
    {
        $this->assertUrlOk($this->endpoint->getItemCategoryById($this->integer),
            $this->fetcher->getItemCategoryById($this->integer));
    }

    public function testGetAllItemCategories(): void
    {
        $this->assertUrlOk($this->endpoint->getAllItemCategories(),
            $this->fetcher->getAllItemCategories());
    }

    public function testGetItemFlingEffectByName(): void
    {
        $this->assertUrlOk($this->endpoint->getItemFlingEffectByName($this->itemFlingEffect),
            $this->fetcher->getItemFlingEffectByName($this->itemFlingEffect));
    }

    public function testGetItemFlingEffectById(): void
    {
        $this->assertUrlOk($this->endpoint->getItemFlingEffectById($this->integer),
            $this->fetcher->getItemFlingEffectById($this->integer));
    }

    public function testGetAllItemFlingEffects(): void
    {
        $this->assertUrlOk($this->endpoint->getAllItemFlingEffects(),
            $this->fetcher->getAllItemFlingEffects());
    }

    public function testGetItemPocketByName(): void
    {
        $this->assertUrlOk($this->endpoint->getItemPocketByName($this->itemPocket),
            $this->fetcher->getItemPocketByName($this->itemPocket));
    }

    public function testGetItemPocketById(): void
    {
        $this->assertUrlOk($this->endpoint->getItemPocketById($this->integer),
            $this->fetcher->getItemPocketById($this->integer));
    }

    public function testGetAllItemPockets(): void
    {
        $this->assertUrlOk($this->endpoint->getAllItemPockets(),
            $this->fetcher->getAllItemPockets());
    }

    public function testGetLocationByName(): void
    {
        $this->assertUrlOk($this->endpoint->getLocationByName($this->location),
            $this->fetcher->getLocationByName($this->location));
    }

    public function testGetLocationById(): void
    {
        $this->assertUrlOk($this->endpoint->getLocationById($this->integer),
            $this->fetcher->getLocationById($this->integer));
    }

    public function testGetAllLocations(): void
    {
        $this->assertUrlOk($this->endpoint->getAllLocations(),
            $this->fetcher->getAllLocations());
    }

    public function testGetLocationAreaByName(): void
    {
        $this->assertUrlOk($this->endpoint->getLocationAreaByName($this->locationArea),
            $this->fetcher->getLocationAreaByName($this->locationArea));
    }

    public function testGetLocationAreaById(): void
    {
        $this->assertUrlOk($this->endpoint->getLocationAreaById($this->integer),
            $this->fetcher->getLocationAreaById($this->integer));
    }

    public function testGetAllLocationAreas(): void
    {
        $this->assertUrlOk($this->endpoint->getAllLocationAreas(),
            $this->fetcher->getAllLocationAreas());
    }

    public function testGetPalParkAreaByName(): void
    {
        $this->assertUrlOk($this->endpoint->getPalParkAreaByName($this->palParkArea),
            $this->fetcher->getPalParkAreaByName($this->palParkArea));
    }

    public function testGetPalParkAreaById(): void
    {
        $this->assertUrlOk($this->endpoint->getPalParkAreaById($this->integer),
            $this->fetcher->getPalParkAreaById($this->integer));
    }

    public function testGetAllPalParkAreas(): void
    {
        $this->assertUrlOk($this->endpoint->getAllPalParkAreas(),
            $this->fetcher->getAllPalParkAreas());
    }

    public function testGetRegionByName(): void
    {
        $this->assertUrlOk($this->endpoint->getRegionByName($this->region),
            $this->fetcher->getRegionByName($this->region));
    }

    public function testGetRegionById(): void
    {
        $this->assertUrlOk($this->endpoint->getRegionById($this->integer),
            $this->fetcher->getRegionById($this->integer));
    }

    public function testGetAllRegions(): void
    {
        $this->assertUrlOk($this->endpoint->getAllRegions(),
            $this->fetcher->getAllRegions());
    }

    public function testGetMachineById(): void
    {
        $this->assertUrlOk($this->endpoint->getMachineById($this->integer),
            $this->fetcher->getMachineById($this->integer));
    }

    public function testGetAllMachines(): void
    {
        $this->assertUrlOk($this->endpoint->getAllMachines(),
            $this->fetcher->getAllMachines());
    }

    public function testGetMoveByName(): void
    {
        $this->assertUrlOk($this->endpoint->getMoveByName($this->move),
            $this->fetcher->getMoveByName($this->move));
    }

    public function testGetMoveById(): void
    {
        $this->assertUrlOk($this->endpoint->getMoveById($this->integer),
            $this->fetcher->getMoveById($this->integer));
    }

    public function testGetAllMoves(): void
    {
        $this->assertUrlOk($this->endpoint->getAllMoves(),
            $this->fetcher->getAllMoves());
    }

    public function testGetMoveAilmentByName(): void
    {
        $this->assertUrlOk($this->endpoint->getMoveAilmentByName($this->moveAilment),
            $this->fetcher->getMoveAilmentByName($this->moveAilment));
    }

    public function testGetMoveAilmentById(): void
    {
        $this->assertUrlOk($this->endpoint->getMoveAilmentById($this->integer),
            $this->fetcher->getMoveAilmentById($this->integer));
    }

    public function testGetAllMoveAilments(): void
    {
        $this->assertUrlOk($this->endpoint->getAllMoveAilments(),
            $this->fetcher->getAllMoveAilments());
    }

    public function testGetMoveBattleStyleByName(): void
    {
        $this->assertUrlOk($this->endpoint->getMoveBattleStyleByName($this->moveBattleStyle),
            $this->fetcher->getMoveBattleStyleByName($this->moveBattleStyle));
    }

    public function testGetMoveBattleStyleById(): void
    {
        $this->assertUrlOk($this->endpoint->getMoveBattleStyleById($this->integer),
            $this->fetcher->getMoveBattleStyleById($this->integer));
    }

    public function testGetAllMoveBattleStyles(): void
    {
        $this->assertUrlOk($this->endpoint->getAllMoveBattleStyles(),
            $this->fetcher->getAllMoveBattleStyles());
    }

    public function testGetMoveCategoryByName(): void
    {
        $this->assertUrlOk($this->endpoint->getMoveCategoryByName($this->moveCategory),
            $this->fetcher->getMoveCategoryByName($this->moveCategory));
    }

    public function testGetMoveCategoryById(): void
    {
        $this->assertUrlOk($this->endpoint->getMoveCategoryById($this->integer),
            $this->fetcher->getMoveCategoryById($this->integer));
    }

    public function testGetAllMoveCategories(): void
    {
        $this->assertUrlOk($this->endpoint->getAllMoveCategories(),
            $this->fetcher->getAllMoveCategories());
    }

    public function testGetMoveDamageClassByName(): void
    {
        $this->assertUrlOk($this->endpoint->getMoveDamageClassByName($this->moveDamageClass),
            $this->fetcher->getMoveDamageClassByName($this->moveDamageClass));
    }

    public function testGetMoveDamageClassById(): void
    {
        $this->assertUrlOk($this->endpoint->getMoveDamageClassById($this->integer),
            $this->fetcher->getMoveDamageClassById($this->integer));
    }

    public function testGetAllMoveDamageClasses(): void
    {
        $this->assertUrlOk($this->endpoint->getAllMoveDamageClasses(),
            $this->fetcher->getAllMoveDamageClasses());
    }

    public function testGetMoveLearnMethodByName(): void
    {
        $this->assertUrlOk($this->endpoint->getMoveLearnMethodByName($this->moveLearnMethod),
            $this->fetcher->getMoveLearnMethodByName($this->moveLearnMethod));
    }

    public function testGetMoveLearnMethodById(): void
    {
        $this->assertUrlOk($this->endpoint->getMoveLearnMethodById($this->integer),
            $this->fetcher->getMoveLearnMethodById($this->integer));
    }

    public function testGetAllMoveLearnMethods(): void
    {
        $this->assertUrlOk($this->endpoint->getAllMoveLearnMethods(),
            $this->fetcher->getAllMoveLearnMethods());
    }

    public function testGetMoveTargetByName(): void
    {
        $this->assertUrlOk($this->endpoint->getMoveTargetByName($this->moveTarget),
            $this->fetcher->getMoveTargetByName($this->moveTarget));
    }

    public function testGetMoveTargetById(): void
    {
        $this->assertUrlOk($this->endpoint->getMoveTargetById($this->integer),
            $this->fetcher->getMoveTargetById($this->integer));
    }

    public function testGetAllMoveTargets(): void
    {
        $this->assertUrlOk($this->endpoint->getAllMoveTargets(),
            $this->fetcher->getAllMoveTargets());
    }

    public function testGetAbilityByName(): void
    {
        $this->assertUrlOk($this->endpoint->getAbilityByName($this->ability),
            $this->fetcher->getAbilityByName($this->ability));
    }

    public function testGetAbilityById(): void
    {
        $this->assertUrlOk($this->endpoint->getAbilityById($this->integer),
            $this->fetcher->getAbilityById($this->integer));
    }

    public function testGetAllAbilities(): void
    {
        $this->assertUrlOk($this->endpoint->getAllAbilities(),
            $this->fetcher->getAllAbilities());
    }

    public function testGetCharacteristicById(): void
    {
        $this->assertUrlOk($this->endpoint->getCharacteristicById($this->integer),
            $this->fetcher->getCharacteristicById($this->integer));
    }

    public function testGetAllCharacteristics(): void
    {
        $this->assertUrlOk($this->endpoint->getAllCharacteristics(),
            $this->fetcher->getAllCharacteristics());
    }

    public function testGetEggGroupByName(): void
    {
        $this->assertUrlOk($this->endpoint->getEggGroupByName($this->eggGroup),
            $this->fetcher->getEggGroupByName($this->eggGroup));
    }

    public function testGetEggGroupById(): void
    {
        $this->assertUrlOk($this->endpoint->getEggGroupById($this->integer),
            $this->fetcher->getEggGroupById($this->integer));
    }

    public function testGetAllEggGroups(): void
    {
        $this->assertUrlOk($this->endpoint->getAllEggGroups(),
            $this->fetcher->getAllEggGroups());
    }

    public function testGetGenderByName(): void
    {
        $this->assertUrlOk($this->endpoint->getGenderByName($this->gender),
            $this->fetcher->getGenderByName($this->gender));
    }

    public function testGetGenderById(): void
    {
        $this->assertUrlOk($this->endpoint->getGenderById($this->integer),
            $this->fetcher->getGenderById($this->integer));
    }

    public function testGetAllGenders(): void
    {
        $this->assertUrlOk($this->endpoint->getAllGenders(),
            $this->fetcher->getAllGenders());
    }

    public function testGetGrowthRateByName(): void
    {
        $this->assertUrlOk($this->endpoint->getGrowthRateByName($this->growthRate),
            $this->fetcher->getGrowthRateByName($this->growthRate));
    }

    public function testGetGrowthRateById(): void
    {
        $this->assertUrlOk($this->endpoint->getGrowthRateById($this->integer),
            $this->fetcher->getGrowthRateById($this->integer));
    }

    public function testGetAllGrowthRates(): void
    {
        $this->assertUrlOk($this->endpoint->getAllGrowthRates(),
            $this->fetcher->getAllGrowthRates());
    }

    public function testGetNatureByName(): void
    {
        $this->assertUrlOk($this->endpoint->getNatureByName($this->nature),
            $this->fetcher->getNatureByName($this->nature));
    }

    public function testGetNatureById(): void
    {
        $this->assertUrlOk($this->endpoint->getNatureById($this->integer),
            $this->fetcher->getNatureById($this->integer));
    }

    public function testGetAllNatures(): void
    {
        $this->assertUrlOk($this->endpoint->getAllNatures(),
            $this->fetcher->getAllNatures());
    }

    public function testGetPokeathlonStatByName(): void
    {
        $this->assertUrlOk($this->endpoint->getPokeathlonStatByName($this->pokeathlonStat),
            $this->fetcher->getPokeathlonStatByName($this->pokeathlonStat));
    }

    public function testGetPokeathlonStatById(): void
    {
        $this->assertUrlOk($this->endpoint->getPokeathlonStatById($this->integer),
            $this->fetcher->getPokeathlonStatById($this->integer));
    }

    public function testGetAllPokeathlonStats(): void
    {
        $this->assertUrlOk($this->endpoint->getAllPokeathlonStats(),
            $this->fetcher->getAllPokeathlonStats());
    }

    public function testGetPokemonByName(): void
    {
        $this->assertUrlOk($this->endpoint->getPokemonByName($this->pokemon),
            $this->fetcher->getPokemonByName($this->pokemon));
    }

    public function testGetPokemonById(): void
    {
        $this->assertUrlOk($this->endpoint->getPokemonById($this->integer),
            $this->fetcher->getPokemonById($this->integer));
    }

    public function testGetAllPokemon(): void
    {
        $this->assertUrlOk($this->endpoint->getAllPokemon(),
            $this->fetcher->getAllPokemon());
    }

    public function testGetPokemonLocationAreasByName(): void
    {
        $this->assertUrlOk($this->endpoint->getPokemonLocationAreasByName($this->pokemon),
            $this->fetcher->getPokemonLocationAreasByName($this->pokemon));
    }

    public function testGetPokemonLocationAreasById(): void
    {
        $this->assertUrlOk($this->endpoint->getPokemonLocationAreasById($this->integer),
            $this->fetcher->getPokemonLocationAreasById($this->integer));
    }

    public function testGetPokemonColorByName(): void
    {
        $this->assertUrlOk($this->endpoint->getPokemonColorByName($this->pokemonColor),
            $this->fetcher->getPokemonColorByName($this->pokemonColor));
    }

    public function testGetPokemonColorById(): void
    {
        $this->assertUrlOk($this->endpoint->getPokemonColorById($this->integer),
            $this->fetcher->getPokemonColorById($this->integer));
    }

    public function testGetAllPokemonColors(): void
    {
        $this->assertUrlOk($this->endpoint->getAllPokemonColors(),
            $this->fetcher->getAllPokemonColors());
    }

    public function testGetPokemonFormByName(): void
    {
        $this->assertUrlOk($this->endpoint->getPokemonFormByName($this->pokemon),
            $this->fetcher->getPokemonFormByName($this->pokemon));
    }

    public function testGetPokemonFormById(): void
    {
        $this->assertUrlOk($this->endpoint->getPokemonFormById($this->integer),
            $this->fetcher->getPokemonFormById($this->integer));
    }

    public function testGetAllPokemonForms(): void
    {
        $this->assertUrlOk($this->endpoint->getAllPokemonForms(),
            $this->fetcher->getAllPokemonForms());
    }

    public function testGetPokemonHabitatByName(): void
    {
        $this->assertUrlOk($this->endpoint->getPokemonHabitatByName($this->pokemonHabitat),
            $this->fetcher->getPokemonHabitatByName($this->pokemonHabitat));
    }

    public function testGetPokemonHabitatById(): void
    {
        $this->assertUrlOk($this->endpoint->getPokemonHabitatById($this->integer),
            $this->fetcher->getPokemonHabitatById($this->integer));
    }

    public function testGetAllPokemonHabitats(): void
    {
        $this->assertUrlOk($this->endpoint->getAllPokemonHabitats(),
            $this->fetcher->getAllPokemonHabitats());
    }

    public function testGetPokemonShapeByName(): void
    {
        $this->assertUrlOk($this->endpoint->getPokemonShapeByName($this->pokemonShape),
            $this->fetcher->getPokemonShapeByName($this->pokemonShape));
    }

    public function testGetPokemonShapeById(): void
    {
        $this->assertUrlOk($this->endpoint->getPokemonShapeById($this->integer),
            $this->fetcher->getPokemonShapeById($this->integer));
    }

    public function testGetAllPokemonShapes(): void
    {
        $this->assertUrlOk($this->endpoint->getAllPokemonShapes(),
            $this->fetcher->getAllPokemonShapes());
    }

    public function testGetPokemonSpeciesByName(): void
    {
        $this->assertUrlOk($this->endpoint->getPokemonSpeciesByName($this->pokemon),
            $this->fetcher->getPokemonSpeciesByName($this->pokemon));
    }

    public function testGetPokemonSpeciesById(): void
    {
        $this->assertUrlOk($this->endpoint->getPokemonSpeciesById($this->integer),
            $this->fetcher->getPokemonSpeciesById($this->integer));
    }

    public function testGetAllPokemonSpecies(): void
    {
        $this->assertUrlOk($this->endpoint->getAllPokemonSpecies(),
            $this->fetcher->getAllPokemonSpecies());
    }

    public function testGetStatByName(): void
    {
        $this->assertUrlOk($this->endpoint->getStatByName($this->stat),
            $this->fetcher->getStatByName($this->stat));
    }

    public function testGetStatById(): void
    {
        $this->assertUrlOk($this->endpoint->getStatById($this->integer),
            $this->fetcher->getStatById($this->integer));
    }

    public function testGetAllStats(): void
    {
        $this->assertUrlOk($this->endpoint->getAllStats(),
            $this->fetcher->getAllStats());
    }

    public function testGetTypeByName(): void
    {
        $this->assertUrlOk($this->endpoint->getTypeByName($this->type),
            $this->fetcher->getTypeByName($this->type));
    }

    public function testGetTypeById(): void
    {
        $this->assertUrlOk($this->endpoint->getTypeById($this->integer),
            $this->fetcher->getTypeById($this->integer));
    }

    public function testGetAllTypes(): void
    {
        $this->assertUrlOk($this->endpoint->getAllTypes(),
            $this->fetcher->getAllTypes());
    }

    public function testGetLanguageByName(): void
    {
        $this->assertUrlOk($this->endpoint->getLanguageByName($this->language),
            $this->fetcher->getLanguageByName($this->language));
    }

    public function testGetLanguageById(): void
    {
        $this->assertUrlOk($this->endpoint->getLanguageById($this->integer),
            $this->fetcher->getLanguageById($this->integer));
    }

    public function testGetAllLanguages(): void
    {
        $this->assertUrlOk($this->endpoint->getAllLanguages(),
            $this->fetcher->getAllLanguages());
    }
}
