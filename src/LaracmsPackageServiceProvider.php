<?php

namespace LaracmsPackage;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use LaracmsPackage\Commands\InstallCommand;

class LaracmsPackageServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laracms-package')
            ->hasViews()
            ->hasMigration('create_migration_table_name_table')
            ->hasCommand(InstallCommand::class);
    }
}
