<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Models\Qytetet;

class QytetetController extends Controller
{
    public function index(){
        $qytetet = Qytetet::all();
        return response()->json($qytetet, 200);
    }
    public function show($id){
        $qytetet = Qytetet::findOrfail($id);
        return $qytetet;
    }

    public function store(Request $request){
        $validated = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:qytetet',
        ]);
        if ($validated->fails()) {
            return response()->json(['error'=>'Te lutem dergoje parametrin name'], 400);
        }
       
        $name = Str::title($request->input('name'));
        $insertQytetet = Qytetet::insert(['name'=>$name]);
        
        return response()->json($insertQytetet);

        $qytetet = Qytetet::create($request->only([
            'name'
        ]));

        return response()->json([
            'message' => 'Qyteti u krijua me sukses',
            'data' => $qytetaret
        ], 201);

    }

    public function update($id, Request $request)
    {
        $validated = Validator::make($request->all(), 

        [
            'name' => 'required|string|max:255|unique:qytetet',
        ]);

        if ($validated->fails()) {
            return response()->json(['error'=>'Te lutem dergoje parametrin e duhur'], 400);
            
        }
        $qytetet = Qytetet::where('id',$id)->update(['name' => $request->input('name')]);
        return $qytetet;
    }
    public function delete($id){
        $qytetet = Qytetet::findOrfail($id);
        $qytetet->delete();
        return $qytetet;
    }
}