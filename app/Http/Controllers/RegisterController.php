<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Psy\Command\WhereamiCommand;

class RegisterController extends Controller
{
    public function index()
    {
        $register = Register::orderBy('id','desc');
        return view('register.index', compact('register'));
    }

    public function create(){
        return view('register.create');
    }

    public function show($id){
        $user = Register::find($id);
        return $user;
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

    public function destroy($id){
        $user = Register::find($id)->delete();
        return (['msg'=>'Registro eliminado correctamente']);
    }

}
