<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationSectionController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    /*Route::get('/dashboard', function () {
        return view('dashboard.applicationSection');
    })->name('dashboard');*/
    Route::get('/dashboard', [ApplicationSectionController::class, 'showApplicationSection'])->name('dashboard');
});

// Route for rendering the Application section when the "Applications" link is clicked
Route::get('/applications', [ApplicationSectionController::class, 'showApplicationSection'])->middleware(['auth'])->name('applications');

Route::get('/application/undergraduate', [ApplicationSectionController::class, 'showUndergraduateSection'])->name('undergraduateSection');
Route::get('/application/postgraduate', [ApplicationSectionController::class, 'showPostgraduateSection'])->name('postgraduateSection');
