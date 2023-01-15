<?php

namespace Builder1;

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

class Product2
{
    public $parts = [];

    public function listParts(): void
    {
        echo "House Parts: " . implode(', ', $this->parts) . "\n\n";
    }
}