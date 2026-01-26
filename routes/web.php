<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\FeaturesController;

Route::get('/', function () {
    return view('home.index');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth'])->name('dashboard');

// Cache clearing routes
Route::get('/clear-cache', function() {
    \Illuminate\Support\Facades\Artisan::call('cache:clear');
    \Illuminate\Support\Facades\Artisan::call('config:clear');
    \Illuminate\Support\Facades\Artisan::call('route:clear');
    \Illuminate\Support\Facades\Artisan::call('view:clear');
    return "Cache cleared successfully";
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//admin logout
Route::get('admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
Route::get('logout', function() {
    return view('auth.logout');
})->name('logout.success');
//end admin logout

//admin lock screen
Route::get('admin/lock-screen', [AdminController::class, 'AdminLockScreen'])->name('admin.lock_screen');
//end admin lock screen

//admin login
Route::post('admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');
//end admin login

//course verification
Route::get('/verify', [AdminController::class, 'Showverification'])->name('custom.verification.form');
//custom verification verify
Route::post('/verify', [AdminController::class, 'VerificationVerify'])->name('custom.verification.verify');
//end custom verification

//admin profile
Route::middleware('auth')->group(function () {
Route::get('/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
});
//end admin profile
//admin profile
Route::middleware('auth')->group(function () {
Route::post('profile.store', [AdminController::class, 'AdminProfileStore'])->name('profile.store');
});
Route::middleware('auth')->group(function () {
Route::post('admin/password/update', [AdminController::class, 'PasswordUpdate'])->name('admin.password.update');
Route::post('admin/two-factor/update', [AdminController::class, 'TwoFactorUpdate'])->name('admin.two_factor.update');
});

Route::middleware('auth')->group(function () {
//start slider
    Route::controller(SliderController::class)->group(function () {
        Route::get('view/slider', 'ViewSlider')->name('view_slider');
        Route::get('edit/slider/{id}', 'EditSlider')->name('edit_slider');
        Route::get('add/slider', 'AddSlider')->name('add_slider');
        Route::post('update/slider', 'UpdateSlider')->name('update_slider');
        Route::get('delete/slider/{id}', 'DeleteSlider')->name('delete_slider');
        Route::post('store/slider', 'StoreSlider')->name('store_slider');
        Route::get('preview/slider/{id}', 'PreviewSlider')->name('preview_slider');


         Route::post('change-slider/{id}', 'ChangeSlider')->name('change_slider');
    });

//end slider

//start features
     Route::controller(FeaturesController::class)->group(function () {
        Route::get('view/feature', 'ViewFeature')->name('view_feature');
        Route::get('edit/feature/{id}', 'EditFeature')->name('edit_feature');
        Route::get('add/feature', 'AddFeature')->name('add_feature');
        Route::post('update/feature', 'UpdateFeature')->name('update_feature');
        Route::get('delete/feature/{id}', 'DeleteFeature')->name('delete_feature');
        Route::post('store/feature', 'StoreFeature')->name('store_feature');
        Route::get('preview/feature/{id}', 'PreviewFeature')->name('preview_feature');


    });

//end features     

});
