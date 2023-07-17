<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('jobs', [\App\Http\Controllers\ApiController::class, 'createLog']);
Route::post('articles', [\App\Http\Controllers\ApiController::class, 'createArticles']);
Route::get('articles/{id?}', [\App\Http\Controllers\ApiController::class, 'getArticle']);
