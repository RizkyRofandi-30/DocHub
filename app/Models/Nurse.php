<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Nurse extends Model
{
    use HasFactory;
    protected $table = 'nurses';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'salary', 'jenis_kelamin'];
}
