<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Models\Qytetaret;
use Illuminate\Validation\Rule;

class QytetaretController extends Controller
{
    public function index()
    {
        $qytetaret = Qytetaret::all();
        return response()->json($qytetaret,200);
    }
    public function show($id){
        $qytetaret = Qytetaret::with('qyteti')->findOrfail($id);
        return $qytetaret;
    }
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'emri' => 'required|string|max:255',
            'mbiemri' => 'required|string|max:255',
            'gjinia' => ['required', Rule::in(['male', 'female'])], 
            'viti_i_lindjes' => 'required|integer|between:1900,2024', 
            'qyteti_id' => 'required|exists:qytetet,id', 
        ]);

        if ($validated->fails()) {
             return response()->json(['error'=>'Te lutem dergoji te dhenat e duhura'], 400);
        }
        $emri = Str::title($request->input('emri'));
        $insertQytetaret = Qytetaret::insert(['emri'=>$emri]);

        $mbiemri = Str::title($request->input('mbiemri'));
        $insertQytetaret = Qytetaret::insert(['mbiemri'=>$mbiemri]);

        return response()->json($insertQytetaret);

        $qytetaret = Qytetaret::create($request->only([
            'emri',
            'mbiemri',
            'gjinia',
            'viti_i_lindjes',
            'qyteti_id'
        ]));

        return response()->json(['message' => 'Qytetaret u shtua me sukses','data' => $qytetaret
        ], 201);
    }
    

    public function update(Request $request, $id)
    {
        $qytetaret = Qytetaret::findOrFail($id);

        $validated = Validator::make($request->all(), [
            'emri' => 'sometimes|required|string|max:255',
            'mbiemri' => 'sometimes|required|string|max:255',
            'gjinia' => ['sometimes', 'required', Rule::in(['male', 'female'])],
            'viti_i_lindjes' => 'sometimes|required|integer|between:1900,2024',
            'qyteti_id' => 'sometimes|required|exists:qytetet,id',
        ]);

        if ($validated->fails()) {
            return response()->json(['error'=>'Te lutem dergoji parametrat e duhur'], 400); 
      
        $qytetaret->update($request->only([
            'emri',
            'mbiemri',
            'gjinia',
            'viti_i_lindjes',
            'qyteti_id'
        ]));

        return response()->json([
            'message' => 'Qytetari eshte perditesuar me sukses',
            'data' => $qytetaret], 200);
        } 
    }
    public function delete($id){
        $qytetaret = Qytetaret::findOrfail($id);
        $qytetaret->delete();
        return response()->json([
            'message' => 'Qytetari eshte fshire me sukses',
            'data' => $qytetaret], 200);
    }
}