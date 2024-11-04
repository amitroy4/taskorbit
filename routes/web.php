<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\CompanyDocumentsController;
use App\Http\Controllers\Admin\CompanyInformation;
use App\Http\Controllers\Admin\CompanyInformationController;
use App\Http\Controllers\Admin\DomainController;
use App\Http\Controllers\Admin\HostingController;

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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::resource('/dashboard/client', ClientController::class);
    Route::resource('/dashboard/domain', DomainController::class);
    Route::resource('/dashboard/hosting', HostingController::class);
    Route::resource('/dashboard/company-information',CompanyInformationController::class);
    Route::resource('/dashboard/company-documents',CompanyDocumentsController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
