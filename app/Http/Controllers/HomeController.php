<?php

namespace Jcinema\Http\Controllers;

use Illuminate\Http\Request;
use Jcinema;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $pel = Jcinema\Pelicula::all();

        return view('home', compact('pel'));
    }
    public function detalle($id){
        $detalles = Jcinema\Pelicula::findOrFail($id);
        return view('peliculas.detalle', compact('detalles'));
    }
    public function butaca(){
        return view('butaca');
    }
    public function crear(Request $request){
        // return $request->all();

        if($request->hasFile('imagen_p')){
            $file = $request->file('imagen_p');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/img/',$name);
        }
        $request->validate([
            'nombre' => 'required',
            'director' => 'required',
            'fecha' => 'required',
            'descripcion' => 'required',
            'trailer' => 'required'
        ]);
        $peliculaNueva = new Jcinema\Pelicula;
        $peliculaNueva->nombre = $request->nombre;
        $peliculaNueva->director = $request->director;
        $peliculaNueva->fecha = $request->fecha;
        $peliculaNueva->categoria = $request->categoria;
        $peliculaNueva->subtitulo = $request->subtitulo;
        $peliculaNueva->descripcion = $request->descripcion;
        $peliculaNueva->imagen_p = $name;
        $peliculaNueva->trailer = $request->trailer;
        $peliculaNueva->save();
        return back()->with('mensaje','Pelicula agregada!');
    }
    public function editar($id){
        $detalles = Jcinema\Pelicula::findOrFail($id);
        return view('peliculas.editar',compact('detalles'));
    }
    public function update(Request $request, $id){
        if($request->hasFile('imagen_p')){
            $file = $request->file('imagen_p');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/img/',$name);
        }
        $peliculaUpdate = Jcinema\Pelicula::findOrFail($id);
        $peliculaUpdate->nombre = $request->nombre;
        $peliculaUpdate->director = $request->director;
        $peliculaUpdate->fecha = $request->fecha;
        $peliculaUpdate->categoria = $request->categoria;
        $peliculaUpdate->subtitulo = $request->subtitulo;
        $peliculaUpdate->descripcion = $request->descripcion;
        $peliculaUpdate->imagen_p = $name;
        $peliculaUpdate->trailer = $request->trailer;
        $peliculaUpdate->save();
        return back()->with('mensaje', 'Pelicula actualizada');
    }
    public function eliminar($id){
        $peliculaEliminar = Jcinema\Pelicula::findOrFail($id);
        $peliculaEliminar->delete();
        return back()->with('eliminar', 'Pelicula eliminada');
    }
    public function pelicula(){
        
        return view('pelicula');
    }
    public function funcion(){
        return view('funcion');
    }
}
