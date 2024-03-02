<?php

declare(strict_types=1);

namespace Modules\ElevenLabs\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as BaseRouteServiceProvider;
use Illuminate\Support\Facades\Route;

final class RouteServiceProvider extends BaseRouteServiceProvider
{
    public function boot(): void
    {
        $this->routes(function (): void {
            Route::middleware('api')
                ->prefix('api')
                ->group(__DIR__ . '/../routes/api/routes.php');
        });
    }
}
