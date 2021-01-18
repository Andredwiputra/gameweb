@extends('admin.admintemplate.v_admintemp')
@section('judul','Detail Game')

@section('content')

<table class="table">
        <tr>
            <th width="100px">Nama Game</th>
            <th width="30px">:</th>
            <th>{{ $game->nama_game }}</th>
        </tr>
        <tr>
            <th width="100px">Platform</th>
            <th width="30px">:</th>
            <th>{{ $game->platform }}</th>
        </tr>
        <tr>
            <th width="100px">Release Date</th>
            <th width="30px">:</th>
            <th>{{ $game->release_date }}</th>
        </tr>
        <tr>
            <th width="100px">Rating</th>
            <th width="30px">:</th>
            <th>{{ $game->rating }}/10</th>
        </tr>
        <tr>
            <th width="100px">Foto Game</th>
            <th width="30px">:</th>
            <th><img src="{{ url('gambar/'.$game -> foto_game) }}" width="400px"></th>
        </tr>
        <tr>
            <th><a href="/game" class="btn btn-success tbn-sm">Kembali</a></th>
        </tr>
    </table>

@endsection