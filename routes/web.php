<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/register',function(){
    return view('register');
});

Route::get('/login',function(){
    return view('login');
});



// Route::get('/update',function(){
//     return view('update');
// });

Route::get('/task',function(){
    $data=App\Models\Taskmodel::all();
    //return view('task')->with('taskmodels',$data);
    return view('task')->with('taskmodels',$data);
    //return view('task');
});

Route::get('/login','RegisterController@index');
Route::post('/check','RegisterController@check')->name('login.check');

Route::post('/add','RegisterController@store');
Route::post('/addtask','TaskController@storetodo');

Route::get('//markascompleted/{id}','TaskController@UpdateTaskAsCompleted');
Route::get('/markasnotcompleted/{id}','TaskController@UpdateTaskAsNotCompleted');

Route::get('/deletetask/{id}','TaskController@deletetask');
Route::get('/updatetask/{id}','TaskController@updatetaskview');

Route::post('/updatetasks','TaskController@updatetask');
