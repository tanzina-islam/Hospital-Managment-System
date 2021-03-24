<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auths;

class PatientsController extends Controller
{
  
  
public function index(){
        $auths = Auths::latest()->paginate(9);

        return view('auths.index', compact('auths'));
    }

     public function create(){

        return view('auths.create');
    }

    public function store(Request $request){ $request->validate([
            'patients_name' => 'required',
            'age'=>'required',
            'occupation'=>'required',
            'patients_address' => 'required',
            'patients_contact_number'=>'required',
            'nationality' => 'required',
            'religion'=>'required',
            'guardian'=>'required',
            'guardian_occupation'=>'required',
            
        ]);

        Auths::create($request->all());

        return redirect()->route('auths.index')->with('success', 'Profile Created Successflly!');
    }

     public function show(Auths $auth)
    {
        return view('auths.Show',compact('auth'));
           
    }

    public function edit(Auths $auth){
        return view('auths.edit', compact('auth'));
    }


    public function update(Request $request, Auths $auth){
        $request->validate([
            
            'patients_name' => 'required',
            'age'=>'required',
            'occupation'=>'required',
            'patients_address' => 'required',
            'patients_contact_number'=>'required',
            'nationality' => 'required',
            'religion'=>'required',
            'guardian'=>'required',
            'guardian_occupation'=>'required'

        ]);

        
        $auth->update($request->all());

        return redirect()->route('auths.index')->with('success', 'Profile Updated Successflly!');
    }

    public function destroy(Auths $auth){

        $auth->delete();
        return redirect()->route('auths.index')->with('success', 'Profile Deleted Successflly!');
    }

}


