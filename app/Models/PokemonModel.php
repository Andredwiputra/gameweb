<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PokemonModel extends Model
{
    // Definisi tabel di model
    protected $table = "tbl_game";
    protected $primary_key = "id_game";
    protected $fillable = [
        "nama_game",
        "platform",
        "release_date",
        "rating",
        "foto_game",
    ];
    public $timestamps = false;

    public function allData()
    {
        //nama tabel
        return DB::table('tbl_syarat')
        ->leftJoin('tbl_pokedex', 'tbl_pokedex.id_pokedex', '=', 'tbl_syarat.id_pokedex')
        ->leftJoin('tbl_type', 'tbl_type.id_type', '=', 'tbl_syarat.id_type')
        ->leftJoin('tbl_pokemon', 'tbl_pokemon.id_pokemon', '=', 'tbl_syarat.id_pokemon')
        ->get();
    }
}
