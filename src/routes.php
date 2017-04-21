<?php 

$namespace = '\Ems\AdminEms\controllers';

Route::group(['namespace' => $namespace], function () {
	Route::get('/panel' , 'AdminController@show')->name('panel');
});