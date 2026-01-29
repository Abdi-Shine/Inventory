<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\TitlesController;
use App\Http\Controllers\Backend\DigitalMarketingController;
use App\Http\Controllers\Backend\FeatureController;
use App\Http\Controllers\Backend\ClientController;
use App\Http\Controllers\Backend\StatController;
use App\Http\Controllers\Backend\FrontendController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\AboutController;

Route::get('/', function () {
    $titles = \App\Models\Titles::first(); 
    $features = \App\Models\Feature::latest()->get();
    $clients = \App\Models\Client::latest()->get();
    $stats = \App\Models\Stat::latest()->get();
    return view('home.index', compact('titles','features','clients','stats'));
});

Route::get('/about', [FrontendController::class, 'AboutUs'])->name('about.us');
Route::get('/contact', [FrontendController::class, 'ContactUs'])->name('contact.us');
Route::post('/contact/message', [FrontendController::class, 'ContactMessage'])->name('contact.message');
Route::get('/service/details/{slug}', [FrontendController::class, 'ServiceDetails'])->name('service.details');
Route::get('/product/details/{slug}', [FrontendController::class, 'ProductDetails'])->name('product.details');
Route::get('/digital/marketing', [DigitalMarketingController::class, 'DigitalMarketingPage'])->name('digital.marketing');

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
     Route::controller(TitlesController::class)->group(function () {
        Route::get('view/title', 'ViewTitle')->name('view.title');
        Route::get('edit/title/{id}', 'EditTitle')->name('edit.title');
        Route::get('add/title', 'AddTitle')->name('add.title');
        Route::post('update/title', 'UpdateTitle')->name('update.title');
        Route::get('delete/title/{id}', 'DeleteTitle')->name('delete.title');
        Route::post('store/title', 'StoreTitle')->name('store.title');
        Route::get('preview/title/{id}', 'PreviewTitle')->name('preview.title');
    });

//end features  

//start answer Eamils 
     Route::controller(FrontendController::class)->group(function () {
        Route::get('view/answer', 'ViewAnswer')->name('view_answer');
        Route::get('edit/answer/{id}', 'EditAnswer')->name('edit_answer');
        Route::post('reply/message', 'ReplyMessage')->name('reply.message');
        Route::get('delete/answer/{id}', 'DeleteAnswer')->name('delete_answer');
    });
//end answer Eamils 

    // Service Routes 
    Route::controller(ServiceController::class)->group(function () {
        Route::get('/all/service', 'AllService')->name('all.service');
        Route::get('/add/service', 'AddService')->name('add.service');
        Route::post('/store/service', 'StoreService')->name('store.service');
        Route::get('/edit/service/{id}', 'EditService')->name('edit.service');
        Route::post('/update/service', 'UpdateService')->name('update.service');
        Route::get('/delete/service/{id}', 'DeleteService')->name('delete.service');
    }); 
    
    // Product Routes 
    Route::controller(ProductController::class)->group(function () {
        Route::get('/all/product', 'AllProduct')->name('all.product');
        Route::get('/add/product', 'AddProduct')->name('add.product');
        Route::post('/store/product', 'StoreProduct')->name('store.product');
        Route::get('/edit/product/{id}', 'EditProduct')->name('edit.product');
        Route::post('/update/product', 'UpdateProduct')->name('update.product');
        Route::get('/delete/product/{id}', 'DeleteProduct')->name('delete.product');
    });

    // Digital Marketing Admin Routes
    Route::controller(DigitalMarketingController::class)->group(function () {
        Route::get('/edit/digital/marketing', 'EditDigitalMarketing')->name('edit.digital.marketing');
        Route::post('/update/digital/marketing', 'UpdateDigitalMarketing')->name('update.digital.marketing');
    });


 // Features Routes
 Route::controller(FeatureController::class)->group(function(){
    Route::get('/all/features', 'AllFeatures')->name('all.features');
    Route::get('/add/features', 'AddFeatures')->name('add.features');
    Route::post('/store/features', 'StoreFeatures')->name('store.features');
    Route::get('/edit/features/{id}', 'EditFeatures')->name('edit.features');
    Route::post('/update/features', 'UpdateFeatures')->name('update.features');
    Route::get('/delete/features/{id}', 'DeleteFeatures')->name('delete.features');
});

// Client All Route 
Route::controller(ClientController::class)->group(function() {
    Route::get('/all/clients', 'AllClients')->name('all.clients');
    Route::get('/add/clients', 'AddClients')->name('add.clients');
    Route::post('/store/clients', 'StoreClients')->name('store.clients');
    Route::get('/edit/clients/{id}', 'EditClients')->name('edit.clients');
    Route::post('/update/clients', 'UpdateClients')->name('update.clients');
    Route::get('/delete/clients/{id}', 'DeleteClients')->name('delete.clients');
});

// Stat All Route 
Route::controller(StatController::class)->group(function() {
    Route::get('/all/stats', 'AllStats')->name('all.stats');
    Route::get('/add/stat', 'AddStat')->name('add.stat');
    Route::post('/store/stat', 'StoreStat')->name('store.stat');
    Route::get('/edit/stat/{id}', 'EditStat')->name('edit.stat');
    Route::post('/update/stat', 'UpdateStat')->name('update.stat');
    Route::get('/delete/stat/{id}', 'DeleteStat')->name('delete.stat');
});

// About Page All Routes
Route::controller(AboutController::class)->group(function () {
    Route::get('/view/about', 'AboutPage')->name('view_about');
    Route::get('/edit/about', 'EditAboutPage')->name('edit.about.page');
    Route::post('/update/about', 'UpdateAbout')->name('update.about');
    Route::get('/about/multi/image', 'AboutMultiImage')->name('about.multi.image');
    Route::get('/add/multi/image', 'AddMultiImage')->name('add.multi.image');
    Route::post('/store/multi/image', 'StoreMultiImage')->name('store.multi.image');
    Route::get('/edit/multi/image/{id}', 'EditMultiImage')->name('edit.multi.image');
    Route::post('/update/multi/image', 'UpdateMultiImage')->name('update.multi.image');
    Route::get('/delete/multi/image/{id}', 'DeleteMultiImage')->name('delete.multi.image');
});

    }); 
});
