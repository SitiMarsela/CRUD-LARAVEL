@extends('layout2')

@section('judul','Data Kelas')
@section('isi2')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-11">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center">Data Kelas</h1>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{$message}}
                    </div>
                    @endif
                    <a href="{{ route('create-kelas')}}" class="btn btn-success">Tambah</a>

                    {{-- table --}}
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Nama Kelas</th>
                                <th scope="col">Wali Kelas</th>
                                <th scope="col">Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataKelas as $item)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$item->namakelas}}</td>
                                <td>{{$item->namaguru}}</td>
                                <td>
                                    <a href="{{ url('edit-kelas',$item->id) }}" class="btn btn-warning">edit</a>
                                    <form action="{{ url('delete-kelas',$item->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

