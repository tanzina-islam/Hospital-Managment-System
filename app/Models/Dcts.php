<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dcts extends Model
{
    use HasFactory;
     protected $table = 'doctors_info';

     protected $fillable = [ 'doctor_name', 'role','doctor_contact_number'];
}


