<?php

namespace Batistack\Tiers;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Batistack\Tiers\Commands\TiersCommand;

class TiersServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('tiers')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_tiers_table')
            ->hasCommand(TiersCommand::class);
    }
}
