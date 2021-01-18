<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PokemonModel;

class PokemonController extends Controller
{
    public function __construct()
    {
        $this->PokemonModel = new PokemonModel();
    }
    public function index()
    {
        $data = [
            'pokemon' => $this->PokemonModel->allData(),
        ];
        return view('admin/v_pokemon', $data);
    }
}
