<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plano;

class PlanoController extends Controller
{
    public function index()
    {
        $planos = Plano::all();

        $data = [
            'planos' => $planos
        ];

        return view('Plano.index', $data);
    }

    public function listarPlanos()
    {
        $planos = Plano::all();

        $data = [
            'planos' => $planos
        ];

        return view('Plano.listagem', $data);
    }

    public function store(Request $request)
    {
        Plano::create($request->all());

        return redirect()->action('PlanoController@index');
    }
}
