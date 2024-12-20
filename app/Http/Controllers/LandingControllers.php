<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingControllers extends Controller
{

    public function index()
    {
        return view('landing.index');
    }

    public function SekolahDasar()
    {
        return view ('landing.SD.SekolahDasar');
    }
    public function SekolahMenengahPertama()
    {
        return view ('landing.SMP.SekolahMenengahPertama');
    }
    public function games()
    {
        return view ('landing.games');
    }
   
    public function pendidikan()
    {
        return view ('landing.pendidikan');
    }
    public function aboutus()
    {
        return view ('landing.aboutus');
    }
    public function coba()
    {
        return view ('landing.coba');
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
