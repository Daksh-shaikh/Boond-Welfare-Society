<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donation extends Model
{
    use HasFactory;
    protected $table = "donation";

    protected $fillable = [
        'add_amount'
    ];
}
