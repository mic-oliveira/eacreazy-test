<?php

use App\Http\Controllers\ZipCodeController;
use Illuminate\Support\Facades\Route;

Route::get('/search/local/{zipCode}', [ZipCodeController::class, 'zipCodeSearch']);
