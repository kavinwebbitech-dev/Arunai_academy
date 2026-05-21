<?php

use App\Http\Controllers\AchieverController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MediaVideoController;
use App\Http\Controllers\StudyController;
use App\Http\Controllers\SitemapRobotsController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\EnquiryController;
use App\Models\Achiever;
use App\Models\Banner;
use Illuminate\Support\Facades\Route;

Route::get('/math-captcha', function () {
    $num1 = rand(1, 20);
    $num2 = rand(1, 20);

    session(['math_captcha' => $num1 + $num2]);

    return response()->json([
        'question' => "$num1 + $num2 = ?"
    ]);
});

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('service/{slug}', [FrontendController::class, 'serviceDetail'])->name('service.detail');
Route::post('enquiry/store', [FrontendController::class, 'enquiryStore'])->name('enquiry.store');

Route::get('about', function () {
    return view('frontend.pages.about');
})->name('about');
Route::get('ugtrb', function () {
    return view('frontend.pages.ugtrb');
})->name('ugtrb');
Route::get('pgtrb', function () {
    return view('frontend.pages.pgtrb');
})->name('pgtrb');
Route::get('testimonial', function () {
    return view('frontend.pages.testimonial');
})->name('testimonial');

Route::get('contact', function () {
    return view('frontend.pages.contact');
})->name('contact');

Route::any('mail', function () {
    return view('frontend.pages.mail');
})->name('mail');

Route::get('gallery-image', [GalleryController::class, 'show'])->name('gallery.image');
Route::get('/gallery-data', [GalleryController::class, 'getGallery'])->name('gallery.data');
Route::get('gallery-video', [GalleryController::class, 'index'])->name('gallery.video');

Route::get('admin', [AdminController::class, 'loginPage'])->name('admin.login');
Route::post('login', [AdminController::class, 'LoginCheck'])->name('login.submit');
Route::get('admin/dashboard', [AdminController::class, 'Dashboard'])->name('admin.dashboard');
Route::get('admin/category', [AdminController::class, 'category'])->name('category');
Route::post('admin/galleryStore', [AdminController::class, 'store'])->name('galleryStore');
Route::post('/gallery/update/{id}', [AdminController::class, 'update'])->name('gallery.update');
Route::delete('/gallery/delete/{id}', [AdminController::class, 'gallerydestroy'])->name('gallery.delete');
Route::post('/logout', [AdminController::class, 'logout'])->name('logout');

Route::resource('admin/gallery', AdminController::class);

Route::prefix('admin/media')->group(function () {

    Route::get('/', [MediaVideoController::class, 'index'])->name('media.index');

    Route::post('/store', [MediaVideoController::class, 'store'])->name('video.store');

    Route::put('/update/{id}', [MediaVideoController::class, 'update'])->name('media.update');

    Route::delete('/delete/{id}', [MediaVideoController::class, 'destroy'])->name('media.delete');
});




Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/pages', [LandingPageController::class, 'index'])->name('pages.index');
    Route::get('/pages/datatable', [LandingPageController::class, 'datatable'])->name('pages.datatable');
    Route::get('/pages/create', [LandingPageController::class, 'create'])->name('pages.create');
    Route::post('/pages/store', [LandingPageController::class, 'store'])->name('pages.store');
    Route::delete('/pages/delete-all', [LandingPageController::class, 'deleteAll'])->name('pages.deleteAll');
    Route::post('/pages/bulk-upload', [LandingPageController::class, 'bulkUpload'])->name('pages.bulk.upload');
    Route::get('/pages/{id}/edit', [LandingPageController::class, 'edit'])->name('pages.edit');
    Route::put('/pages/{id}/update', [LandingPageController::class, 'update'])->name('pages.update');
    Route::delete('/pages/{id}', [LandingPageController::class, 'destroy'])->name('pages.delete');

    Route::prefix('enquiry')->name('enquiry.')->controller(EnquiryController::class)->group(function () {
        Route::get('/list', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('data.store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::put('/update/{id}', 'update')->name('update');
        Route::delete('/enquiry-delete/{id}', 'destroy')->name('destroy');
    });

    Route::get('/sitemap-robots', [SitemapRobotsController::class, 'index'])->name('sitemap-robots.index');
    Route::post('/robots-upload', [SitemapRobotsController::class, 'upload'])->name('robots.upload');
    Route::get('/sitemap-download', [SitemapRobotsController::class, 'downloadSitemap'])->name('sitemap.download');
    Route::get('/robots-download', [SitemapRobotsController::class, 'downloadRobots'])->name('robots.download');

    Route::get('/list', [ServiceController::class, 'index'])->name('service.index');
    Route::get('/create', [ServiceController::class, 'create'])->name('service.create');
    Route::post('/store', [ServiceController::class, 'store'])->name('service.store');
    Route::get('/edit/{id}', [ServiceController::class, 'edit'])->name('service.edit');
    Route::put('/update/{id}', [ServiceController::class, 'update'])->name('service.update');
    Route::delete('/service-delete/{id}', [ServiceController::class, 'destroy'])->name('service.destroy');


    Route::get('achievers', [AchieverController::class, 'index'])
        ->name('achievers.index');

    // Create
    Route::get('achievers/create', [AchieverController::class, 'create'])
        ->name('achievers.create');

    // Store
    Route::post('achievers', [AchieverController::class, 'store'])
        ->name('achievers.store');

    // Show
    Route::get('achievers/{achiever}', [AchieverController::class, 'show'])
        ->name('achievers.show');

    // Edit
    Route::get('achievers/{achiever}/edit', [AchieverController::class, 'edit'])
        ->name('achievers.edit');

    // Update
    Route::put('achievers/{achiever}', [AchieverController::class, 'update'])
        ->name('achievers.update');

    // Delete
    Route::delete('achievers/{achiever}', [AchieverController::class, 'destroy'])
        ->name('achievers.destroy');
});

Route::get('achievers_page', function () {

    $achievers = Achiever::orderBy('year', 'desc')->get();

    $years = Achiever::select('year')
        ->distinct()
        ->orderBy('year', 'desc')
        ->pluck('year');

    return view('frontend.pages.achievers', compact('achievers', 'years'));
})->name('achievers_page');


Route::get('/admin/banner', [BannerController::class, 'index'])->name('banner');
Route::post('/admin/banner-store', [BannerController::class, 'store'])->name('banner.store');
// Route::post('/admin/banner-update/{id}', [BannerController::class, 'update'])->name('banner.update');
Route::post('/admin/banner-update/{id}', [BannerController::class, 'update'])->name('banner.update');
Route::delete('/admin/banner-delete/{id}', [BannerController::class, 'destroy'])->name('banner.delete');

Route::get('/admin/study-material', [StudyController::class, 'frontendList'])->name('study-material');
// Route::get('study-material', [StudyController::class, 'indexpage'])->name('study-material');

// Route::prefix('admin')->group(function () {
//     Route::get('study-material', [StudyMaterialController::class,'adminIndex'])->name('study-material');
Route::post('/admin/study-material/store', [StudyController::class, 'store'])->name('admin.study.store');
// });

Route::get('/admin/studymaterial', [StudyController::class, 'index'])->name('studymaterial');
Route::delete('/admin/study-material/delete/{id}', [StudyController::class, 'delete'])->name('admin.study.delete');
Route::post('/admin/study-material/update/{id}', [StudyController::class, 'update'])->name('admin.study.update');

Route::get('landingpages', function () {
    return view('frontend.landing');
})->name('landingpages');

Route::get('/{slug}', [FrontendController::class, 'landing'])->where('slug', '^(?!admin).*')->name('landing');
