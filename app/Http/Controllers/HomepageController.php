<?php

namespace App\Http\Controllers;


use App\TCategoria;
use App\TComentario;
use App\THotel;
use App\THotelDestino;
use App\TItinerarioImagen;
use App\TPaquete;
use App\TPaqueteCategoria;
use App\TPaqueteDestino;
use App\TPaqueteDificultad;
use App\TPaqueteVuelo;
use App\TTour;
use App\TVuelo;

class HomepageController extends Controller
{
    public function index()
    {
        //
        $paquete_categoria = TPaqueteCategoria::with('paquete', 'categoria')->take(3)->get();
        $categoria = TCategoria::all()->take(3);
        $tour = TTour::all();
        return view('page.home', compact('paquete_categoria','categoria','tour'));
    }
    public function destinations()
    {
        return view('page.destinations');
    }
    public function tours()
    {
        return view('page.tours');
    }
    public function packages()
    {
        $paquete_categoria = TPaqueteCategoria::with('paquete.precio_paquetes', 'categoria')->get();
        return view('page.packages', compact('paquete_categoria'));
    }
    public function uns()
    {
        return view('page.about');
    }
    public function itinerary($title, $days)
    {
        $title = str_replace('-', ' ', strtoupper($title));
//        dd($title);
        $paquete = TPaquete::with('paquetes_destinos', 'precio_paquetes', 'imagen_paquetes', 'paquete_incluye', 'paquete_no_incluye')->where('estado', 0)->get();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();
//        $paquete_categoria =
        $paquete_iti = TPaquete::with('paquete_itinerario','paquetes_destinos', 'precio_paquetes', 'paquetes_categoria')->where('titulo', $title)->get();
//        $imagen_itinerario = TItinerarioImagen::all();
        $hoteles = THotel::all();
        $hoteles_destinos = THotelDestino::all();
        $vuelo = TVuelo::all();
        $paquete_vuelo = TPaqueteVuelo::with('vuelos')->get();
        $dificultad = TPaqueteDificultad::all();
        $comentario = TComentario::with('itinerario')->get();
        $imagen = TItinerarioImagen::with('itinerario')->get();
        return view('page.itinerary', ['title'=>$title, 'paquete_iti'=>$paquete_iti, 'paquete_destinos'=>$paquete_destinos, 'paquete'=>$paquete, 'hoteles'=>$hoteles, 'hoteles_destinos'=>$hoteles_destinos, 'vuelo'=>$vuelo, 'paquete_vuelo'=>$paquete_vuelo, 'dificultad'=>$dificultad, 'comentario'=>$comentario, 'imagen'=>$imagen]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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
