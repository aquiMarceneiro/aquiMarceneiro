<?php

namespace aquiMarceneiro\Http\Controllers\Auth;

use aquiMarceneiro\User;
use aquiMarceneiro\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Request;

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
    protected $redirectTo = '/home';

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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'cpf_cnpj' => 'required',
            'uf' => 'required',
            'cidade' => 'required',
            'descricao' => 'max:255',
            'especialidade' => 'max:50',
            'tipo' => 'required|min:1|max:1',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @param  Request $request
     * @return \aquiMarceneiro\User
     */
    protected function create(array $data)
    {


        return User::create([

            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'cpf_cnpj' => $data['cpf_cnpj'],
            'uf' => $data['uf'],
            'cidade' => $data['cidade'],
            'cep' => $data['cep'],
            'descricao' => $data['descricao'],
            'especialidade' => $data['especialidade'],
            'tipo' => $data['tipo'],
            'rua' => $data['rua'],
            'bairro' => $data['bairro'],
            'latitude' => $data['lat'],
            'longitude' => $data['lon']


        ]);
    }
}
