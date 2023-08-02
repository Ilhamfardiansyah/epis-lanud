<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\T_Aplikasi;
use App\Models\DataPegawai;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

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
    public function index(DataPegawai $dataPegawai, T_Aplikasi $aplikasi)
    {
        $user               = User::count();
        $aplikasi           = T_Aplikasi::all();
        $data               = DataPegawai::count();

        // kapten
        $jabatanKapten      = 'kapten';
        $kapten             = DataPegawai::where('pangkat', $jabatanKapten)->count();
        // kaptenlek
        $jabatanKaptenLek   = 'kapten lek';
        $kaptenLek             = DataPegawai::where('pangkat', $jabatanKaptenLek)->count();
        // kaptennav
        $jabatanKaptenNav   = 'kapten nav';
        $kaptenNav             = DataPegawai::where('pangkat', $jabatanKaptenNav)->count();
        // kaptenpnb
        $jabatanKaptenPnb  = 'kapten Pnp';
        $kaptenPnb             = DataPegawai::where('pangkat', $jabatanKaptenPnb)->count();
        // kaptenpom
        $jabatanKaptenPom = 'kapten pom';
        $kaptenPom             = DataPegawai::where('pangkat', $jabatanKaptenPom)->count();
        // kaptensus
        $jabatanKaptenSus = 'kapten sus';
        $kaptenSus             = DataPegawai::where('pangkat', $jabatanKaptenSus)->count();
        // kaptentek
        $jabatanKaptenTek = 'kapten tek';
        $kaptenTek             = DataPegawai::where('pangkat', $jabatanKaptenTek)->count();
        // Prada
        $jabatanPrada       = 'prada';
        $prada              = DataPegawai::where('pangkat', $jabatanPrada)->count();
        // Pratu
        $jabatanPratu       = 'pratu';
        $pratu              = DataPegawai::where('pangkat', $jabatanPratu)->count();
        return view('home' , compact('user', 'data', 'dataPegawai', 'aplikasi', 'kapten', 'kaptenLek', 'kaptenNav', 'kaptenPnb', 'kaptenPom', 'kaptenSus', 'kaptenTek', 'prada', 'pratu'));
    }
}
