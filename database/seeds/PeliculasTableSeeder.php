<?php

use App\Pelicula; 
use App\Cine;
use App\Cartelera;
use App\Funcion;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PeliculasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pelicula::truncate(); // Evita duplicar datos

        $pelicula = new Pelicula();
        $pelicula->nombre = "Joker";
        $pelicula->duracion = "2h 2m";
        $pelicula->descripcion = "La pasión de Arthur Fleck, ";
        $pelicula->fecha = Carbon::now();
        $pelicula->subtitulo = "no";
        $pelicula->director = "Todd Phillips";
        $pelicula->reparto = "<p>Joaquin Phoenix, Robert De Niro, Zazie Beetz, Marc Maron, Frances Gonroy</p>";
        $pelicula->save();

        Cine::truncate(); // Evita duplicar datos

        $cine = new Cine();
        $cine->nombre = "Cinemark";
        $cine->direccion = "Cinemark Jockey Plaza";
        $cine->telefono = "974882263";
        $cine->save();

        Cartelera::truncate(); // Evita duplicar datos

        $cartelera = new Cartelera();
        $cartelera->pelicula_id = 1;
        $cartelera->cine_id = 1;
        $cartelera->fecha_inicio = Carbon::now();
        $cartelera->fecha_fin = Carbon::now();
        $cartelera->save();

}