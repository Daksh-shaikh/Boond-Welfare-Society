<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donationAmount extends Model
{
    use HasFactory;
    protected $table = "donation_amount";

    protected $fillable = [
        'name',
        'email',
        'mobilenumber',
        'amount'
    ];
}
