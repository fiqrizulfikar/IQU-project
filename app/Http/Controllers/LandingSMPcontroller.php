<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingSMPcontroller extends Controller
{
    public function index()
    {
        return view('landing.SMP.SekolahMenengahPertama');
    } 

    public function IPAsmp()
    {
        return view ('landing.SMP.IPA');
    }

    public function IPSsmp()
    {
        return view ('landing.SMP.IPS');
    }
    public function MTKsmp()
    {
        return view ('landing.SMP.MTK');
    }
    public function PKNsmp()
    {
        return view ('landing.SMP.PKN');
    }       
}
