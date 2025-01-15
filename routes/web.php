<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\InteligenceQuotientTestController;
use App\Http\Controllers\PersonalityTestController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ValidationController;
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
    Route::get('/cognitive', 'cognitive')->name('cognitive');
    Route::get('/validation', 'validation')->name('validation');
    Route::get('/finish', 'finish')->name('finish');
});

Route::post('/user-store', [UserController::class, 'store'])->name('user.store');

Route::resource('/participants', ParticipantController::class);
Route::post('/validation-store/{userCode}', [ValidationController::class, 'store'])->name('validation-store');

Route::controller(AuthController::class)->group(function () {
    Route::get('/cms/login', 'index')->name('admin-login')->middleware('guest');
    Route::post('/cms/login', 'authenticate')->name('admin-authenticate');
    Route::get('/cms/logout', 'logout')->name('admin-logout');
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

        Route::resource('/events', EventController::class);
		Route::post('/events/active', [EventController::class, 'active'])->name('event-active');
		Route::post('/events/inactive', [EventController::class, 'inactive'])->name('event-inactive');

        Route::resource('/managements', ManagementController::class);
		Route::post('/managements/active', [ManagementController::class, 'active'])->name('management-active');
		Route::post('/managements/inactive', [ManagementController::class, 'inactive'])->name('management-inactive');

		Route::get('/participants', [ParticipantController::class, 'index'])->name('participants-all');
		Route::put('/participants/{participant}', [ParticipantController::class, 'update'])->name('participants-update');
		Route::delete('/participants/{participant}', [ParticipantController::class, 'destroy'])->name('participants-delete');

		Route::get('/participants/validations', [ParticipantController::class, 'validations'])->name('participants-validations');
        // Route::resource('/statistiks', StatistikController::class);
        // Route::resource('/heroes', HeroController::class);
        // Route::resource('/master', MasterWebController::class);
        // Route::resource('/testimonials', TestimonialController::class);
        // Route::resource('/galleries', OurGalleryController::class);
        // Route::resource('/contacts', ContactController::class);
        // Route::resource('/sosmeds', SosialMediaController::class);
        // Route::resource('/partners', PartnerController::class);
        // Route::resource('/posts', PostController::class);
        // Route::resource('/post-galleries', GalleryPostController::class);
        // Route::resource('/programs', ProgramController::class);
        // Route::resource('/facility/categories', CategoryFacilityController::class);
        // Route::resource('/facility/facilities', FacilityController::class);
        // Route::resource('/faqs', FaqController::class);

        Route::resource('/inteligence-quotient-test', InteligenceQuotientTestController::class);
        Route::post('/inteligence-quotient-test/active', [InteligenceQuotientTestController::class, 'active'])->name('inteligence-quotient-test-active');
        Route::post('/inteligence-quotient-test/inactive', [InteligenceQuotientTestController::class, 'inactive'])->name('inteligence-quotient-test-inactive');

        Route::resource('/personality-test', PersonalityTestController::class);
        Route::post('/personality-test/active', [PersonalityTestController::class, 'active'])->name('personality-test-active');
        Route::post('/personality-test/inactive', [PersonalityTestController::class, 'inactive'])->name('personality-test-inactive');
});