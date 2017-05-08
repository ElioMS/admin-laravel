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

    public function edit(Request $request, $id) {
        $seo = SeoRoutes::findOrFail($id);
        return view('adminems::seo.edit', compact('seo'));
    }

    public function update(Request $request, $id) {
        $seo = SeoRoutes::findOrFail($id);

        $this->validate(request() , [
            'title' => 'required',
            'description' => 'required'
        ]);

        if ($seo) {
            $seo->title = request('title');
            $seo->description = request('description');
            $seo->save();

            session()->flash('success' , 'Información actualizada con exito');
            return redirect()->route('seo.index');

        } 
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
