<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $role = Role::all();
        return view('auth/register', compact('role'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'username'  => 'nullable',
            'nama'      => 'nullable',
            'email'     => 'nullable',
            'nip'       => 'nullable|unique:users',
            'password'  => 'nullable|confirmed'
        ]);
        // dd($this);


        $user = User::create([
            'username'      => $request->username,
            'nama'          => $request->nama,
            'email'         => $request->email,
            'nip'           => $request->nip,
            'password'      => bcrypt($request->password)
        ]);

        $user->assignRole($request->roles);

        alert()->success('User', 'Berhasil Di Tambahkan');

        return back();
    }
}
