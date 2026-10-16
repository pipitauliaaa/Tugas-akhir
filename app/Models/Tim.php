<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tim extends Model
{
    use HasFactory;

    protected $table = 'tims'; 
    protected $fillable = ['nama', 'posisi', 'keahlian', 'email','bio','foto']; 
}
