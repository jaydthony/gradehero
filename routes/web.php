<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\CardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LocalizationController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('locale/{lang}', [LocalizationController::class, "setLang"]);

Route::get('/terms', function () {
    return view('terms-and-condition');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('/archives', function () {
    return view('archive');
});

Route::get('/giveaway', function () {
    return view('giveaway');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/faqs', function () {
    return view('faqs');
});

Route::get('/specials', function () {
    return view('specials');
});

Route::get('/sell-your-card', function () {
    return view('sell-your-card');
});

Route::post('/contact', [ContactController::class, 'store']); 

Route::get('/reload-captcha', [ContactController::class, 'reloadCaptcha']); 

Route::get('/upload-card', [CardController::class, 'index'])->name('upload-card');

Route::get('/success', [CardController::class, 'success'])->name('success');

Route::post('/archives', [Controller::class, 'archives']);

Route::get('/admin/dashboard', [CardController::class, 'dashboard'])->middleware('auth');

Route::get('/admin/profile/{id}', [CardController::class, 'profile'])->middleware('auth');

Route::put('/admin/profile/{user}', [CardController::class, 'updateProfile'])->middleware('auth');

Route::get('/admin/cards', [CardController::class, 'cards'])->middleware('auth');

Route::get('/admin/graded-cards', [CardController::class, 'graded'])->middleware('auth');

Route::get('/admin/messages', [CardController::class, 'messages'])->middleware('auth');

Route::get('/admin/contacts', [CardController::class, 'contacts'])->middleware('auth');

Route::get('/admin/grade/{card}', [CardController::class, 'grade'])->middleware('auth');

Route::get('/admin/edit-graded/{grade}', [CardController::class, 'editGraded'])->middleware('auth');

Route::get('/admin/edit-certificate/{certificate}', [CardController::class, 'editCertificate'])->middleware('auth');

Route::get('/admin/issue-certificate/{grade}', [CardController::class, 'issue'])->middleware('auth');

Route::put('/admin/updateCertificate/{certificate}', [CardController::class, 'updateCertificate'])->middleware('auth');

Route::put('/admin/updateGraded/{grade}', [CardController::class, 'updateGraded'])->middleware('auth');

Route::post('/admin/issue-certificate', [CardController::class, 'storeCertificate'])->middleware('auth');

Route::get('/admin/issued-certificates', [CardController::class, 'certificates'])->middleware('auth');

Route::post('/admin/archives', [Controller::class, 'archives'])->middleware('auth');

Route::post('/admin/grade', [CardController::class, 'save'])->middleware('auth');

Route::post('/upload-card', [CardController::class, 'store']);

// Show Register/Create Form
// Route::get('/admin/register', [UserController::class, 'create'])->middleware('guest');

// Create New User
// Route::post('/admin/create', [UserController::class, 'store']);

// Log User Out
Route::get('/admin/logout', [UserController::class, 'logout'])->middleware('auth');

// Show Login Form
Route::get('/admin/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Log In User
Route::post('/admin/authenticate', [UserController::class, 'authenticate']);

// Clear application cache:

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return 'Application cache has been cleared';
});
//Clear route cache:

Route::get('/route-cache', function() {
Artisan::call('route:cache');
    return 'Routes cache has been cleared';
});
//Clear config cache:

Route::get('/config-cache', function() {
  Artisan::call('config:cache');
  return 'Config cache has been cleared';
}); 
// Clear view cache:

Route::get('/view-clear', function() {
    Artisan::call('view:clear');
    return 'View cache has been cleared';
});