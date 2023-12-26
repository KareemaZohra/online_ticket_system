<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trip extends Model
{
    use HasFactory;

    protected $table = 'trips';

    protected $fillable = ['location','trip_date'];
    public function seats(){
        return $this->hasMany(seat_allocation::class, 'trip_id', 'id');
    }
}
