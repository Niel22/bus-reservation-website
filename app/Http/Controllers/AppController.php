<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index(){
        return view('pages.home');
    }

    public function routes(){
        return view('pages.routes');
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
