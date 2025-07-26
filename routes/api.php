<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('v1/producto1s',App\http\Controllers\Api\v1\Producto1Controller::class);
