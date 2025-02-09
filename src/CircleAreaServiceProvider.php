<?php

namespace AhmedSalah172002\CircleArea;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use AhmedSalah172002\CircleArea\Commands\CircleAreaCommand;

class CircleAreaServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('circle-area')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_circle_area_table')
            ->hasCommand(CircleAreaCommand::class);
    }
}
