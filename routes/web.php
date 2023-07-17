<?php

	use App\Http\Controllers\ArticleController;
	use App\Http\Controllers\DashboardController;
	use App\Http\Controllers\JobController;
	use App\Http\Controllers\ProfileController;
	use App\Http\Controllers\UserController;
	use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return to_route('dashboard.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.', 'middleware' => ['auth', 'verified']], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');

    Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/create', [UserController::class, 'create'])->name('create');
    });

    Route::group(['prefix' => 'articles', 'as' => 'articles.'], function () {
        Route::get('/', [ArticleController::class, 'index'])->name('index');
        Route::get('/{article}/show', [ArticleController::class, 'show'])->name('show');
    });

	Route::group(['prefix' => 'jobs', 'as' => 'jobs.'], function () {
		Route::get('/', [JobController::class, 'index'])->name('index');
		Route::get('/{article}/show', [JobController::class, 'show'])->name('show');
	});
});

require __DIR__.'/auth.php';
