<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/add-fractions', 'factorial.add-fractions');

Route::view('/add-fractions/add-fract-{nume1}-{deno1}-plus-{nume2}-{deno2}', 'factorial.add-fractions-show');
