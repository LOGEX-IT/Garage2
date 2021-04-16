<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndustrieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('installationgrossemachine');
    }
    public function services()
    {
        return view('services');
    }
    public function autres_services()
    {
        return view('autres_services');
    }
    public function usine_transformation()
    {
        return view('installation_usine_transformation');
    }
    public function installation_imprimerie()
    {
        return view('installation_imprimerie');
    }
    public function reparation_avion()
    {
        return view('reparation_avion');
    }
    public function reparation_bateaux()
    {
        return view('reparation_bateaux');
    }
    public function a_propos()
    {
        return view('about');
    }
    public function shop()
    {
        return view('shop');
    }
    public function rentcar()
    {
        return view('shopping.rentcar');
    }
    public function rentmoto()
    {
        return view('shopping.rentmoto');
    }
    public function carsale()
    {
        return view('shopping.carsale');
    }
    public function motosale()
    {
        return view('shopping.motosale');
    }
    public function nous_contactez()
    {
        return view('contact');
    }
    public function reservation_ticket()
    {
        return view('reservation_ticket');
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
