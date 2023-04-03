<?php

namespace Currency\CurrencyConverter;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CurrencyConverterServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('currency-amount-converter')
            ->hasConfigFile();
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }
}
