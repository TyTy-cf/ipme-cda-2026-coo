<?php

namespace patterns\builder;

class DirectorDeLaLeague
{

    private LeagueBuilder|null $builder = null;

    /**
     * @param LeagueBuilder $builder
     */
    public function setBuilder(LeagueBuilder $builder): DirectorDeLaLeague
    {
        $this->builder = $builder;
        return $this;
    }

    public function getItem(): LeagueItem|null
    {
        if ($this->builder != null) {
            return $this->builder->getItem();
        }
        return null;
    }

    public function constructItem(int $id): self {
        if ($this->builder != null) {
            $this->builder->createItem($id);
        } else {
            echo "No builder found, duh !";
        }
        return $this;
    }

}