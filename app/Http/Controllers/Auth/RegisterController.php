<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

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
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        // dd($data);
        return Validator::make($data, [
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'nama' => ['required', 'string', 'max:255'],
            'nip'   => ['required', 'string', 'max:255', 'unique:users'],
            'role'   => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:5', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */

    public function index()
    {
        $role = Role::all();
        return view('auth/register', compact('role'));
    }

    protected function create(array $data)
{
    $user = User::create([
        'username' => $data['username'],
        'nama' => $data['nama'],
        'nip' => $data['nip'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
    ]);

    $role = Role::where('name', $data['role'])->first();

    if (!$role) {
        $role = Role::create(['name' => $data['role']]);
    }

    $user->assignRole($role);

    alert()->success('User Baru', 'Berhasil Ditambahkan');

    return $user;
}
}
