<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberAmount extends Model
{
    use HasFactory;
    protected $table = "member_registration_amount";

    protected $fillable = [
        'amount'
    ];
}
