<?php

namespace patterns\composite;

class HeadDepartment extends Department
{

    private array $composants = [];

    public function addComposant(Department $department): self {
        if (!in_array($department, $this->composants)) {
            $this->composants[] = $department;
        }
        return $this;
    }

    public function removeComposant(Department $department): self {
        if (in_array($department, $this->composants)) {
           unset($this->composants[array_search($department, $this->composants)]);
        }
        return $this;
    }

    public function getComposants(): array {
        return $this->composants;
    }

}