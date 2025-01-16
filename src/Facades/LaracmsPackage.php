<?php

namespace LaracmsPackage\Facades;

use Illuminate\Support\Facades\Facade;
use LaracmsPackage\LaracmsPackageServiceProvider;

class LaracmsPackage extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return LaracmsPackageServiceProvider::class;
    }
}
