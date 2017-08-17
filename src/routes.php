<?php 

$namespace = '\Ems\AdminEms\controllers';
$middleware = \Config::get('lfm.middlewares');

Route::group(['namespace' => $namespace , 'prefix' => 'admin', 'middleware' => $middleware], function () {
	Route::get('/panel' , function() {
		return view('admin.welcome');
	})->name('panel');
	
	Route::any('/dropzone', 'DropzoneController@upload')->name('dropzone');

	//Importante : seo_routes
	Route::get('/seo', 'SeoController@index')->name('seo.index');
	Route::get('/seo/{id}', 'SeoController@edit')->name('seo.edit');
	Route::put('/seo/update/{id}', 'SeoController@update')->name('seo.update');

	
	Route::group(['middleware' => 'users.mgm'] , function() {
		//Profile
		Route::resource('users', 'UserController');
		Route::get('/profile' , 'UserController@profile')->name('user.profile');
		
		//Roles
		Route::resource('roles', 'RoleController');
	});
	
	Route::any('/change-password' , 'UserController@changePassword')->name('user.changePassword');
	Route::post('/profile/save' , 'UserController@saveProfile')->name('save.profile');

	
});