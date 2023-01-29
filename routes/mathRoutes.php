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
Route::view('/factor/what-is-the-factors-of-{num1}', 'math.factor-show');
Route::view('/factor-pair', 'math.factor-pair');
Route::view('/factor-pair/what-is-the-factors-pair-of-{num1}', 'math.factor-pair-show');
Route::view('/prime-factor', 'math.prime-factor');
Route::view('/prime-factor/what-is-the-prime-factor-of-{num1}', 'math.prime-factor-show');
Route::view('/square-root', 'math.square-root');
Route::view('/square-root/what-is-the-square-root-of-{num1}', 'math.square-root-show');
Route::view('/modulo', 'math.modulo');
Route::view('/modulo/what-is-{num1}-modulo-of-{num2}', 'math.modulo-show');
Route::view('/exponentiation', 'math.exponentiation');
Route::view('/exponentiation/what-is-{num1}-to-the-{num2}-th-power', 'math.exponentiation-show');
Route::view('/square-feet', 'math.square-feet');
Route::view('/square-feet/what-is-{num1}-square-feet-{num2}', 'math.square-feet-show');
Route::view('/trigonometry', 'math.trigonometry');
Route::view('/trigonometry/what-is-the-trigonometry-angle-of-{num1}', 'math.trigonometry-angles');
Route::view('/cube-root', 'math.cube-root');
Route::view('/cube-root/what-is-the-cube-root-of-{num1}', 'math.cube-root-show');
Route::view('/divisible-by-anything', 'math.divisible-by-anything');
Route::view('/divisible-by-anything/is-{num1}-divisible-by-anything', 'math.divisible-by-anything-show');
Route::view('/divisible-by', 'math.divisible-by');
Route::view('/divisible-by/is-{num1}-divisible-by-{num2}', 'math.divisible-by-show');
Route::view('/divided-by-what', 'math.divided-by-what');
Route::view('/divided-by-what/{num1}-divided-by-what-equals-{num2}', 'math.divided-by-what-show');
Route::view('/what-divided-by', 'math.what-divided-by');
Route::view('/what-divided-by/what-divided-by-{num1}-equals-{num2}', 'math.what-divided-by-show');
Route::view('/lowest-common-denominator', 'math.lowest-common-denominator');
Route::view('/greatest-common-factor', 'math.greatest-common-factor');
Route::view('/least-common-multiple', 'math.least-common-multiple');
Route::view('/least-common-multiple/lcm-of-{num1}-and-{num2}', 'math.least-common-multiple-show');
Route::post('/fact', function (Request $req){
    $num1 = $req->num1;
    $url = "/factorial/what-is-the-factorial-of-{$num1}";
    return Redirect::to($url);
});
Route::post('/factor', function (Request $req){
    $num1 = $req->num1;
    $url = "/factor/what-is-the-factors-of-{$num1}";
    return Redirect::to($url);
});
Route::post('/factor-pair', function (Request $req){
    $num1 = $req->num1;
    $url = "/factor-pair/what-is-the-factors-pair-of-{$num1}";
    return Redirect::to($url);
});
Route::post('/prime-factor', function (Request $req){
    $num1 = $req->num1;
    $url = "/prime-factor/what-is-the-prime-factor-of-{$num1}";
    return Redirect::to($url);
});
Route::post('/square-root', function (Request $req){
    $num1 = $req->num1;
    $url = "/square-root/what-is-the-square-root-of-{$num1}";
    return Redirect::to($url);
});

Route::post('/modulo', function (Request $req){
    $num1 = $req->num1;
    $num2 = $req->num2;
    $url = "/modulo/what-is-{$num1}-modulo-of-{$num2}";
    return Redirect::to($url);
});
Route::post('/exponentiation', function (Request $req){
    $num1 = $req->num1;
    $num2 = $req->num2;
    $url = "/exponentiation/what-is-{$num1}-to-the-{$num2}-th-power";
    return Redirect::to($url);
});
Route::post('/square-feet', function (Request $req){
    $num1 = $req->num1;
    $num2 = $req->num2;
    $url = "/square-feet/what-is-{$num1}-square-feet-{$num2}";
    return Redirect::to($url);
});
Route::post('/cube-root', function (Request $req){
    $num1 = $req->num1;
    $url = "/cube-root/what-is-the-cube-root-of-{$num1}";
    return Redirect::to($url);
});
Route::post('/divisible-by-anything', function (Request $req){
    $num1 = $req->num1;
    $url = "/divisible-by-anything/is-{$num1}-divisible-by-anything";
    return Redirect::to($url);
});
Route::post('/divisible-by', function (Request $req){
    $num1 = $req->num1;
    $num2 = $req->num2;
    $url = "/divisible-by/is-{$num1}-divisible-by-{$num2}";
    return Redirect::to($url);
});
Route::post('/divided-by-what', function (Request $req){
    $num1 = $req->num1;
    $num2 = $req->num2;
    $url = "/divided-by-what/{$num1}-divided-by-what-equals-{$num2}";
    return Redirect::to($url);
});
Route::post('/what-divided-by', function (Request $req){
    $num1 = $req->num1;
    $num2 = $req->num2;
    $url = "/what-divided-by/what-divided-by-{$num1}-equals-{$num2}";
    return Redirect::to($url);
});


