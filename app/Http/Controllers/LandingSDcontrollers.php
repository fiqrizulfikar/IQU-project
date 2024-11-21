<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingSDcontrollers extends Controller
{
    public function index()
    {
        return view('landing.SD.SekolahDasar');
    } 

    public function IPAsd()
    {
        return view ('landing.SD.IPA');
    }

    public function IPSsd()
    {
        return view ('landing.SD.IPS');
    }
    public function MTKsd()
    {
        return view ('landing.SD.MTK');
    }
    public function PKNsd()
    {
        return view ('landing.SD.PKN');
    }       
}
