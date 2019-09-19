<?php

namespace App\Http\Controllers;


use App\TCategoria;
use App\TComentario;
use App\TDestino;
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
        $paquete_categoria = TPaqueteCategoria::with('paquete', 'categoria')->get();
        $categoria = TCategoria::all()->take(3);
        $tour = TTour::all();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();
        return view('page.home', compact('paquete_categoria','categoria','tour','paquete_destinos'));
    }
    public function destinations()
    {
        $destination = TDestino::all();
        return view('page.destinations', compact('destination'));
    }
    public function destinations_show($title)
    {
        $ciudad = explode('-tours', $title);
        $ciudad = str_replace('-', ' ', $ciudad[0]);
        $destinos = TDestino::all();
        $paquete = TPaquete::with('paquetes_destinos', 'precio_paquetes', 'paquetes_categoria.categoria')->get();
        $paquetes_de = TPaqueteDestino::with(['destinos'=>function($query) use ($ciudad) { $query->where('nombre', $ciudad);}])->get();
        return view('page.destinations-show', compact('destinos', 'paquetes_de','paquete'));
    }
    public function tours()
    {
        return view('page.tours');
    }
    public function packages()
    {
        $paquete_categoria = TPaqueteCategoria::with('paquete.precio_paquetes', 'categoria')->get();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();
        return view('page.packages', compact('paquete_categoria','paquete_destinos'));
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
}
