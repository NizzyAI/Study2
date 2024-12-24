<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Qytetet extends Model
{
    protected $fillable = [
        'name'
    ];

    protected $table='qytetet';

    public $timestamps = false;
}