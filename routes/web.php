<?php

use App\Http\Controllers\GCategoryController;
use App\Http\Controllers\GraphicPortfolioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsLetterController;
use App\Http\Controllers\PostcategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\WCategoryController;
use App\Http\Controllers\WportfolioController;
use App\Models\GraphicPortfolio;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']
    )->name('index');
    Route::get('/CITblog', function(){
        return view('blogpage');
    })-> name('CITblog');
    Route::get('/services', function(){
        return view('services');
    })-> name('services');
    Route::get('/contact-us', function(){
        return view('contact');
    })-> name('contact-us');
    Route::get('/about-CIT', function(){
        return view('about-us');
    })-> name('about-CIT');
    Route::get('/seo-sol', function(){
        return view('seo');
    })-> name('seo-sol');
    Route::get('/web-dev', function(){
        return view('web-development');
    })-> name('web-dev');
    Route::get('/graphic-design', function(){
        return view('graphic-designing');
    })-> name('graphic-design');
    Route::get('/digital-marketing', function(){
        return view('digital-marketing');
    })-> name('digital-marketing');
    Route::get('/app-development', function(){
        return view('app-development');
    })-> name('app-development');
    Route::get('/uiux-design', function(){
        return view('uiux-design');
    })-> name('uiux-design');

    Route::get('/website_portfolio', [WportfolioController::class, 'show'])->name('website_portfolio');

    Route::post('/subscribe',[NewsletterController::class, 'store'])->name('subscribe');

Auth::routes();
//admin routes
Route::middleware(['auth'])->prefix('admin')->group(function (){
    // Route::get('dashboard', [HomeController::class, 'index']);
    // Route::get('/dashboard', function(){
    //     return view('admin.dashboard');
    // });
    Route::get('dashboard', [HomeController::class, 'redirect']);
    Route::resource('category', WCategoryController::class);
    Route::resource('g_category', GCategoryController::class);
    Route::resource('tag', TagController::class);
    Route::resource('post', PostController::class);
    Route::resource('post-category', PostcategoryController::class);
    Route::resource('wportfolio', WportfolioController::class);
    Route::resource('graphicportfolio', GraphicPortfolioController::class);
    Route::get('/logout', [HomeController::class, 'logout'])->name('logout');



    // Optional Routes, You Can change it but it require more change on their routes.
    
    
    // Route::group(['prefix'=>'category','as'=>'category.'], function(){
    //     Route::get('/', [WCategoryController::class, 'index'])->name('category');
    //     Route::get('create', [WCategoryController::class, 'create'])->name('create');
    //     Route::post('store', [WCategoryController::class, 'store'])->name('store');
    //     Route::get('show', [WCategoryController::class, 'show'])->name('show');
    //     Route::get('edit', [WCategoryController::class, 'edit'])->name('edit');
    //     Route::get('update', [WCategoryController::class, 'update'])->name('update');
    //     Route::get('destroy', [WCategoryController::class, 'destroy'])->name('destroy');
    // });
    // Route::group(['prefix'=>'g_category','as'=>'g_category.'], function(){
    //     Route::get('/', [GCategoryController::class, 'index'])->name('g_category');
    //     Route::get('create', [GCategoryController::class, 'create'])->name('create');
    //     Route::post('store', [GCategoryController::class, 'store'])->name('store');
    //     Route::get('show', [GCategoryController::class, 'show'])->name('show');
    //     Route::get('edit', [GCategoryController::class, 'edit'])->name('edit');
    //     Route::get('update', [GCategoryController::class, 'update'])->name('update');
    //     Route::get('destroy', [GCategoryController::class, 'destroy'])->name('destroy');
    // });
});