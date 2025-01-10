<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Panel\Http\Controllers\Auth\MemberController;
use Illuminate\Session\Middleware\StartSession;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// Route::group(['prefix' => 'auth', 'middleware' => 'guest'], function () {
//     Route::post('do_login', [MemberController::class, 'do_login'])->name('do_login');
// });