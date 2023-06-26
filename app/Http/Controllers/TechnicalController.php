<?php

namespace App\Http\Controllers;

use App\Http\Requests\TechnicalRequest;
use App\Models\Technical;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Str;
class TechnicalController extends Controller
{
    public function index(){
        $technical = Technical::orderBy('id','desc');
        return view('technical.index', compact('technical'));
    }

    public function create(){
        return view('technical.create');
    }

    public function show($id){
        return Technical::find($id);
    }

    public function technicalRegister(TechnicalRequest $request){
        $data = $request->all();
        $data['token'] = Str::random(32);

        $technical = Technical::create($data);
        return response()->json([$technical, 'token'=>$data['token']],200);
    }

    public function destroy($id){
        $technicalDelete = Technical::find($id)->delete();
        return response()->json(['msg'=>'Tecnico elimiando'], 200);
    }

}
