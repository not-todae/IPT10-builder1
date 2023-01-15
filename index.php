<?php

namespace RefactoringGuru\Builder\Conceptual;

interface HouseBuilder
{
    public function buildDoors(): void;
    public function buildWindows(): void;
    public function buildRoof(): void;
    public function buildFlooring(): void;
    public function buildFoundation(): void;
}

class HouseWithGardenBuilder implements HouseBuilder
{
    private $product;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->product = new Product1();
    }

    public function buildDoors(): void
    {
        $this->product->parts[] = "Doors";
    }

    public function buildWindows(): void
    {
        $this->product->parts[] = "Windows";
    }

    public function buildWalls(): void
    {
        $this->product->parts[] = "Walls";
    }

    public function buildRoof(): void
    {
        $this->product->parts[] = "Roof";
    }

    public function buildFlooring(): void
    {
        $this->product->parts[] = "Flooring";
    }

    public function buildFoundation(): void
    {
        $this->product->parts[] = "Foundation";
    }

    public function buildGarden(): void
    {
        $this->product->parts[] = "Garden";
    }

    public function getResult(): Product1
    {
        $result = $this->product;
        $this->reset();

        return $result;
    }
}

class HouseWithGarageBuilder implements HouseBuilder
{
    private $product;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->product = new Product2();
    }

    public function buildDoors(): void
    {
        $this->product->parts[] = "Doors";
    }

    public function buildWindows(): void
    {
        $this->product->parts[] = "Windows";
    }

    public function buildWalls(): void
    {
        $this->product->parts[] = "Walls";
    }

    public function buildRoof(): void
    {
        $this->product->parts[] = "Roof";
    }

    public function buildFlooring(): void
    {
        $this->product->parts[] = "Flooring";
    }

    public function buildFoundation(): void
    {
        $this->product->parts[] = "Foundation";
    }

    public function buildGarage(): void
    {
        $this->product->parts[] = "Garage";
    }

    public function getResult(): Product2
    {
        $result = $this->product;
        $this->reset();

        return $result;
    }
}

class HouseWithSwimmingPoolBuilder implements HouseBuilder
{
    private $product;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->product = new Product3();
    }

    public function buildDoors(): void
    {
        $this->product->parts[] = "Doors";
    }

    public function buildWindows(): void
    {
        $this->product->parts[] = "Windows";
    }

    public function buildWalls(): void
    {
        $this->product->parts[] = "Walls";
    }

    public function buildRoof(): void
    {
        $this->product->parts[] = "Roof";
    }

    public function buildFlooring(): void
    {
        $this->product->parts[] = "Flooring";
    }

    public function buildFoundation(): void
    {
        $this->product->parts[] = "Foundation";
    }

    public function buildSwimmingPool(): void
    {
        $this->product->parts[] = "Swimming Pool";
    }

    public function getResult(): Product3
    {
        $result = $this->product;
        $this->reset();

        return $result;
    }
}

class HouseWithFancyStatuesBuilder implements HouseBuilder
{
    private $product;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->product = new Product4();
    }

    public function buildDoors(): void
    {
        $this->product->parts[] = "Doors";
    }

    public function buildWindows(): void
    {
        $this->product->parts[] = "Windows";
    }

    public function buildWalls(): void
    {
        $this->product->parts[] = "Walls";
    }

    public function buildRoof(): void
    {
        $this->product->parts[] = "Roof";
    }

    public function buildFlooring(): void
    {
        $this->product->parts[] = "Flooring";
    }

    public function buildFoundation(): void
    {
        $this->product->parts[] = "Foundation";
    }

    public function buildFancyStatues(): void
    {
        $this->product->parts[] = "Fancy Statues";
    }

    public function getResult(): Product4
    {
        $result = $this->product;
        $this->reset();

        return $result;
    }
}



class Product1
{
    public $parts = [];

    public function listParts(): void
    {
        echo "House Parts: " . implode(', ', $this->parts) . "\n\n";
    }
}

class Product2
{
    public $parts = [];

    public function listParts(): void
    {
        echo "House Parts: " . implode(', ', $this->parts) . "\n\n";
    }
}

class Product3
{
    public $parts = [];

    public function listParts(): void
    {
        echo "House Parts: " . implode(', ', $this->parts) . "\n\n";
    }
}


class Product4
{
    public $parts = [];

    public function listParts(): void
    {
        echo "House Parts: " . implode(', ', $this->parts) . "\n\n";
    }
}



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


function makeHouse(Director $director)
{
    $builder = new HouseWithGardenBuilder();
    $director->setHouseBuilder($builder);

    echo "House With Garden\n";
    $director->makeHouseWithGarden();
    $builder->getResult()->listParts();

    $garageBuilder = new HouseWithGarageBuilder();
    $director->setHouseBuilder($garageBuilder);

    echo "House With Garage\n";
    $director->makeHouseWithGarage();
    $garageBuilder->getResult()->listParts();

    $swimmingPoolBuilder = new HouseWithSwimmingPoolBuilder();
    $director->setHouseBuilder($swimmingPoolBuilder);


    echo "House With Swimming Pool\n";
    $director->makeHouseWithSwimmingPool();
    $swimmingPoolBuilder->getResult()->listParts();

    $fancyStatuesBuilder = new HouseWithFancyStatuesBuilder();
    $director->setHouseBuilder($fancyStatuesBuilder);


    echo "House With Fancy Statues\n";
    $director->makeHouseWithFancyStatues();
    $fancyStatuesBuilder->getResult()->listParts();
}

$director = new Director();
makeHouse($director);