<?php

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
    return redirect()->route('login.index');
});
Route::get('/login','LoginController@index')->name('login.index');
Route::post('/login','LoginController@check')->name('login.check');



Route::get('/logout','LogoutController@index')->name('logout.index');

Route::group(['middleware'=>['verify']],function(){

	Route::group(['middleware' => ['admin']],function(){


		Route::get('/member','MemberController@index')->name('member.index');
		Route::get('/member/create','MemberController@create')->name('member.create');
		Route::post('/member/create','MemberController@store')->name('member.store');

		Route::get('/member/show/{id}','MemberController@show')->name('member.show');

		Route::get('/member/edit/{id}','MemberController@edit')->name('member.edit');
		Route::post('/member/edit/{id}','MemberController@update')->name('member.update');

		Route::get('/member/delete/{id}','MemberController@delete')->name('member.delete');
		Route::post('/member/delete/{id}','MemberController@confirmDelete')->name('confirmDelete.delete');
		
		Route::get('/bazar','MemberController@showBazar')->name('member.showBazar');
		Route::get('/bazar/summary','MemberController@summary')->name('member.summary');

		Route::get('/mealShow','MealController@showMeal')->name('meal.showMeal');
		
		// Route::get('/pdf','MemberController@pdf')->name('member.pdf');
		Route::get('/summary','MemberController@calculate')->name('member.calculate');


		


		// Route::get('/bazar/calculate','BazarController@calculation')->name('bazar.calculation');

	});

	Route::group(['middleware'=>['user']],function(){
		Route::get('/home/user/{id}','UserController@index')->name('user.index');
		Route::get('/home/profile/{id}','UserController@profile')->name('user.profile');
		Route::get('/user/edit/{id}','UserController@edit')->name('user.edit');
		Route::post('/user/edit/{id}','UserController@update')->name('user.update');
		Route::get('/user/bazar/{id}','BazarController@index')->name('bazar.index');

		Route::get('/user/bazar/create/{id}','BazarController@create')->name('bazar.create');
		Route::post('/user/bazar/create/{id}','BazarController@submit')->name('bazar.submit');
		Route::get('/meal','MealController@index')->name('meal.index');

		Route::get('/meal/{id}','MealController@index')->name('meal.index');
		Route::post('/meal/{id}','MealController@meal')->name('meal.meal');

		
	});

	
});

