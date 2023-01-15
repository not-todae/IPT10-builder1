<?php

namespace Builder1;

use Builder1\Director;
use Builder1\HouseBuilder;
use Builder1\HouseWithGardenBuilder;
use Builder1\HouseWithGarageBuilder;
use Builder1\HouseWithSwimmingPoolBuilder;
use Builder1\HouseWithFancyStatuesBuilder;

class Application
{
    public static function run()
    {
        $director = new Director();

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
}