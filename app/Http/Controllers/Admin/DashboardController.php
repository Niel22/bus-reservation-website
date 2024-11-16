<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BookingDetails;
use App\Models\Route;
use App\Models\Terminal;
use App\Models\TransactionHistory;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('admin.index', [
            'terminal' => Terminal::count(),
            'route' => Route::count(),
            'booking' => BookingDetails::count(),
            'transaction' => TransactionHistory::count(),
            'users' => User::whereNot('name', 'Administrator')->count()
        ]);
    }

    public function bookings(){
        return view('admin.bookings', [
            'bookings' => BookingDetails::all()
        ]);
    }

    public function transaction(){
        return view('admin.transactions', [
            'transactions' => TransactionHistory::all()
        ]);
    }

    public function all_users(){
        return view('admin.all-users', [
            'all_users' => User::all()
        ]);
    }
}
