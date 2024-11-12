<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Route;
use App\Models\Terminal;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index(){
        return view('admin.route.index', [
            'routes' => Route::all(),
        ]);
    }

    public function create(){
        return view('admin.route.create', [
            'terminals' => Terminal::all()
        ]);
    }
}
