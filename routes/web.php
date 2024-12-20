<?php

use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\BusTerminalController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RouteController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', [AppController::class,'index'])->name('index');
Route::get('routes', [AppController::class,'routes'])->name('routes');

Route::get('routes/{id}', [AppController::class,'routes_details'])->name('routes.details');
Route::post('route/book', [AppController::class, 'book_route'])->name('routes.book');

Route::get('routes/details/travellers-details', [AppController::class,'travellers_details'])->name('routes.travellers_details');
Route::get('routes/details/payment', [AppController::class,'routes_payment'])->name('routes.payment');
Route::get('routes/{details}/pay', [AppController::class, 'pay'])->name('routes.pay');

Route::get('routes/details/booking-success', [AppController::class,'booking_success'])->name('routes.booking_success');
Route::get('about', [AppController::class,'about'])->name('about');
Route::get('contact', [AppController::class,'contact'])->name('contact');
Route::get('faqs', [AppController::class,'faqs'])->name('faqs');

// Profile
Route::group(['middleware' => 'auth'], function () {
    Route::get('profile', [ProfileController::class, 'profile'])->name('profile');
    Route::post('update-profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('my-bookings', [ProfileController::class, 'my_bookings'])->name('my_bookings');
    Route::get('my-payments', [ProfileController::class, 'my_payments'])->name('my_payments');
    Route::post('logout', [AuthController::class, 'logout'])->name('auth.logout');
});

// Admin
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('', [DashboardController::class, 'dashboard'])->name('dashboard');

    // Terminal
    Route::get('bus-terminal', [BusTerminalController::class, 'index'])->name('bus-terminal');
    Route::get('bus-terminal/create', [BusTerminalController::class, 'create_terminal'])->name('create-bus-terminal');
    Route::post('bus-terminal/create', [BusTerminalController::class, 'create'])->name('store-bus-terminal');
    Route::get('bus-terminal/{id}/edit', [BusTerminalController::class, 'edit_terminal'])->name('edit-bus-terminal');
    Route::post('bus-terminal/update', [BusTerminalController::class, 'update'])->name('update-bus-terminal');
    Route::get('bus-terminal/delete/{id}', [BusTerminalController::class, 'delete'])->name('delete-bus-terminal');

    // Routes
    Route::get('routes', [RouteController::class, 'index'])->name('routes');
    Route::get('routes/create', [RouteController::class, 'create_route'])->name('create-routes');
    Route::post('routes/create', [RouteController::class, 'create'])->name('store-routes');
    Route::get('routes/{id}/edit', [RouteController::class, 'edit_route'])->name('edit-routes');
    Route::post('routes/update/{id}', [RouteController::class, 'update_routes'])->name('update-routes');
    Route::get('routes/delete/{id}', [RouteController::class, 'delete'])->name('delete-route');

    Route::get('bookins', [DashboardController::class, 'bookings'])->name('bookings');
    Route::get('transactions', [DashboardController::class, 'transaction'])->name('transactions');
    Route::get('all-users', [DashboardController::class, 'all_users'])->name('all_users');
});



Route::group(['middleware' => 'guest'], function(){
    Route::get('/login', [AuthController::class,'login'])->name('login');
    Route::get('/register', [AuthController::class,'register'])->name('auth.register');
    Route::post('create', [AuthController::class, 'create'])->name('auth.create');
    Route::post('store', [AuthController::class, 'store'])->name('auth.store');
    Route::get('admin/login', [AdminAuthController::class, 'login'])->name('admin.login');
    Route::post('admin/login', [AdminAuthController::class, 'store'])->name('admin.store');
});
