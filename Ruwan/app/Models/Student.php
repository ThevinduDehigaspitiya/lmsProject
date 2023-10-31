<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_img_path',
        'first_name',
        'last_name',
        'gender',
        'bod',
        'email',
        'nic',
        'address_line1',
        'address_line2',
        'school',
        'contact_number',
        'whatsapp_number',
    ];
}
