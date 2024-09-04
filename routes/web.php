<?php

use App\Http\Controllers\CustomerController;
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
/*Route ::get('/',function(){
    return view('new');
});
Route ::get('/get-started',function(){
    return view('get-started');

});
Route ::get('/dashboard',function(){
    return view('dashboard');

});
*/

//Route::get('/',[defaultcontroller::class,'template']);
//Route::get('/',[DetailsController::class,'student']);
//Route::get('/insert',[DetailsController::class,'insert']);
//Route::get('/',[DetailsController::class,'insert_input']);
//Route::post('/create', [DetailsController::class,'insert']);
/*Route::get('/',[HelloController::class,'index']);
Route::get('/about',[HelloController::class,'about']);
Route::get('/services',[HelloController::class,'services']);
*/
Route::get('/customers', [CustomerController::class, 'index']);
Route::get('/customers/create', [CustomerController::class, 'create']);
Route::post('/customers', [CustomerController::class, 'store']);
