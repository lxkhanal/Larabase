<?php

use App\Http\Controllers\Inventory\Category_Controller;
use App\Http\Controllers\ProfileController;
use App\Modules\Inventory\Entity\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the Rout eServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get("/inventory/category/add", [Category_Controller::class, 'Add'])->name("inventory.cateogory.add"); 
    Route::post("/inventory/category/add-post",[Category_Controller::class,'AddPost']);  
    Route::get("inventory/category/",[Category_Controller::class,'Index']);
    Route::get("inventory/category/Edit",[Category_Controller::class,'Edit']);
    Route::post("/inventory/category/edit-post",[Category_Controller::class,'EditPost']);
    Route::get("inventory/category/Delete",[Category_Controller::class,'Delete']);
    Route::post("/inventory/category/delete-post",[Category_Controller::class,'DeletePost']);
   
});

require __DIR__.'/auth.php';

