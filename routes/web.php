<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [VideoController::class, 'index']);

Route::post('/download',[VideoController::class, 'download']);
