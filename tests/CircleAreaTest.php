<?php

use AhmedSalah172002\CircleArea\CircleArea;

it('can get circle area in correctly way', function () {

    $area = CircleArea::Raduis(5)->getArea();

    expect($area)->toBe(78.5);
});
