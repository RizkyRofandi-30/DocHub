<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'no_hp',
        'date_time',
        'doctor_id',
        'message',
        'status'
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
