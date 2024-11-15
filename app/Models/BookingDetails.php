<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'id_no',
        'seats',
        'contact', 
        'address',
        'state',
        'country',
        'terminal',
        'destination',
        'price'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
