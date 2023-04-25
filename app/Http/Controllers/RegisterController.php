<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return Register::all();
    }

    public function register(RegisterRequest $request)
    {
        $register = new register();
        $register->name = $request->input('name');
        $register->email = $request->input('email');
        $register->number_phone = $request->input('number_phone');
        $register->password = Hash::make($request->input('password')); // Cifrar la contraseña con bcrypt
        $register->save();
        return response()->json([$register], 201);
        
    }
}
