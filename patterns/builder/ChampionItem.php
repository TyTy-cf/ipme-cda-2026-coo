<?php

namespace patterns\builder;

class ChampionItem extends LeagueItem
{

    private int $hpMax;
    private int $manaMax;

    public function getHpMax(): int
    {
        return $this->hpMax;
    }

    public function setHpMax(int $hpMax): void
    {
        $this->hpMax = $hpMax;
    }

    public function getManaMax(): int
    {
        return $this->manaMax;
    }

    public function setManaMax(int $manaMax): void
    {
        $this->manaMax = $manaMax;
    }
}