<?php

namespace App\Http\Controllers;

use App\Models\Characters;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function add_element() {
        return view('char.create');
    }

    public function add_element_post(Request $request) {

        $character = Characters::create(

            [
                'name'=> $request->input('name'),
                'sex'=> $request->input('sex'),
                'age'=> $request->input('age'),
                'job'=> $request->input('job'),
                'number'=> $request->input('number'),
                'description'=> $request->input('description'),
            ]

        );
        return redirect()
         ->route('add')
         ->with('message', 'Informazione aggiunta con successo!');
  
    }

    public function characters() {

        $characters = Characters::all();

        return view('char.personaggi', compact('characters'));
    }
}
