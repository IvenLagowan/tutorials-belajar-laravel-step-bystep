<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

//Dibawah latihat route view
// Route::view('/blog', 'blog', ['data' => 'Saya Pemograman Pemula']);

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/blog', function() {
//     // ambil data dari database
//     $profile = 'Aku Programer Nigga';
//     return view('blog', ['data' => $profile]);
// })->name('blog');


Route::get('blog/', [BlogController::class,'index']);


Route::get('blog/{id}', function (Request $request){
    //apgred data
    return redirect()->route('blog');
    // return 'Ini adalah parah meter '.$request->id;
});
