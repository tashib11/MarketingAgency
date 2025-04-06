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
Route::get('/blogList', [BlogController::class, 'BlogList']);
Route::get('/blog/{id}', [BlogController::class, 'getBlog']);

Route::get('/career', [CareerController::class, 'CareerPage']);

// Brand List
// Category List
// Product List
// Slider
// Product Details
//policy



// User Auth
Route::get('/UserLogin/{UserEmail}', [UserController::class, 'UserLogin']);
Route::get('/VerifyLogin/{UserEmail}/{OTP}', [UserController::class, 'VerifyLogin']);
Route::get('/logout',[UserController::class,'UserLogout']);


// User Profile


// Product Review



// Product Wish



// Product Cart




// Invoice and payment


//payment

//dashboard

Route::get("/Dashboard",[DashboardController::class,'dashboardPage']);
Route::get("/Dashboard/ProductCreate",[ProductController::class,'create'])->name('product.create');
Route::post("/ProductStore",[ProductController::class,'store'])->name('product.store');
Route::get("/Dashboard/DetailsCreate",[ProductController::class,'detailCreate'])->name('product.detail.create');
Route::post("/ProductDetailStore",[ProductController::class,'detailstore'])->name('product.detail.store');
Route::get("/Dashboard/Piechart",[InvoiceController::class,'showPieChart'])->name('product.piechart');

Route::get("/Dashboard/ProductList",[ProductController::class,'index'])->name('product.list');

Route::get("/Dashboard/ProductEdit/{product}",[ProductController::class,'edit'])->name('product.edit');
Route::post("/Dashboard/ProductUpdate/{product}",[ProductController::class,'update'])->name('product.update');
Route::get('/Dashboard/ProductDelete/{id}', [ProductController::class, 'destroy'])->name('product.delete');

Route::get("/Dashboard/DetailsSelect",[ProductController::class,'detailSelect'])->name('product.detail.select');
Route::get("/Dashboard/DetailsEdit/{product}",[ProductController::class,'detailEdit'])->name('product.detail.edit');
Route::post("/Dashboard/DetailsUpdate/{product}",[ProductController::class,'detailUpdate'])->name('product.detail.update');




Route::get("/Dashboard/UserList",[UserController::class,'index'])->name('user.list');


Route::get('/service-list', [ServiceController::class, 'getServices']);
Route::get('/serviceById/{id}', [ServiceController::class, 'show']);
Route::post('/service-booking', [ServiceBookingController::class, 'store']);
Route::post('/seo-booking', [SeoBookingControler::class, 'store']);
Route::post('/free-consultancy', [FreeConsultanyController::class, 'store']);


Route::get('/about-us', [AboutController::class, 'AboutPage']);
Route::get('/contact', [ContactController::class, 'ContactPage']);






