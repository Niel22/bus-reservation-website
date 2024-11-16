<?php

namespace App\Http\Controllers;

use App\Models\BookingDetails;
use App\Models\Route;
use App\Models\Terminal;
use App\Models\TransactionHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PharIo\Manifest\Url;
use Illuminate\Support\Str;

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
            'duration' => ['required'],
            'departure' => ['required'],
            'country' => ['required'],
            'terminal' => ['required'],
            'destination' => ['required'],
            'price' => ['required']
        ]);

        $data['user_id'] = Auth::id();
        $data['price'] = $data['price'] * $data['seats'];
        $data['booking_id'] = 'AKTCBOOK' . Str::random(4);


        $booking_detail = BookingDetails::create($data);

        return redirect()->to(route('routes.payment', ['id' => $booking_detail->id]));
    }

    public function travellers_details(){
        return view('pages.traveller-details');
    }

    public function routes_payment(){
        $id = request('id');
        $details = BookingDetails::findOrFail($id);

        return view('pages.payment', [
            'details' => $details
        ]);
    }

    public function pay(){
        $details = request('details');

        $details = BookingDetails::findOrFail($details);

        $transaction = TransactionHistory::create([
            'user_id' => Auth::id(),
            'transaction_id' => 'AKTC' . Str::random(6),
            'status' => 'paid',
            'price' => $details->price + 500
        ]);

        return redirect()->to(route('routes.booking_success', ['details' => $details, 'transaction' => $transaction]));
    }

    public function booking_success(){
        $details = request('details');
        $transaction = request('transaction');

        $details = BookingDetails::findOrFail($details);
        $transaction = TransactionHistory::findOrFail($transaction);

        return view('pages.booking-success', [
            'details' => $details,
            'transaction' => $transaction
        ]);
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
