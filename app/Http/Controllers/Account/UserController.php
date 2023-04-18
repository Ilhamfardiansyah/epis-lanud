<?php

namespace App\Http\Controllers\Account;

use App\Models\User;
use App\Models\DataPegawai;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with(['roles' => function($query) {
            $query->select('id', 'name');
        }])->get();

        return view('Account/User/Index', compact('users'));
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

    public function edit(User $user)
    {
        return view('Account/User/Edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'nama' => 'required',
            'nip' => 'required',
            'email' => 'required|email',
            'password' => 'nullable|min:5',
            'role' => 'required'
        ]);

        $user->fill([
            'username' => $validatedData['username'],
            'nama' => $validatedData['nama'],
            'nip' => $validatedData['nip'],
            'email' => $validatedData['email'],
        ]);

        // Jika password telah di-set, update password baru
        if (isset($validatedData['password'])) {
            $user->password = Hash::make($validatedData['password']);
        }

        $user->save();

        $role = Role::where('name', $validatedData['role'])->first();

        if (!$role) {
            $role = Role::create(['name' => $validatedData['role']]);
        }

        $user->syncRoles([$role]); // Mengganti role data

        alert()->success('Data', 'Berhasil Diupdate');

        return redirect('dashboard/manage/user');
    }
}
