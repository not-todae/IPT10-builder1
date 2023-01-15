<?php

namespace Builder1;

class Director
{
    /**
     * @var HouseBuilder
     */
    private $builder;

    public function setHouseBuilder(HouseBuilder $builder): void
    {
        $this->builder = $builder;
    }

    public function makeHouseWithGarden(): void
    {
        $this->builder->buildDoors();
        $this->builder->buildWindows();
        $this->builder->buildWalls();
        $this->builder->buildRoof();
        $this->builder->buildFlooring();
        $this->builder->buildFoundation();
        $this->builder->buildGarden();
    }

    public function makeHouseWithGarage(): void
    {
        $this->builder->buildDoors();
        $this->builder->buildWindows();
        $this->builder->buildWalls();
        $this->builder->buildRoof();
        $this->builder->buildFlooring();
        $this->builder->buildFoundation();
        $this->builder->buildGarage();
    }

    public function makeHouseWithSwimmingPool(): void
    {
        $this->builder->buildDoors();
        $this->builder->buildWindows();
        $this->builder->buildWalls();
        $this->builder->buildRoof();
        $this->builder->buildFlooring();
        $this->builder->buildFoundation();
        $this->builder->buildSwimmingPool();
    }

    public function makeHouseWithFancyStatues(): void
    {
        $this->builder->buildDoors();
        $this->builder->buildWindows();
        $this->builder->buildWalls();
        $this->builder->buildRoof();
        $this->builder->buildFlooring();
        $this->builder->buildFoundation();
        $this->builder->buildFancyStatues();
    }
}