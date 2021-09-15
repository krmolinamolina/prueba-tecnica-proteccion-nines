<?php

namespace App\Http\Controllers\user;

use App\Models\Rol;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Jetstream\Jetstream;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Actions\Fortify\PasswordValidationRules;

class UserController extends Controller
{
    use PasswordValidationRules;

    public function index()
    {
        $users = User::get();
        return view("users.index", compact('users'));
    }

    public function create()
    {
        $roles = Rol::get();
        return view("users.create",\compact('roles'));
    }


    public function store(Request $request)
    {
        $validData=$request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required'],
            'rol' => ['required'],
        ]);

       

        User::create([
            'name' => $request['nombre'],
            'email' => $request['email'],
            'rol_id' => $request['rol'],
            'password' => Hash::make($request['password']),
        ]);
        return back();
    }

   
}
