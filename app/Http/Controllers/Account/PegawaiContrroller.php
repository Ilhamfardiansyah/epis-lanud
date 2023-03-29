<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PegawaiContrroller extends Controller
{
    public function index()
    {
        return view('Account/Anggota/index');
    }
}
