<?php

declare(strict_types=1);

namespace Hasnayeen\Evaicons;

use BladeUI\Icons\Factory;
use Illuminate\Support\ServiceProvider;

final class BladeEvaiconsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->callAfterResolving(Factory::class, function (Factory $factory) {
            $factory->add('evaicons', [
                'path' => __DIR__ . '/../resources/svg',
                'prefix' => 'eva',
            ]);
        });

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../resources/svg' => public_path('vendor/blade-eva-icons'),
            ], 'blade-eva-icons');
        }
    }
}
