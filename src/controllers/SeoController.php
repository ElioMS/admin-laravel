<?php

namespace Ems\AdminEms\controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\SeoRoutes;

class SeoController extends Controller
{

    public function index() {
        $routes = SeoRoutes::All();
        return view('adminems::seo.index', compact('routes'));
    } 

    static function saveNewRoute($path) {
		SeoRoutes::create([
			'path' => $path
		]);
	}

    static function checkIfRouteExists($path) {
    	$route = SeoRoutes::wherePath($path)->first();
    	if (!$route) {
    		self::saveNewRoute($path);
    		return true;
    	} else {
    		return false;
    	}
    }
}
