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

    public function detailGame($id_game)
    {
        return DB::table('tbl_game')->where('id_game', $id_game)->first();
    }

    public function tambahGame($data)
    {
        DB::table('tbl_game')->insert($data);
    }

    public function editGame($id_game, $data)
    {
        DB::table('tbl_game')->where('id_game', $id_game)->update($data);
    }

    public function deleteGame($id_game)
    {
        DB::table('tbl_game')->where('id_game', $id_game)->delete();
    }
}
