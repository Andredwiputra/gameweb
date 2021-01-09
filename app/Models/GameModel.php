<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GameModel extends Model
{
    public function allData()
    {
        //nama tabel
        return DB::table('tbl_game')->get();
    }
}
