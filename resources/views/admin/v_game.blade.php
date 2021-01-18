@extends('admin.admintemplate.v_admintemp')
@section('judul','Data Game')

@section('content')
    @if(session('pesan'))
      <div class="alert alert-success alert-dismissible">
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
         <h5><i class="icon fas fa-check"></i> Sukses!</h5>
         {{session('pesan')}}.
      </div>
   @endif

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
                                            <a href="/game/detail/{{ $data->id_game }}" class="btn btn-sm btn-success">Detail</a>
                                            <a href="/game/edit/{{ $data->id_game }}" class="btn btn-sm btn-warning">Edit</a>
                                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete{{ $data->id_game }}">
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
                                <li class="page-item"><a class="page-link" href="/game">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="/game">1</a></li>
                                <li class="page-item"><a class="page-link" href="/game">2</a></li>
                                <li class="page-item"><a class="page-link" href="/game">3</a></li>
                                <li class="page-item"><a class="page-link" href="/game">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach ($game as $data)
   <div class="modal fade" id="delete{{ $data->id_game }}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Hapus Data {{ $data->nama_game}}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
               <div class="modal-body">
                  <p>Apa data ingin di hapus ?</p>
               </div>
               <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                  <a href="/game/delete/{{ $data->id_game }}" class="btn btn-primary">Ya</a>
               </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
   </div>
@endforeach

@endsection