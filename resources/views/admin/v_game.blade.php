@extends('admin.admintemplate.v_admintemp')
@section('judul','Data Game')

@section('content')
<!--Head table-->
    <div class = "container-fluid">
        <div class ="row">
            <div class ="col-12">
                <div class = "card">
                    <div class ="card-header">
                        <h3 class="card-title">
                            Data Game
                        </h3>
                    </div>
                    <!--Header table-->
                    <div class="card-body">
                        <table id="game" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Game</th>
                                    <th>Platform</th>
                                    <th>Release Date</th>
                                    <th>Rating</th>
                                    <th>Foto Game</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <!--Body-->
                            <tbody>
                                <?php $no=1; ?>
                                @foreach ($game as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data -> nama_game}}</td>
                                        <td>{{ $data -> platform}}</td>
                                        <td>{{ $data -> release_date}}</td>
                                        <td>{{ $data -> rating}}/10</td>
                                        <td><img src="{{ url('gambar/'.$data -> foto_game) }}" width="100px"></td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-success">Detail</a>
                                            <a href="" class="btn btn-sm btn-warning">Edit</a>
                                            <a href="" class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table><br>
                <div class="row">
                    <div class="col-sm-12 col-md-5">
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