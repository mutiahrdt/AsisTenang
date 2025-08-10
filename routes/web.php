<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/home', [HomeController::class, 'index']);
// routes/web.php
Route::get('/test', function () {
    return 'Test Route';
});
