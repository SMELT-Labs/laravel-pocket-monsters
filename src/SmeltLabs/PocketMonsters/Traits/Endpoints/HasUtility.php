<?php

namespace SmeltLabs\PocketMonsters\Traits\Endpoints;

trait HasUtility
{
    public function getLanguageByName(string $name): string
    {
        return $this->urlV2("language", $name);
    }

    public function getLanguageById(int $id): string
    {
        return $this->urlV2("language", $id);
    }

    public function getAllLanguages(): string
    {
        return $this->urlV2("language");
    }
}
