<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Models\Qytetet;

class QytetetController extends Controller
{
    public function index(){
        $qytetet = Qytetet::withCount([
            'qytetaretMale as numri_i_meshkujve',
            'qytetaretFemale as numri_i_femrave'
        ])->get();
        
        return response()->json($qytetet, 200);
    }
}