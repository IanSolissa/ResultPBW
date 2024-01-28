<?php

use App\Http\Controllers\ArtisController;
use App\Http\Controllers\Category3Controller;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\Createcategorycontroller;
use App\Http\Controllers\CreateDashboard;
use App\Http\Controllers\CreateTiketController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DefaultnewsController;
use App\Http\Controllers\HomePagesController;
use App\Http\Controllers\JustinBieberController;
use App\Http\Controllers\LandingPageColdPlayerController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LandingpagePinkFloydController;
use App\Http\Controllers\ListTiketController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewTiketController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ThanksController;
use App\Http\Controllers\TulusController;
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
    // });


    // Route::get('/dashboard', function () {
        //     return view('dashboard');
        // })->middleware(['auth', 'verified'])->name('dashboard');


        // Route::get('/dashboard', function () {
            //     return view('welcome');
            //     return view('dashboard');
            // })->middleware(['auth', 'verified'])->name('dashboard');
            // Route::get('/', function () {
                //     return view('welcome');
                // });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


require __DIR__.'/auth.php';

Route::get('/',[LandingPageController::class,'index'])->middleware('guest');

Route::group(['prefix'=>'/dashboard'],function(){
    Route::resource('/list-tiket',ListTiketController::class)->middleware(['auth','IsAdmin']);
    Route::get('/createnews',[CreateDashboard::class,'index'])->middleware(['auth','IsAdmin']);
    Route::resource('/tiket',CreateTiketController::class)->middleware(['auth','IsAdmin']);
    Route::resource('/create-tiket',NewTiketController::class)->middleware(['auth','IsAdmin']);
    Route::resource('/manageartis',ArtisController::class)->middleware(['auth','IsAdmin']);
    Route::resource('/contactus',ContactUsController::class)->middleware('auth');


});
// Route::resource('/dashboard', DashboardController::class)->only([
    //     'index','show','edit','store','create','update','destory'
    // ])->middleware(['auth','IsAdmin']);
    Route::resource('/dashboard',DashboardController::class)->middleware(['auth','IsAdmin']);



    Route::resource('/register',RegisterController::class);
    Route::resource('/login',LoginController::class)->middleware('guest');
    Route::resource('/thanks',ThanksController::class)->middleware('auth');
    // Route::resource('/News',ThanksController::class)->middleware('auth');
    Route::resource('/News',DefaultnewsController::class);

// prefix
Route::get('/category/tiket/{tiket:nama_tiket}',[Createcategorycontroller::class,'index'])->middleware('auth');
Route::post('/category/tiket/post',[Createcategorycontroller::class,'store'])->middleware('auth');
Route::get('/category3/{transaksi:id}',[Category3Controller::class,'index'])->middleware('auth');

Route::get('/category/checkout/{transaksi}',[CheckoutController::class,'show'])->middleware(['auth','IsCustomer']);
// Category
Route::get('/checkout/{transaksi}',[CheckoutController::class,'show'])->middleware('auth');
Route::group(['prefix'=>'category'],function(){
    Route::resource('/checkout',CheckoutController::class)->middleware(['auth']);
    Route::resource('/E-tiket',CategoryController::class)->middleware('auth');
});
Route::resource('/category',CategoryController::class)->middleware('auth');


Route::group(['prefix'=>'/'],function(){
    Route::resource('/homepage',HomePagesController::class)->middleware("auth");
    Route::get('/logout',[HomePagesController::class,'logout'])->middleware("auth");
    Route::resource('/Pinkfloyd',LandingpagePinkFloydController::class)->middleware("auth");
    // Route::resource('/konser/{post:nama_konser}',LandingpagePinkFloydController::class);
    Route::resource('/coldplay',LandingPageColdPlayerController::class)->middleware("auth");
    Route::resource('/Justinbieber',JustinBieberController::class)->middleware("auth");
    // Route::resource('/justinbieber/{beritas:id}',JustinBieberController::class);
    Route::resource('/tulus',TulusController::class)->middleware("auth");
});
