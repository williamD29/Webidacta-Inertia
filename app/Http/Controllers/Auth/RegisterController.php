<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Inertia\Inertia;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Kakunin\Concerns\ValidatesInertiaInput;
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
    use ValidatesInertiaInput;

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

    public function showRegistrationForm()
    {
        return Inertia::render('Auth/Register');
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
            'role' => ['required', 'string'],
            'firstname' => ['required', 'string', 'max:80'],
            'lastname' => ['required', 'string', 'max:80'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'between:8,80'],
        ], $this->messages());
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'role' => $data['role'],
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'role.required' => 'Un rôle est requis',
            'role.string' => 'Le rôle doit être une chaîne de caractères',
            'firstname.required' => 'Le prénom est requis',
            'firstname.string' => 'Le prénom doit être une chaîne de caractères',
            'firstname.max' => 'Le prénom doit contenir moins de :max caractères',
            'lastname.required' => 'Le nom est requis',
            'lastname.string' => 'Le nom doit être une chaîne de caractères',
            'lastname.max' => 'Le nom doit contenir moins de :max caractères',
            'email.required' => "L'adresse email est requise",
            'email.string' => "L'adresse doit être une chaîne de caractères",
            'email.email' => "L'adresse email doit être valide",
            'email.max' => "L'adresse email doit contenir moins de :max caractères",
            'email.unique' => "Cette adresse email est déjà utilisée",
            'password.required' => 'Le mot de passe est requis',
            'password.string' => 'Le mot de passe doit être une chaîne de caractères',
            'password.between' => 'Le mot de passe doit être compris entre 8 et 80 caractères',
        ];
    }

    
}
