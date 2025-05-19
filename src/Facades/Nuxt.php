<?php

namespace SenishinAleksey\LaravelNuxt\Facades;

use Illuminate\Support\Facades\Route;
use SenishinAleksey\LaravelNuxt\Http\Controllers\NuxtController;

class Nuxt
{
    public static function route(string $path)
    {
        return Route::get(
            '/'.trim(config('nuxt.prefix'), '/').'/'.trim($path, '/'),
            '\\'.NuxtController::class
        );
    }
}
