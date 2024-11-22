<?php

use Illuminate\Support\Facades\Route;
use App\Models\Michael;
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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/about', function() {
//     return view('about');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/post/{id}/{name}', function ($id, $name){

//     return "this post  ".$id. " computed by me ". $name;
// });



// Route::get('/post/{id}','PostsController@index');


// Route::resource('posts', 'PostsController')

// Route::resource('posts', 'PostsController');

// Route::get('/contact', 'PostsController@contact');


Route::get('/', function(){

    return view('welcome');
});

Route::get('/create', function(){
    return view('create');
});
Route::get('/createsuccess', function(){
    return view('createsuccess');
});


// Route::post('/create', function()
// {
//     $Newarticles = new Newarticles();
//     $Newarticles ->title= request ('title');
//     $Newarticles->body =request ('body');
//     $Newarticles->save();

//     return redirect('/create');
     
    
// });
    

Route::post('/create', function(){
    $michael = new Michael();
    $michael ->name = request ('name');
    $michael->email =request ('email');
    $michael ->message= request ('message');

    $michael->save();

    return redirect('/createsuccess');
     
    
});
    