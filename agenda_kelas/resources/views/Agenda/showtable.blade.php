@extends('layout')


@section('isi')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-11">
            <div class="card mt-3">
                <div class="card-body">
                    <h1 class="text-center">Agenda Kelas</h1>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                      {{ $message }}
                    </div>  
                    @endif

                    <a href="/create-agenda" class="btn btn-success mb-4">Tambah</a>

                    {{-- table --}}
                    
                    <table class="table">
                      <thead  class="">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Guru</th>
                            <th scope="col">Mapel</th>
                            <th scope="col">Materi</th>
                            <th scope="col">Pembelajaran</th>
                            <th scope="col">Link Belajar</th>
                            <th scope="col">Absensi</th>
                            <th scope="col">Dokumentasi</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Waktu Mulai</th>
                            <th scope="col">Waktu Selesai</th>
                            <th scope="col">Option</th>

                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataAgenda as $item)
                    
                          <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{ $item->namaguru }}</td>
                            <td>{{ $item->mapel }}</td>
                            <td>{{ $item->materi }}</td>
                            <td>{{ $item->jenis }}</td>
                            <td>{{ $item->link }}</td>
                            <td>{{ $item->absensi_siswa }}</td>
                            <td>
                              <img src="{{asset('foto/'.$item->foto)}}" alt="" style="width: 100px">
                            </td>
                            <td>{{ $item->namakelas }}</td>
                            <td>{{ $item->ketguru }}</td>
                            <td>{{ $item->waktu_mulai }}</td>
                            <td>{{ $item->waktu_selesai }}</td>

                            <td>
                                <a href="{{ url('edit-agenda',$item->id)}}" class="btn btn-warning">Edit</a>
                                <form action="{{ url('delete-agenda', $item->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>

                    <table class="table">
                        <thead>
                         
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection