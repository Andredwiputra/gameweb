<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GameModel;

class GameController extends Controller
{
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
}
