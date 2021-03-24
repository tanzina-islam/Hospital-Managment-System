<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auths extends Model
{
    use HasFactory;

    protected $table = 'patients_info';

     protected $fillable = [ 'patients_name', 'age','patients_address','occupation',
     'patients_contact_number','nationality','religion','guardian','guardian_occupation'];
}

