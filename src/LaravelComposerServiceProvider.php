<?php

namespace Dedecube\Composer;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Dedecube\Composer\Commands\LaravelComposerCommand;

class LaravelComposerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-composer')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-composer_table')
            ->hasCommand(LaravelComposerCommand::class);
    }
}
