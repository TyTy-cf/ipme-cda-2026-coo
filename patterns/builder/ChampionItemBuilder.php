<?php

namespace patterns\builder;

class ChampionItemBuilder extends LeagueBuilder
{

    public function createItem(int $id): void
    {
        $this->leagueItem = (new ChampionItem());
        if ($id == 1) {
            $this->leagueItem->setName("Akali");
            $this->leagueItem->setHpMax("550");
            $this->leagueItem->setManaMax("100");
        }
        if ($id == 2) {
            $this->leagueItem->setName("Velkoz");
            $this->leagueItem->setHpMax("525");
            $this->leagueItem->setManaMax("400");
        }
    }

}