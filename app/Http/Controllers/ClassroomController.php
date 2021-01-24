<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classroom;
//  
use Illuminate\Validation\Rule; 

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return 'CLASSROOM INDEX PAGE';
        // get data from DB

        $classrooms = Classroom::all();
        // dd($classrooms);

        return view('classrooms.index', compact('classrooms'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('classrooms.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        // dd($data['name']);

        // VALIDAZIONE
        $request->validate([
            'name'=>'required|unique:classrooms|max:10',
             'description'=> 'required'
        ]);

        // SALVARE SU DB
        $classroom = new Classroom();
        // $classroom->name = $data['name'];
        // $classroom->description = $data['description'];
        $classroom->fill($data);

        $saved = $classroom->save();

        if($saved == 'true'){
            return redirect()->route('classrooms.show', $classroom->id);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $classroom = Classroom::find($id);
        // return 'Show ID' . $id;
        return view('classrooms.show', compact('classroom') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $classroom = Classroom::find($id);
        return view('classrooms.edit', compact('classroom'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // DATI INVIATI ALLA FORM
        $data = $request->all();

        // ISTANZA SPECIFICA
        $classroom = Classroom::find($id);

        // VALIDAZIONE
        $request->validate([
            'name'=> [
                'required',
                Rule::unique('classrooms')->ignore($id),
                'max:10'
            ],
            'description'=> 'required'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
