<?php

namespace App\Http\Controllers;

use App\Models\BookingDetails;
use App\Models\Route;
use App\Models\Terminal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PharIo\Manifest\Url;

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

    public function routes_details($id){
        return view('pages.route-details', [
            'route' => Route::where('id', $id)->firstOrFail()
        ]);
    }

    public function book_route(Request $request){
        
        if(!Auth::check()){
            session(['booking' => true, 'url' => Url()->previous()]);

            return redirect()->to(route('login'));
        }

        $seats = $request->t_seats;

        $data = $request->validate([
            'full_name' => ['required', 'string'],
            'id_no' => ['required', 'integer'],
            'seats' => ['required', 'integer', 'between:1,'. $seats],
            'contact' => ['required'],
            'address' => ['required'],
            'state' => ['required'],
            'country' => ['required'],
            'terminal' => ['required'],
            'destination' => ['required'],
            'price' => ['required']
        ]);

        $data['user_id'] = Auth::id();


        $booking_detail = BookingDetails::create($data);

        return redirect()->to(route('routes.payment'));
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
