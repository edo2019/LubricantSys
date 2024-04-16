<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegController;


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



Route::get('/', function (){
    return view('welcome');

});



//Route::get('/', [LubricantsController::class, 'index'])->name('lubricants');
//Route::get('lubricants', [LubricantsController::class, 'lubricants']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/test', function () { return 'Test'; });
 
Route::get('/reg', [RegController::class, 'index'])->name('reg');

Route::post('/submit-form', [RegController::class, 'submitForm'])->name('submit_form_route');


Route::get('/company', [RegController::class, 'company'])->name('company');

Route::post('/store', [RegController::class, 'store'])->name('store');


Route::get('/success', function () {
    return view('success'); 
  })->name('success_route');