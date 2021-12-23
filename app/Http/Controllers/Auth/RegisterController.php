<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Departamento;
use App\Models\Municipio;
use App\Models\Rol;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'per_nombre' => ['required', 'string', 'max:255'],
            'per_apellido' => ['required', 'string', 'max:255'],
            'per_telefono1' => ['required', 'string', 'max:11'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }


    public function showRegistrationForm(){

        $departamentos = Departamento::all();
        $municipios = Municipio::all();
        $roles = Rol::all();
        return view('auth/register')->with('roles', $roles)
            ->with('departamentos', $departamentos)
            ->with('municipios', $municipios);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'per_tipo_documento' => $data['per_tipo_documento'],
            'per_numero_documento' => $data['per_numero_documento'],
            'per_nombre' => $data['per_nombre'],
            'per_apellido' => $data['per_apellido'],
            'per_telefono1' => $data['per_telefono1'],
            'per_telefono2' => $data['per_telefono2'],
            'per_direccion' => $data['per_direccion'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'per_id_departamento' => $data['per_id_departamento'],
            'per_id_municipio' => $data['per_id_municipio'],
            'per_fecha_nacimiento' => $data['per_fecha_nacimiento'],
            'per_rol' => $data['per_rol'],
        ]);
    }
}
