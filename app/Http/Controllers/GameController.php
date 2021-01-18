<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GameModel;

class GameController extends Controller
{
    //view data
    public function __construct()
    {
        $this->GameModel = new GameModel();
    }
    public function index()
    {
        $data = [
            'game' => $this->GameModel->allData(),
        ];
        return view('admin/v_game', $data);
    }
    //detail game
    public function detail($id_game)
    {
        if(!$this->GameModel->detailGame($id_game)){
            abort(404);
        }

        $data = [
            'game' => $this->GameModel->detailGame($id_game),
        ];
        return view('admin/v_detailgame', $data);
    }
    //tambah data
    public function tambah()
    {
        return view('admin/v_tambahgame');
    }
    //simpan data
    public function insert()
    {
        Request()->validate([
            'nama_game' => 'required|unique:tbl_game,nama_game',
            'platform' => 'required',
            'release_date' => 'required',
            'rating' => 'required|max:10',
            'foto_game' => 'required|mimes:jpg,jpeg,bmp,png',
        ],[
            'nama_game' => 'Nama Game Harap Diisi !!',
            'nama_game.unique' => 'Nama Game Harap Beda !!',
            'platform' => 'Platform Game Harap Diisi !!',
            'release_date' => 'Tanggal Harap Diisi !!',
            'rating' => 'Rating Game Harap Diisi !!',
            'rating.max' => 'Rating Game Maximal 10 !!',
            'foto_game' => 'Foto Harap Diisi !!',
        ]);

        $file = Request()->foto_game;
        $fileName = Request()->nama_game .'.'. $file->extension();
        $file -> move(public_path('gambar'), $fileName);

        $data = [
            'nama_game' => Request()->nama_game,
            'platform' => Request()->platform,
            'release_date' => Request()->release_date,
            'rating' => Request()->rating,
            'foto_game' => $fileName,
        ];

        $this->GameModel->tambahGame($data);
        return redirect()->route('game')->with('pesan', 'Data berhasil disimpan !!');
    }
    //edit data
    public function edit($id_game)
    {
        if(!$this->GameModel->detailGame($id_game)){
            abort(404);
        }

        $data = [
            'game' => $this->GameModel->detailGame($id_game),
        ];
        return view('admin/v_editgame', $data);
    }

    public function updateGame($id_game)
    {
        Request()->validate([
            'nama_game' => 'required|unique:tbl_game,nama_game',
            'platform' => 'required',
            'release_date' => 'required',
            'rating' => 'required|max:10',
            'foto_game' => 'mimes:jpg,jpeg,bmp,png',
        ],[
            'nama_game' => 'Nama Game Harap Diisi !!',
            'nama_game.unique' => 'Nama Game Harap Beda !!',
            'platform' => 'Platform Game Harap Diisi !!',
            'release_date' => 'Tanggal Harap Diisi !!',
            'rating' => 'Rating Game Harap Diisi !!',
            'rating.max' => 'Rating Game Maximal 10 !!',
        ]);

        if(Request()->foto_game <> "")
        {
            $file = Request()->foto_game;
            $fileName = Request()->nama_game .'.'. $file->extension();
            $file -> move(public_path('gambar'), $fileName);
            
            $data = [
                'nama_game' => Request()->nama_game,
                'platform' => Request()->platform,
                'release_date' => Request()->release_date,
                'rating' => Request()->rating,
                'foto_game' => $fileName,
            ];
            $this->GameModel->editGame($id_game, $data);
        }else{
            $data = [
                'nama_game' => Request()->nama_game,
                'platform' => Request()->platform,
                'release_date' => Request()->release_date,
                'rating' => Request()->rating,
            ];
            $this->GameModel->editGame($id_game, $data);
        }
        return redirect()->route('game')->with('pesan', 'Data berhasil di update !!');
    }
    //delete data
    public function delete($id_game)
    {
        $game = $this->GameModel->detailGame($id_game);
        if($game->foto_game <> "")
        {
            unlink(public_path('gambar').'/'. $game->foto_game);
        }

        $this->GameModel->deleteGame($id_game);
        return redirect()->route('game')->with('pesan', 'Data Berhasil Di Hapus !!!');
    }
}
