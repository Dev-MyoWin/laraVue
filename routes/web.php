<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminCheck;

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
Route::prefix('app')->middleware([AdminCheck::class])->group(function(){
//tag
Route::post('/create_tag','AdminController@addTag');
Route::get('/get_tag','AdminController@getTag');
Route::post('/edit_tag','AdminController@editTag');
Route::post('/delete_tag','AdminController@deleteTag');
//category
Route::post('/upload','AdminController@upload');
Route::post('/delete_image','AdminController@deleteImage');
Route::post('/create_category','AdminController@addCategory');
Route::get('/get_category','AdminController@getCategory');
Route::post('/edit_category','AdminController@editCategory');
Route::post('/delete_category','AdminController@deleteCategory');
//user
Route::post('/create_user','AdminController@createUser');
Route::get('/get_users','AdminController@getUsers');
Route::post('/edit_user','AdminController@editUser');
Route::post('/delete_user','AdminController@deleteUser');
Route::post('/admin_login','AdminController@adminLogin');
//role
Route::post('/create_role','AdminController@addRole');
Route::get('/get_roles','AdminController@getRole');
Route::post('/edit_role','AdminController@editRole');
Route::post('/delete_role','AdminController@deleteRole');
Route::post('/assign_roles','AdminController@assignRole');


});

Route::post('app/create_user','AdminController@createUser');
Route::get('/logout','AdminController@logout');
Route::get('/','AdminController@index');
Route::any('{slug}','AdminController@index');
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::any('{slug}',function(){
//     return view('welcome');
// });
// Route::get('/new','TestController@controllerMethod');
