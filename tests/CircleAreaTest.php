<?php

use AhmedSalah172002\CircleArea\CircleArea;

it('can get circle area correctly', function () {

    $area = CircleArea::Raduis(5)->getArea();

    expect($area)->toBe(78.5);
});
