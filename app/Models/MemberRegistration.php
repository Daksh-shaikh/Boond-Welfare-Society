<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberRegistration extends Model
{
    use HasFactory;
    protected $table = "member_registration";

    protected $fillable = [
        'name',
        'gender',
        'age',
        'email',
        'mobilenumber',
        'city',
        'address',
        'pincode',
        'image',
        'payment_status',
        'amount',
        'user_id'
    ];
}
