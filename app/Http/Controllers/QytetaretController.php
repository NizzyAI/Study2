<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Qytetaret;

class QytetaretController extends Controller
{
    public function index()
    {
        $qytetaret = Qytetaret::all();
        return view('qytetaret.qytetaret', ['qytetaret' => $qytetaret]);
    }

    public function show($id)
    {
        $qytetar = Qytetaret::findOrFail($id);
        return view('qytetaret.detaje', ['qytetar' => $qytetar]);
    }

  

    // Show the form to edit an existing qytetar
    public function edit($id)
    {
        $qytetar = Qytetaret::findOrFail($id);
        return view('qytetaret.edit', ['qytetar' => $qytetar]);
    }

    // Update the specified qytetar
    public function update(Request $request, $id)
    {
        $request->validate(rules: [
            'emri' => 'required|string|max:255',
            'mbiemri' => 'required|string|max:255',
            'gjinia' => 'required|string|in:M,F', 
            'viti_i_lindjes' => 'required|integer|min:1900|max:' . date('Y'), 
        ]);
    
        // Find the record to update
        $qytetar = Qytetaret::findOrFail($id);
        
        // Update the record with the new values
        $qytetar->update([
            'emri' => $request->emri,
            'mbiemri' => $request->mbiemri,
            'gjinia' => $request->gjinia,
            'viti_i_lindjes' => $request->viti_i_lindjes,
        ]);
    
        // Redirect to the list page
        return redirect()->route('qytetaret.index');
    }
    
}