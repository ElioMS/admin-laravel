<?php 

$namespace = '\Ems\AdminEms\controllers';
$middleware = \Config::get('lfm.middlewares');

Route::group(['namespace' => $namespace , 'prefix' => 'admin', 'middleware' => $middleware], function () {
	Route::get('/panel' , 'AdminController@show')->name('panel');
	Route::any('/dropzone', 'DropzoneController@upload')->name('dropzone');

	//Importante : seo_routes
	Route::get('/seo', 'SeoController@index')->name('seo.index');
	Route::get('/seo/{id}', 'SeoController@edit')->name('seo.edit');
	Route::put('/seo/update/{id}', 'SeoController@update')->name('seo.update');
});