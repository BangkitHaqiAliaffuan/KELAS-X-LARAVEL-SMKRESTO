<?php

    namespace App\Http\Middleware;

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
         $middleware -> use( [
            
            'CekLogin' => \App\Http\Middleware\CekLogin::class, // Tambahkan ini
        ]);
        
        
        
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
