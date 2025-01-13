<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Qytetaret;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Qytetet extends Model
{
    protected $fillable = [
        'name'
    ];

    protected $table='qytetet';

    public $timestamps = false;

 public function qytetaret(): HasMany
    {
        return $this->hasMany(Qytetaret::class,'qyteti_id');
    }

    public function qytetaretMale()
    {
        return $this->hasMany(Qytetaret::class,'qyteti_id')->where('gjinia', 'M');
    }

    public function qytetaretFemale()
    {
        return $this->hasMany(Qytetaret::class,'qyteti_id')->where('gjinia', 'F');
    }
}