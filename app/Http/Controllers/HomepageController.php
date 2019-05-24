<?php

namespace App\Http\Controllers;


use App\TCategoria;
use App\TPaqueteCategoria;
use App\TTour;

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
    public function itinerary($title)
    {
        return view('page.itinerary');
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
