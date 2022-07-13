@extends('layout2')

@section('judul','Data Kelas')
@section('isi2')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-11">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center">Data Guru</h1>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{$message}}
                    </div>
                    @endif
                    <a href="{{ route('create-guru')}}" class="btn btn-success">Tambah</a>

                    {{-- table --}}
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Guru</th>
                                <th scope="col">Mata Pelajaran</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataGuru as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->namaguru }}</td>
                                <td>{{ $item->mapel }}</td>
                                <td>
                                    <a href="{{url('edit-guru', $item->id)}}" class="btn btn-warning">Edit</a>
                                 <form action="{{ url('delete-guru',$item->id) }}" method="POST">
                                  @csrf
                                 @method('delete')
                                <button class="btn btn-danger">Hapus</button></form>
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