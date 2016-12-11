<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('foo', function () {
    return 'Hello World';
});
// Route::get('user/{id}', function ($id) {
//     return 'User '.$id;
// });

// Route::get('user/{name?}', function ($name = null) {
//     return $name;
// });


// Route::get('user/profile', function () {
//     //
// })->name('profile');

// Route::get('user/profile', 'UserController@showProfile')->name('profile');


// Route::group(['middleware' => 'auth'], function () {
//     Route::get('/', function () {
//         // 使用 Auth 中间件
//     });

//     Route::get('user/profile', function () {
//         // 使用 Auth 中间件
        
//     });
// });


Route::group(['namespace' => 'Admin'], function(){
    // 控制器在 "App\Http\Controllers\Admin" 命名空间下

    Route::group(['namespace' => 'User'], function(){
        // 控制器在 "App\Http\Controllers\Admin\User" 命名空间下
    });
});

Route::group(['domain' => '{account}.myapp.com'], function () {
    Route::get('user/{id}', function ($account, $id) {
        //
    });
});



Route::get('api/users/{user}', function (App\User $user) {
    return $user->email;
});

Route::get('admin/profile', function () {
    //
})->middleware('mada');