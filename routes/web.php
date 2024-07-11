<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('sanpham');
});

Route::view('/about', 'about')->name('page.about');
Route::get('/product', function () {
    return "Trang sản phẩm";
});


// nhóm với liên hệ
Route::prefix('admin')->group(function () {
    Route::get('/product', function () {
        return "PRODUCT";
    });
    Route::get('/category', function () {
        return "CATEGORY";
    });
});

    

Route::get('/book', function () {
        

   $books = DB::table('books')
        ->orderBy('price', 'desc')
        ->limit(8)
        ->get();
        // return $books; 
        dd($books);


});

Route::get('/books', function () {
        

    $books = DB::table('books')
         ->orderBy('price', 'asc')
         ->limit(8)
         ->get();
         // return $books; 
         dd($books);
 
 
 });

 Route::get('/book-list/{id}', function ($id) {
    $books = DB::table('books')
        ->where('category_id', '=', $id)
        ->get();
    return view('product', compact('books')); // Changed this line
});

Route::get('/detail/{id}', function ($id) {
    $books = DB::table('books')
        ->where('id', $id)
        ->first();
        // return $books;

        dd($books);
})->name('books.detail');