<?php

use Illuminate\Support\Facades\Route;
use App\Models\Item;
use App\Models\User;
use App\Models\Review;
use App\Models\Image;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ReviewclickController;
use App\Http\Controllers\FollowController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('item', ItemController::class);

Route::resource('review', ReviewController::class);

Route::resource('image', ImageController::class);

Route::resource('reviewclick', ReviewclickController::class);

Route::resource('follow', FollowController::class);


Route::get('/', [ItemController::class, 'index']);

Route::get('review/create/{item_id}', function($item_id){
    return view('reviews.review_create')->with('item_id', $item_id);
});

Route::get('item/delete/{item_id}', function($item_id){
    return view('items.item_delete')->with('item_id', $item_id);
});


Route::get('review/delete/{review_id}', function($review_id){
    return view('reviews.review_delete')->with('review_id', $review_id);
});

Route::get('image/create/{item_id}', function($item_id){
    return view('images.image_upload')->with('item_id', $item_id);
});

Route::get('/documentation', function(){
    return view('documentation.documentation');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
