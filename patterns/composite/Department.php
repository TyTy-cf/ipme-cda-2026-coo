<?php

namespace patterns\composite;

abstract class Department
{

    private string $name;

    private HeadDepartment $composite;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getComposite(): HeadDepartment
    {
        return $this->composite;
    }

    public function setComposite(HeadDepartment $composite): void
    {
        $this->composite = $composite;
    }

}