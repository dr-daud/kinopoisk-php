<?php

use App\Controllers\HomeController;
use App\Controllers\MovieController;
use App\Kernel\Router\Route;
use App\Middleware\AuthMiddleware;

return [
  Route::get('/home', [HomeController::class, 'index']),
  Route::get('/register', [RegisterController::class, 'index']),
  Route::post('/register', [RegisterController::class, 'register']),
  Route::get('/login', [LoginController::class, 'index']),
  Route::post('/login', [LoginController::class, 'login']),
];    