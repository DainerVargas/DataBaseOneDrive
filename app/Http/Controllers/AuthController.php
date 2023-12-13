<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\Gender;
use App\Models\Rol;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(){

        return view('index');
    }

    public function login(Request $request){

        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ],[
            'required' => 'Este campo es requerido'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return 'seccion exitosa!!';
        }
        return 'seccion invalid!';

    }

    public function store(AuthRequest $request){

        $user = User::create($request->all());
        $user->password = Hash::make($request->password);

        if($user){
            return 'Usuario registrado';
        }

    }

    public function session(){
        return view('login');
    }

    public function register(){
       
        $gender = Gender::all();
        $rol = Rol::all();
        return view('register', compact('gender','rol'));
    }
}
