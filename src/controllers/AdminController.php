<?php

namespace Ems\AdminEms\controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function show() {
    	return view('adminems::panel');
    	// return 'hola';
    }
}
