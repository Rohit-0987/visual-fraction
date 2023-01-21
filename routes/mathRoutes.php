<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fact;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

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

//percentage
Route::view('/percentage', 'math.percentage');
Route::view('/percentage/what-is-{num1}-percent-of-{num2}', 'math.percentage-show');
Route::view('/percentage/{num1}-is-what-percent-of-{num2}', 'math.percentage-show-1');
Route::view('/percentage/what-is-percentage-difference-from-{num1}-to-{num2}', 'math.percentage-show-2');
//factorial
Route::view('/factorial', 'math.factorial');
Route::view('/factorial/what-is-the-factorial-of-{num1}', 'math.factorial-show');
Route::view('/factor', 'math.factor');
Route::post('/fact', function (Request $req){
    $num1 = $req->num1;
    $url = "/factorial/what-is-the-factorial-of-{$num1}";
    return Redirect::to($url);
});


