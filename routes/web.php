<?php

use App\Http\Controllers\ProfileController;
use App\Models\Report;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/reports', function () {
    $reports = Report::all(); // Получаем все отчеты из базы данных
    return view('report.index', compact('reports')); // Передаем в представление
})->name('reports.index');

Route::get('/reports/create', function () {
    return view('report.create');
})->name('reports.create');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
