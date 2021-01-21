<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PokedexModel extends Model
{
    // Definisi tabel di model
    protected $table = "tbl_pokedex";
    protected $primary_key = "id_pokedex";    

    public function syarat()
    {
        return $this->hasMany('App\Models\SyaratModel','id_pokedex','id_pokedex');
    }
}
