<?php

namespace AhmedSalah172002\CircleArea\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AhmedSalah172002\CircleArea\CircleArea
 */
class CircleArea extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \AhmedSalah172002\CircleArea\CircleArea::class;
    }
}
