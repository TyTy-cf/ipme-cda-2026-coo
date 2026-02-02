<?php

namespace patterns\builder;

class SpellItemBuilder extends LeagueBuilder
{

    public function createItem(int $id): void
    {
        $this->leagueItem = (new SpellItem());
        if ($id == 1) {
            $this->leagueItem->setName("Aucune idée");
            $this->leagueItem->setManaCost("75");
        }
        if ($id == 2) {
            $this->leagueItem->setName("Vraiment pas d'idée");
            $this->leagueItem->setManaCost("60");
        }
    }
}