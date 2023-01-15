<?php

namespace Builder1;

abstract class House 
{
    protected $door;
    protected $windows;
    protected $walls;
    protected $roof;
    protected $foundation;
}

class HouseWithGarden extends House
{
}

class HouseWithGarage extends House
{
}

class HouseWithSwimmingPool extends House
{
}

class HouseWithFancyStatues extends House
{
}