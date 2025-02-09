<?php

namespace AhmedSalah172002\CircleArea;

class CircleArea {

    public static function Raduis(float $radius)
    {
        return new self($radius);
    }
    public function __construct(protected float $radius) {
    }
    public function getArea(){

        return $this->radius * $this->radius * 3.14;

    }

}
