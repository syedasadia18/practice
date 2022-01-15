<?php


use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', 'PostController@index');

Route::get('/setting', 'SettingController@setting');

Route::get('/blog', 'PostController@blog');

Route::get('/contact', 'PostController@contact');

Route::get('/contactcreate', 'PostController@contactCreate');


Route::get('/contactform', 'PostController@contactform');
//Route::post('/contactformcreate', 'PostController@contactformcreate');
Route::post('/contactformcreate', [PostController::class, 'contactformcreate'])->name('createform');

Route::get('/contactedit/{id}', [PostController::class, 'edit']);

Route::post('/contactupdate/{id}', [PostController::class, 'update']);

Route::get('/contactdelete/{id}', [PostController::class, 'delete']);


Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::get('/blogcreate', [BlogController::class, 'create']);

Route::post('/createblog', [BlogController::class, 'store'])->name('blogcreate');

Route::get('/blogdetails/{id}', [BlogController::class, 'show'])->name('blogdetails');
Route::get('/blogdelete/{id}', [BlogController::class, 'delete'])->name('blogdelete');

Route::get('/blogedit/{id}', [BlogController::class, 'edit'])->name('blogedit')->middleware('checklogin');
Route::post('/blogupdate/{id}', [BlogController::class, 'update'])->name('blogupdate');


Route::get('/join', function () {
    // $user = User::find(1);

    // return $user->blog;

    // $blog = Blog::find(1);

    // return $blog->user;

    $user = User::find(1);

    return $user->post;
});


Route::fallback(function () {
    return view('customerror');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
