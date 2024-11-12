<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    protected $fillable = [
        'terminal_id',
        'destination',
        'seats',
        'price',
        'duration',
        'departure'
    ];

    public function terminal(){
        return $this->belongsTo(Terminal::class);
    }
}
