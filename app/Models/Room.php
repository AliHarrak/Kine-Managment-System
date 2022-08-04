<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = [
        'no',
        'no_beds',
        'availability'
    ];


    /**
     * Returns css class based on availability state
     * @return string
     */
    function cssClass() : string
    {
        $class = "badge-outline-";
        $class .= $this->availability === 'available' ? "success" : "danger";
        return $class;
    }
}
