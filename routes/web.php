<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\OneController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Models\City;
use App\Models\Country;
use App\Models\Student;
use App\Models\Department;

Route::get('/', function () {
    $country=City::with('country')->get();
    // dd($country);
    return view('welcome',compact('country'));
});
Route::get('/many', function () {
    $student=Student::all();
    dd($student);
    return view('manyjoin',compact('country'));
});
Route::get('/dashboard', function () {
    echo 'hello world';
});

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
Route::get('/city', [OneController::class,'city']);
Route::get('/city/add',[OneController::class,'city_add']);
Route::post('/city_insert',[OneController::class,'city_insert']);
Route::get('/country',[OneController::class,'country']);
Route::get('/country/add',[OneController::class,'county_add']);
Route::post('/country_insert',[OneController::class,'country_insert']);

Route::get('/post', [PostController::class,'post']);
Route::get('/post/add',[PostController::class,'post_add']);
Route::post('/post_insert',[PostController::class,'post_insert']);
Route::get('/country',[PostController::class,'country']);
Route::get('/country/add',[PostController::class,'county_add']);
Route::post('/country_insert',[PostController::class,'country_insert']);

Route::get('/tag', [TagController::class,'tag']);
Route::get('/tag/add',[TagController::class,'tag_add']);
Route::post('/tag_insert',[TagController::class,'tag_insert']);
Route::get('/country',[TagController::class,'country']);
Route::get('/country/add',[TagController::class,'county_add']);
Route::post('/country_insert',[TagController::class,'country_insert']);

require __DIR__.'/auth.php';
