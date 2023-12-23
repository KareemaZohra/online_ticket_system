<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seat_allocation extends Model
{
    use HasFactory;

    protected $table = 'seat_allocation';

    protected $fillable = ['seat_no','trip_id'];
}
