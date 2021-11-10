<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index()
    {
        $libros = Libro::paginate();
        return view('libro.index', compact('libros'));
    }

    public function create()
    {
        $autors = Autor::all();
        return view('libro.create', compact('autors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'autor_id' => 'required',
            'pais' => 'required',
            'paginas' => 'required',
            'generos' => 'required',
            'estado' => 'required',
        ]);

        $libro = new Libro();
        $libro->titulo = $request->get('titulo');
        $libro->autor_id = $request->get('autor_id');
        $libro->pais = $request->get('pais');
        $libro->paginas = $request->get('paginas');
        $libro->generos = $request->get('generos');
        $libro->estado = $request->get('estado');

        $libro->save();

        return redirect('/libros');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $autors = Autor::all();
        $libro = Libro::find($id);
        return view('libro.edit', compact(['libro', 'autors']));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required',
            'autor_id' => 'required',
            'pais' => 'required',
            'paginas' => 'required',
            'generos' => 'required',
            'estado' => 'required',
        ]);

        $libro = Libro::find($id);
        $libro->titulo = $request->get('titulo');
        $libro->autor_id = $request->get('autor_id');
        $libro->pais = $request->get('pais');
        $libro->paginas = $request->get('paginas');
        $libro->generos = $request->get('generos');
        $libro->estado = $request->get('estado');

        $libro->save();

        return redirect('/libros');
    }

    public function destroy($id)
    {
        $libro = Libro::find($id);
        $libro->delete();
        return redirect('/libros');
    }
}
