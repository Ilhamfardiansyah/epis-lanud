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
        $user       = User::count();
        $aplikasi   = T_Aplikasi::all();
        $data       = DataPegawai::count();
        return view('home' , compact('user', 'data', 'dataPegawai', 'aplikasi'));
    }
}
