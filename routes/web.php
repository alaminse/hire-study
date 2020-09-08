<?php

//auth & user
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/password/change', 'HomeController@changePassword')->name('password.change');
Route::post('/password/update', 'HomeController@updatePassword')->name('password.update');
Route::get('/user/logout', 'HomeController@Logout')->name('user.logout');
// student
Route::get('/', function () {return view('welcome');});
Route::get('/student/register', function () {return view('register');});
Route::get('/', 'Student@login')->name('student.login');
Route::post('/', 'Student@register')->name('student.register');
//auth & student
Auth::routes();

// university
Route::get('/university/login', function () {return view('university.login');});
Route::get('/university/register', function () {return view('university.register');});
Route::get('/university/login', 'University@login')->name('university.login');
Route::post('/university/register', 'University@register')->name('university.register');


//Route::get('/user/logout', 'HomeController@Logout')->name('user.logout');

//admin=======
Route::get('/admin/home', 'AdminController@index');
Route::get('/admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('/admin', 'Admin\LoginController@login');
Route::get('/create/post', 'Admin\PostController@index')->name('admin.create.post');
Route::post('/add/post', 'Admin\PostController@addCreatePost')->name('admin.add.post');
Route::get('admin/all/posts', 'Admin\PostController@allPosts')->name('admin.all.posts');
Route::get('delete/posts/{id}','Admin\PostController@DeletePosts');

// Password Reset Routes...
Route::get('/admin/password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('/admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('/admin/reset/password/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('/admin/update/reset', 'Admin\ResetPasswordController@reset')->name('admin.reset.update');
Route::get('/admin/Change/Password','AdminController@ChangePassword')->name('admin.password.change');
Route::post('/admin/password/update','AdminController@Update_pass')->name('admin.password.update'); 
Route::get('/admin/logout', 'AdminController@logout')->name('admin.logout');