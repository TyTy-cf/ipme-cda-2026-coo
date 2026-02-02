<?php

namespace patterns\builder;

class SpellItem extends LeagueItem
{

    private int $manaCost;

    public function getManaCost(): int
    {
        return $this->manaCost;
    }

    public function setManaCost(int $manaCost): void
    {
        $this->manaCost = $manaCost;
    }

}