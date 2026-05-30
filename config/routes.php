<?php

use App\Controllers\HomeController;
use App\Controllers\MovieController;
use App\Kernel\Router\Route;
use App\Middleware\AuthMiddleware;

return [
  Route::get('/home', [HomeController::class, 'index']),
  Route::get('/movies', [MovieController::class, 'index']),
  Route::get('/admin/movies/add', [MovieController::class, 'add'], [AuthMiddleware::class]),
  Route::post('/admin/movies/add', [MovieController::class, 'store']),
  Route::get('/register', [RegisterController::class, 'index'], [GuestMiddleware::class]),
  Route::post('/register', [RegisterController::class, 'register']),
  Route::get('/login', [LoginContoller::class, 'index'], [GuestMiddleware::class]),
  Route::post('/login', [LoginContoller::class, 'login']),
  Route::post('/logout', [LoginContoller::class, 'logout']),
];    