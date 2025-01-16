<?php

namespace LaracmsPackage;

use LaracmsPackage\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
