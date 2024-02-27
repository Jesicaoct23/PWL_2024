<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello', function () { 
//     return 'Hello World'; 
//     });

// Route::get('/world', function () { 
//         return 'World'; 
//         }); 

// Route::get('/', function () { 
//             return 'Selamat Datang'; 
//             }); 
            

// Route::get('/about', function () { 
//              return 'NIM: 2341728014 <br> Nama : Jesica Oktavia'; 
//              }); 
                      
// Route::get('/user/{Jesica}', function ($Jesica) {
//     return 'Nama saya '.$Jesica;
// });

// Route::get('/posts/{post}/comments/{comment}', function
// ($postId, $commentId) {
// return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
// });

// Route::get('/user/{name?}', function ($name=null) {
//     return 'Nama saya '.$name;
// });

// Route::get('/user/profile', function($name) {
//     return "Nama Saya $name";
//     })->name('profile');

// Route::get('/routeprofile', function() {
//          return to_route('profile', ['name'=>'Jesica']);
// });

//Route::view('/welcome', 'welcome');
// Route::view('/welcome', 'welcome', ['name' => 'Taylor']);
    
 //Route::get('/hello', [WelcomeController::class,'hello']);
 //Route::get('/index', [WelcomeController::class,'index']);
 //Route::get('/about', [WelcomeController::class,'about']);
 //Route::get('/articles/{id}', [WelcomeController::class,'articles']);

 //use App\Http\Controllers\HomeController;
 //use App\Http\Controllers\AboutController;
 //use App\Http\Controllers\ArticleController;

 //Route::get('/', HomeController::class);
 //Route::get('/about', AboutController::class);
 //Route::get('/articles/{id}', ArticleController::class);

 use App\Http\Controllers\PhotoController;
Route::resource('photos', PhotoController::class);

///oute::resource('photos', PhotoController::class)->only([
   // 'index', 'show'
    //]);

//Route::resource('photos', PhotoController::class)->except([
      //  'create', 'store','update','destroy'
       // ]);

Route::get('/greeting', function(){
    return view('hello',['name' =>'Jesica']);
});
Route::get('/greeting', [WelcomeController::class,
'greeting']);