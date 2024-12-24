<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Qytetet;

class Qytetaret extends Model
{
    protected $fillable = [
        'emri',
        'mbiemri',
        'gjinia',
        'viti_i_lindjes',
        'qyteti_id'
    ];

    protected $table='qytetaret';

    public function qyteti()
    {
        return $this->belongsTo(Qytetet::class,'qyteti_id');
    }
}