<?php

namespace App\Models;

use App\Enums\DoctorSpecialist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Doctor extends Model
{
    use HasFactory;
    protected $table = 'doctors';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'salary', 'specialist'];
    protected $casts = [
        'specialist' => DoctorSpecialist::class,
    ];
}
