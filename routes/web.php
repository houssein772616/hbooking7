<?php

use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\AppointmentController as AdminAppointmentController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\ForgotPasswordController;
use App\Http\Controllers\Admin\Auth\ResetPasswordController;
use Illuminate\Support\Facades\Route;

// Routes pour la réinitialisation du mot de passe admin
Route::get('/admin/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('admin.password.request');
Route::post('/admin/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('admin.password.email');
Route::get('/admin/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('admin.password.reset');
Route::post('/admin/password/reset', [ResetPasswordController::class, 'reset'])->name('admin.password.update');

// Routes pour l'authentification admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
        Route::resource('contacts', AdminContactController::class);
        Route::resource('appointments', AdminAppointmentController::class);
        Route::resource('blogs', AdminBlogController::class);
    });
});

// Routes générales
Route::get('/blog', [BlogController::class, 'index'])->name('blogs.index');
Route::post('/admin/blogs', [BlogController::class, 'store'])->name('admin.blogs.store');

Route::get('/', [WelcomeController::class, 'index']);
Route::post('/submitContact', [WelcomeController::class, 'submitContactForm'])->name('contact.submit');

// Routes pour les rendez-vous (hors admin)
Route::resource('appointments', AppointmentController::class)->except(['index', 'store']);
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');

// Routes pour les contacts
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/contacts', [ContactController::class, 'showContactForm'])->name('contacts');
Route::post('/contact', [ContactController::class, 'store'])->name('contacts.store');

// Routes pour le dashboard utilisateur
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Routes pour le profil utilisateur
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

// Inclusion des routes d'authentification
require __DIR__.'/auth.php';
