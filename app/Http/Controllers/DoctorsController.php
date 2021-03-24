<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Dcts;

class DoctorsController extends Controller
{
    
public function index(){
        $dcts = Dcts::latest()->paginate(5);

        return view('dcts.index', compact('dcts'));
    }

     public function create(){

        return view('dcts.create');
    }

    public function store(Request $request){ $request->validate([
            'doctor_name' => 'required',
            'role'=>'required',
            'doctor_contact_number'=>'required'

        ]);

        Dcts::create($request->all());

        return redirect()->route('dcts.index')->with('success', 'Profile Created Successflly!');
    }

     public function show(Dcts $dct)
    {
        return view('dcts.Show',compact('dct'));
           
    }

    public function edit(Dcts $dct){
        return view('dcts.edit', compact('dct'));
    }


    public function update(Request $request, Dcts $dct){
        $request->validate([
            
			'doctor_name' => 'required',
            'role'=>'required',
            'doctor_contact_number'=>'required'

        ]);

        
        $dct->update($request->all());

        return redirect()->route('dcts.index')->with('success', 'Profile Updated Successflly!');
    }

    public function destroy(Dcts $dct){

        $dct->delete();
        return redirect()->route('dcts.index')->with('success', 'Profile Deleted Successflly!');
    }

}



