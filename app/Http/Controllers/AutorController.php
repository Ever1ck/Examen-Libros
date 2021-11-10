<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autors = Autor::all();
        return view('autor.index', compact('autors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('autor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'ape_paterno' => 'required',
            'ape_materno' => 'required',
            'edad' => 'required',
        ]);

        $autor = new Autor();
        $autor->nombre = $request->get('nombre');
        $autor->ape_paterno = $request->get('ape_paterno');
        $autor->ape_materno = $request->get('ape_materno');
        $autor->edad = $request->get('edad');

        $autor->save();

        return redirect('/autors');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $autor = Autor::find($id);
        return view('autor.edit', compact('autor'));
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
        $request->validate([
            'nombre' => 'required',
            'ape_paterno' => 'required',
            'ape_materno' => 'required',
            'edad' => 'required',
        ]);

        $autor = Autor::find($id);
        $autor->nombre = $request->get('nombre');
        $autor->ape_paterno = $request->get('ape_paterno');
        $autor->ape_materno = $request->get('ape_materno');
        $autor->edad = $request->get('edad');


        $autor->save();

        return redirect('/autors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $autor = Autor::find($id);
        $autor->delete();
        return redirect('/autors');
    }
}
