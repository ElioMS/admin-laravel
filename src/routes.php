<?php 

$namespace = '\Ems\AdminEms\controllers';

Route::group(['namespace' => $namespace , 'prefix' => 'admin'], function () {
	Route::get('/panel' , 'AdminController@show')->name('panel');
});