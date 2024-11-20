<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;

Route::get('/', [VideoController::class, 'index']);

Route::post('/download',[VideoController::class, 'download']);
