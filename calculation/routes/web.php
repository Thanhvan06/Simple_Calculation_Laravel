<?php
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\CalculationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',function(){
    return view('calculator');
});
Route::post('calculator',[CalculationController::class, 'getData']);

Route::get('calculator', [CalculationController::class, 'getData']);