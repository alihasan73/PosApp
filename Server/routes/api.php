<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Authentication;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get("/posts", [PostController::class, 'index'])->middleware(['auth:sanctum']);
Route::get("/posts/{id}", [PostController::class, 'show'])->middleware(['auth:sanctum']);

Route::post("/login", [Authentication::class, 'login']);
Route::post("/posts", [PostController::class, 'create'])->middleware(['auth:sanctum']);
Route::patch("/posts/{id}", [PostController::class, 'update']);
Route::delete("/posts/{id}", [PostController::class, 'delete']);


Route::controller(CategoryController::class)->group(function (){
    Route::get('/category', 'index');
    Route::post('/category', 'create');
    Route::get('/category/{filename}', function ($filename) {
    $path = public_path('image/' . $filename);
    if (!file_exists($path)) {
        abort(404);
    }
    return response()->file($path);
    });
    Route::patch('/category/{id}', 'update');
});

Route::controller(ProductController::class)->group(function (){
    Route::get("/product", 'index');
    Route::post("/product", 'create');
    Route::patch("/product/{id}", 'update');
    Route::delete("/product/{id}", 'delete');
});

Route::get('/product/{filename}', function($filename){
    $path = public_path('product/' . $filename);
    if (!File::exists($path)) {
        return response()->json(['message' => 'Image not found.'], 404);
    }
    $file = File::get($path);
    $type = File::mimeType($path);
    $response = response($file, 200)->header('Content-Type', $type);
    return $response;
});


