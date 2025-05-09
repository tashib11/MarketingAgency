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
Route::get('/consultancy', [ConsultancyController::class, 'ConsultPage']);


Route::get('/login', [UserController::class, 'LoginPage']);
Route::get('/verify', [UserController::class, 'VerifyPage']);

Route::get('/blog/{id}', [BlogController::class, 'BlogPage']);
Route::get('/blog', [BlogController::class, 'BlogPage']);
Route::get('/api/blog/{id}', [BlogController::class, 'show']);
Route::get('/api/blog-recent', [BlogController::class, 'recent']);
Route::get('/blogList', [BlogController::class, 'list']);

Route::get('/admin/blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('/admin/blog/store', [BlogController::class, 'store'])->name('blog.store');
Route::post('/api/blog-upload-image', [BlogController::class, 'uploadImage']);

Route::get('/admin/blogs', [BlogController::class, 'index'])->name('admin.blogs');
Route::get('/admin/blogs/{id}/edit', [BlogController::class, 'edit'])->name('admin.blogs.edit');
Route::put('/admin/blogs/{id}', [BlogController::class, 'update'])->name('blog.update');
Route::delete('/admin/blogs/{id}', [BlogController::class, 'destroy'])->name('admin.blogs.delete');



Route::get('/about-us', [AboutController::class, 'AboutPage']);
Route::get('/contact', [ContactController::class, 'ContactPage']);
Route::get('/career', [CareerController::class, 'CareerPage']);

// User Auth
Route::get('/UserLogin/{UserEmail}', [UserController::class, 'UserLogin']);
Route::get('/VerifyLogin/{UserEmail}/{OTP}', [UserController::class, 'VerifyLogin']);
Route::get('/logout',[UserController::class,'UserLogout']);




//service
Route::get('/digital-marketing', [ServiceController::class, 'DMPage']);
Route::get('/web-development', [ServiceController::class, 'WebDevPage']);
Route::get('/seo', [ServiceController::class, 'SEOPage']);
Route::get('/content-solution', [ServiceController::class, 'ContentSolPage']);
Route::get('/marketing-consultancy', [ServiceController::class, 'ConsultancyPage']);
Route::get('/creative-solution', [ServiceController::class, 'CreativeSolPage']);

//dashboard

Route::get("/Dashboard",[DashboardController::class,'dashboardPage']);
Route::get("/Dashboard/UserList",[UserController::class,'index'])->name('user.list');
Route::get('/Dashboard/UserList/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::post('/Dashboard/UserList/{id}/update', [UserController::class, 'update'])->name('user.update');

//admin service
Route::post('/service-booking', [ServiceBookingController::class, 'store']);
Route::get('/admin/service-list', [ServiceBookingController::class, 'index'])->name('service.list');
Route::post('/admin/service-update-status/{id}', [ServiceBookingController::class, 'updateStatus']);

Route::post('/seo-booking', [SeoBookingControler::class, 'store']);
Route::get('/admin/seo-list', [SeoBookingControler::class, 'index'])->name('seo.list');
Route::post('/admin/seo-update-status/{id}', [SeoBookingControler::class, 'updateStatus']);

Route::post('/free-consultancy', [FreeConsultanyController::class, 'store']);
Route::get('/admin/free-consultancy-list', [FreeConsultanyController::class, 'index'])->name('consultancy.list');
Route::post('/admin/consultancy-update-status/{id}', [FreeConsultanyController::class, 'updateStatus']);





