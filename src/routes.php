<?php 

$namespace = '\Ems\AdminEms\controllers';

Route::group(['namespace' => $namespace , 'prefix' => 'admin'], function () {
	// Route::get('/panel' , 'AdminController@show')->name('panel');
	Route::any('/dropzone', 'DropzoneController@upload')->name('dropzone');
	Route::get('/seo', 'SeoController@index')->name('seo.index');
});