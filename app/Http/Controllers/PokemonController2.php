<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PokedexModel;

class PokemonController2 extends Controller
{    
    public function index()
    {
        $data = PokedexModel::with('syarat')->get();

        foreach($data as $key => $item){
            $temp = "";
            foreach($item->syarat as $key2 => $type){
                if($key2 > 0)
                    $temp.= " ,";
                $temp .= ucfirst($type->type->type);
            }
            $data[$key]['type'] = $temp;
        }
        
        return view('admin/v_pokemon2', compact('data'));
    }
}
