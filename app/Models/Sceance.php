<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sceance extends Model
{
    use HasFactory;

    protected $fillable = [

        'room_no',
        'treatment_id',
        'session_date',
        'session_time',
        'session_description',
        'session_notes',
        'session_price',
    ];
}
