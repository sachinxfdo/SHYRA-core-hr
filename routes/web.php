<?php

use Illuminate\Support\Facades\Route;
use CoreHR\Employee\Controllers\EmployeeController;

Route::prefix('core-hr')->group(function () {
    Route::get('/employees', [EmployeeController::class, 'index']);
});
