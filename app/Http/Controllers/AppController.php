<?php

namespace App\Http\Controllers;

use App\Models\Route;
use App\Models\Terminal;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index(){
        return view('pages.home', [
            'terminals' => Terminal::all(),
            'routes' => Route::all()
        ]);
    }

    public function routes(){
        return view('pages.routes', [
            'terminals' => Terminal::all(),
            'routes' => Route::all()
        ]);
    }

    public function routes_details(){
        return view('pages.route-details');
    }

    public function travellers_details(){
        return view('pages.traveller-details');
    }

    public function routes_payment(){
        return view('pages.payment');
    }

    public function booking_success(){
        return view('pages.booking-success');
    }

    public function about(){
        return view('pages.about');
    }

    public function contact(){
        return view('pages.contact-us');
    }

    public function faqs(){
        return view('pages.faqs');
    }
}
