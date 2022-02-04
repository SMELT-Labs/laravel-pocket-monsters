<?php

namespace SmeltLabs\PocketMonsters\Traits\Fetchers;

trait HasUtility
{
    public function getLanguageByName(string $name): array
    {
        return $this->fetch($this->builder->getLanguageByName($name));
    }

    public function getLanguageById(int $id): array
    {
        return $this->fetch($this->builder->getLanguageById($id));
    }

    public function getAllLanguages(): array
    {
        return $this->fetch($this->builder->getAllLanguages());
    }
}
