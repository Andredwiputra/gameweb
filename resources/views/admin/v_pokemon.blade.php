@extends('admin.admintemplate.v_admintemp')
@section('judul','Data Pokemon')

@section('content')
    <!--Head table-->
    <div class = "container-fluid">
        <div class ="row">
            <div class ="col-12">
                <div class = "card">
                    <div class ="card-header">
                        <h3 class="card-title">
                            Data Pokemon
                        </h3>
                    </div>
                    <!--Header table-->
                    <div class="card-body">
                        <table id="pokemon" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>No. Pokedex</th>
                                    <th>Nama Pokemon</th>
                                    <th>Type Pokemon</th>
                                    <th>Gen Pokemon</th>
                                    <th>Foto Pokemon</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <!--Body-->
                            <tbody>
                                <?php $no=1; ?>
                                @foreach ($pokemon as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data -> no_pokedex}}</td>
                                        <td>{{ $data -> nama_pokemon}}</td>
                                        <td>{{ $data -> type}}</td>
                                        <td>{{ $data -> gen_pokemon}}</td>
                                        <td><img src="{{ url('gambar/'.$data -> foto_pokemon) }}" width="100px"></td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-success">Detail</a>
                                            <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#">
                                                 Delete
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table><br>
                <div class="row">
                    <div class="col">
                        <a href="/game/add" class="btn btn-primary btn-sm">Add</a>
                    </div>
                    <div class="col-sm-3">
                    <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection