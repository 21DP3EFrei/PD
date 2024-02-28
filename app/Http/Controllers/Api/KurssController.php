<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Info;

class KurssController extends Controller
{
    public function store(Request $request){
        $validation = $request->validate([
            'nosaukums' => 'required|max:225',
            'text' => 'required',
            'adrese' => 'required',
            'skaits' => 'required|integer',
        ]);

        $info = Info::create($validation);
        return response()->json($info);
    }

    public function index() {
        return response()->json(Info::all()); 
    }
}
