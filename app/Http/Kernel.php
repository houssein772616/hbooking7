<?php
namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        // middlewares globaux
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            // middlewares du groupe web
        ],

        'api' => [
            // middlewares du groupe API
        ],
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        // autres middlewares
        'auth' => \App\Http\Middleware\Authenticate::class,
        'admin' => \App\Http\Middleware\EnsureUserIsAdmin::class,
        // Ajoute ici ton middleware
    ];
}
