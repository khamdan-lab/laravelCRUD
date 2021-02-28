@extends('layout.v_templates')
@section('title', 'Guru')
@section('content')
    <a href="/guru/add"class="btn btn-sm btn-primary">add</a> 
    <br>
    
    @if(session('pesan'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success</strong> {{session('pesan')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
</div>
    @endif

    <table class = "table table-bordered text-center" >
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama Guru</th>
                <th>Mata pelajaran</th>
                <th>Foto Guru</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1 ;?>
            @foreach($guru as $data)
                <tr>    
                    <td>{{ $no++ }} </td>
                    <td> {{ $data->nip }}</td>
                    <td> {{ $data->nama_guru }}</td>
                    <td> {{ $data->mapel }}</td>
                    <td><img src=" {{ url ('foto_guru/'.$data->foto_guru )}}" width=30px</td>
                    <td>
                        <a href="/guru/detail/{{$data -> id_guru}}" class="btn btn-sm btn-success">Detail</a>
                        <a href="/guru/edit/{{$data -> id_guru}}" class="btn btn-sm btn-warning">Edit</a>
                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete{{$data -> id_guru}}">
                        Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @foreach ($guru as $data)

        <div class="modal fade" id="delete{{$data -> id_guru}}">
            <div class="modal-dialog modal-sm">
            <div class="modal-content bg-danger">
                <div class="modal-header">
                <h4 class="modal-title"> {{$data->nama_guru}}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <p> Apakah Anda Ingin Menghapus Data ? </p>
                </div>
                <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
                <a href ="/guru/delete/{{$data -> id_guru}}" class="btn btn-outline-light">Yes</a>
                </div>
            </div>
            <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

    @endforeach

    


@endsection
