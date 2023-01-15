<?php

namespace Builder1;

interface HouseBuilder
{
    public function buildDoors(): void;
    public function buildWindows(): void;
    public function buildRoof(): void;
    public function buildFlooring(): void;
    public function buildFoundation(): void;
}
?>