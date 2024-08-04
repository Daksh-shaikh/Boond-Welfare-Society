<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donation2 extends Model
{
    use HasFactory;
    protected $table = "donation2";

    protected $fillable = [
        'add_cause'
    ];
}
