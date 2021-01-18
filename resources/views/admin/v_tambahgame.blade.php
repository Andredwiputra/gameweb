@extends('admin.admintemplate.v_admintemp')
@section('judul','Tambah Game')

@section('content')

<form action="/game/insert" method ="POST" enctype="multipart/form-data">
    @csrf
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Tambah Game</h3>
                    </div>
                    <form role="form">
                    <div class="card-body">
                    <div class="form-group">
                        <label>Nama Game</label>
                            <input name="nama_game" class="form-control @error('nama_game') is-invalid @enderror" value="{{ old('nama_game') }}">
                            <div class="invalid-feedback">
                            @error('nama_game')
                                {{ $message }}
                            @enderror
                            </div>
                    </div>
                    <div class="form-group">
                        <label>Platform</label>
                            <input name="platform" class="form-control @error('platform') is-invalid @enderror" value="{{ old('platform') }}">
                            <div class="invalid-feedback">
                            @error('platform')
                                {{ $message }}
                            @enderror
                            </div>
                    </div>
                    <div class="form-group">
                        <label>Release Date</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                </div>
                                <input name="release_date" class="form-control @error('release_date') is-invalid @enderror" value="{{ old('release_date') }}">
                                <div class="invalid-feedback">
                                @error('release_date')
                                    {{ $message }}
                                @enderror
                                </div>
                            </div>
                    </div>
                    <div class="form-group">
                        <label>Rating</label>
                            <input name="rating" class="form-control @error('rating') is-invalid @enderror" value="{{ old('rating') }}">
                            <div class="invalid-feedback">
                            @error('rating')
                                {{ $message }}
                            @enderror
                            </div>
                    </div>
                    <div class="form-group">
                        <label>Foto Game</label>
                            <input type="file" name="foto_game" class="form-control @error('foto_game') is-invalid @enderror" value="{{ old('foto_game') }}">
                            <div class="invalid-feedback">
                            @error('foto_game')
                                {{ $message }}
                            @enderror
                            </div>
                    </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-sm">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection