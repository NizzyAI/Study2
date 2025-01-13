<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Qytetaret;
class QytetaretController extends Controller
{
    public function index(){
        $qytetaret = Qytetaret::all();
        return view('qytetaret.qytetaret', ['qytetaret' => $qytetaret]);
    } 
    public function show($id)
    {
        $qytetar = Qytetaret::findOrFail($id);
        return view('qytetaret.detaje', ['qytetar' => $qytetar]);
    }
}