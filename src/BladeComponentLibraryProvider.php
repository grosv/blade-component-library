<?php


namespace Grosv\BladeComponentLibrary;

use Grosv\BladeComponentLibrary\Components\SuccessAlertComponent;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;


class BladeComponentLibraryProvider extends ServiceProvider
{

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', null);
        $this->loadRoutesFrom(__DIR__.'/routes.php');

        Blade::component(SuccessAlertComponent::class, 'success-alert');
    }
}