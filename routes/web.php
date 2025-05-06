<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ConsultancyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FreeConsultanyController;
use App\Http\Controllers\SeoBookingControler;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceBookingController;
use App\Http\Controllers\SeoBookingController;
use App\Http\Middleware\TokenAuthenticate;
use App\Models\Category;

// Home Page
Route::get('/', [HomeController::class, 'HomePage']);
Route::get('/getHomeSlides', [HomeController::class, 'getHomeSlides']);
Route::get('/consultancy', [ConsultancyController::class, 'ConsultPage']);


Route::get('/login', [UserController::class, 'LoginPage']);
Route::get('/verify', [UserController::class, 'VerifyPage']);

Route::get('/blog', [BlogController::class, 'BlogPage']);
Route::get('/blog/{id}', [BlogController::class, 'BlogPage']);


Route::get('/api/blog/{id}', [BlogController::class, 'show']);
Route::get('/api/blog-recent', [BlogController::class, 'recent']);
Route::get('/blogList', [BlogController::class, 'list']);

Route::get('/admin/blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('/admin/blog/store', [BlogController::class, 'store'])->name('blog.store');
Route::post('/api/blog-upload-image', [BlogController::class, 'uploadImage']);



Route::get('/about-us', [AboutController::class, 'AboutPage']);
Route::get('/contact', [ContactController::class, 'ContactPage']);

Route::get('/career', [CareerController::class, 'CareerPage']);

// User Auth
Route::get('/UserLogin/{UserEmail}', [UserController::class, 'UserLogin']);
Route::get('/VerifyLogin/{UserEmail}/{OTP}', [UserController::class, 'VerifyLogin']);
Route::get('/logout',[UserController::class,'UserLogout']);

//dashboard

Route::get("/Dashboard",[DashboardController::class,'dashboardPage']);
Route::get("/Dashboard/UserList",[UserController::class,'index'])->name('user.list');


Route::get('/service-list', [ServiceController::class, 'getServices']);
Route::get('/serviceById/{id}', [ServiceController::class, 'show']);
Route::post('/service-booking', [ServiceBookingController::class, 'store']);

Route::post('/seo-booking', [SeoBookingControler::class, 'store']);

Route::post('/free-consultancy', [FreeConsultanyController::class, 'store']);








