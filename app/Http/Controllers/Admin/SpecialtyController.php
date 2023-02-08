<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Specialty;

use App\Http\Controllers\Controller;

class SpecialtyController extends Controller
{
    public function index(){
        $specialties = Specialty::all();
        return view('specialties.index', compact('specialties'));
    }

    public function create(){
        return view('specialties.create');
    }

    public function store(Request $request){
        //dd($request->all());
        $rules = [
            'name' => 'required|min:3',
        ];
        $messages = [
            'name.required' => 'Es necesario ingresar un nombre.',
            'name.min' => 'Como mínimo el nombre debe contener 3 caracteres'
        ];
        $this->validate($request, $rules);
        
        $specialty = New Specialty();
        $specialty->name = $request->input('name');
        $specialty->description = $request->input('description');
        $specialty->save();

        return redirect('/specialties');
    }

    public function edit(Specialty $specialty){

        return view('specialties.edit', compact('specialty'));
    }

    public function update(Request $request, Specialty $specialty){
        //dd($request->all());
        $rules = [
            'name' => 'required|min:3',
        ];
        $messages = [
            'name.required' => 'Es necesario ingresar un nombre.',
            'name.min' => 'Como mínimo el nombre debe contener 3 caracteres'
        ];
        $this->validate($request, $rules);
        
        $specialty->name = $request->input('name');
        $specialty->description = $request->input('description');
        $specialty->save();

        return redirect('/specialties');
    }

    public function destroy(Specialty $specialty){
        $specialty->delete();
        return redirect('/specialties');
    }

}
