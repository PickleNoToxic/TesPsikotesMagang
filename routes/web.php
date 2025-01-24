<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DetailInteligenceQuotientTestController;
use App\Http\Controllers\DetailPersonalityTestController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\InteligenceQuotientTestController;
use App\Http\Controllers\PersonalityTestController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\PublicController;
use App\Models\MasterWeb;
use App\Http\Controllers\ValidationController;
use App\Http\Controllers\MasterWebController;
use App\Http\Controllers\UserController;
use App\Models\InteligenceQuotientTest;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::controller(PublicController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/registration', 'registration')->name('registration');
    Route::get('/resting-state', 'resting')->name('resting-state');
    Route::get('/biografi', 'biografi')->name('biografi');
    // Route::get('/cognitive', 'cognitive')->name('cognitive');
    Route::get('/finish', 'finish')->name('finish');
    Route::get('/inteligence-quotient',  'inteligenceQuotientTest')->name('inteligence-quotient');
    Route::get('/personality-test',  'personalityTest')->name('personality-test');
    Route::get('/psikotest-results',  'testResults')->name('psikotest-results');
});

Route::put('/inteligence-quotient-score',  [UserController::class, 'inteligence_score'])->name('inteligence-quotient-score');
Route::put('/personality-score',  [UserController::class, 'personality_score'])->name('personality-score');

Route::post('/user-store', [UserController::class, 'store'])->name('user.store');

Route::post('/inteligence-quotient-store/{userCode}', [DetailInteligenceQuotientTestController::class, 'store'])->name('inteligence-quotient-store');
Route::post('/personality-store/{userCode}', [DetailPersonalityTestController::class, 'store'])->name('personality-store');

Route::controller(AuthController::class)->group(function () {
    Route::get('/cms/login', 'index')->name('admin-login')->middleware('guest');
    Route::post('/cms/login', 'authenticate')->name('admin-authenticate');
    Route::get('/cms/logout', 'logout')->name('admin-logout');
});

Route::get('/master-web/latest', function () {
    $masterWebData = MasterWeb::latest()->first();
    return response()->json($masterWebData);
});

Route::prefix('cms')
    ->middleware('admin')
    ->group(function () {
        Route::get('/', function () {
            return redirect()->route('admin-home');
        });

        Route::controller(AdminController::class)->group(function () {
            Route::get('/dashboard', 'index')->name('admin-home');
        });

        Route::get('/participants', [UserController::class, 'all'])->name('participants-all');
    
        Route::resource('/inteligence-quotient-test', InteligenceQuotientTestController::class);
        Route::post('/inteligence-quotient-test/active', [InteligenceQuotientTestController::class, 'active'])->name('inteligence-quotient-test-active');
        Route::post('/inteligence-quotient-test/inactive', [InteligenceQuotientTestController::class, 'inactive'])->name('inteligence-quotient-test-inactive');

        Route::resource('/personality-test', PersonalityTestController::class);
        Route::post('/personality-test/active', [PersonalityTestController::class, 'active'])->name('personality-test-active');
        Route::post('/personality-test/inactive', [PersonalityTestController::class, 'inactive'])->name('personality-test-inactive');

        Route::put('/master-web/update-iq-test', [MasterWebController::class, 'updateIQTest'])->name('master-web.updateIQTest');
        Route::put('/master-web/update-personality-test', [MasterWebController::class, 'updatePersonalityTest'])->name('master-web.updatePersonalityTest');
});