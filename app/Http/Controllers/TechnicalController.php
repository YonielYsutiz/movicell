<?php

namespace App\Http\Controllers;

use App\Http\Requests\TechnicalRequest;
use App\Models\Technical;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Str;

class TechnicalController extends Controller
{
    public function technicalAll()
    {
        return Technical::all();
    }

    public function index()
    {
        $technical = Technical::orderBy('id', 'desc');
        return view('technical.index', compact('technical'));
    }

    public function create()
    {
        return view('technical.create');
    }

    public function show($id)
    {
        return Technical::find($id);
    }

    public function technicalRegister(Request $request)
    {
        $technical = new Technical();
        $technical->firts_name = $request->input('firts_name');
        $technical->last_name = $request->input('last_name');
        $technical->email = $request->input('email');
        $technical->token = Str::random(32);
        $technical->type_document = $request->input('type_document');
        $technical->nro_document = $request->input('nro_document');
        $technical->number_phone = $request->input('number_phone');
        $technical->contract_start = $request->input('contract_start');
        $technical->contract_end = $request->input('contract_end');
        $technical->save();

        return response()->json(['message' => 'Usuario creado correctamente', $technical], 201);
    }

    public function destroy($id)
    {
        $technicalDelete = Technical::find($id)->delete();
        return response()->json(['msg' => 'Tecnico elimiando'], 200);
    }
}
