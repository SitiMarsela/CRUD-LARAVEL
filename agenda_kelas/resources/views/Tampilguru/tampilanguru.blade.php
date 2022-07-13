@extends('layout1')

@section('isi1') 

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
  
  <div class="container mt-5">
    <div class="row justify-content-center">
       <div class="col-12">
           <div class="card">
               <div class="card-body">
                   <form action="{{ route('save-guru')}}" method="POST" enctype="multipart/form-data">
                       @csrf
                       <h1 class="text-center">Form Agenda Kelas</h1>

                       <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Guru</label>
                        <select name="namaguru" class="form-select form-control" id="">
                         <option selected>Pilih Nama Guru</option>
                         @foreach ($ng as $item)
                         <option value="{{ $item->namaguru }}">
                             {{ $item->namaguru }}
                         </option>
                         @endforeach
                     </select>
                      </div>

                      <div class="mb-3">
                       <label for="exampleInputEmail1" class="form-label">Mata Pelajaran</label>
                       <select name="mapel" class="form-select form-control" id="">
                         <option selected>Pilih Mata Pelajaran</option>
                         @foreach ($ng as $item)
                         <option value="{{ $item->mapel }}">
                             {{ $item->mapel }}
                         </option>
                         @endforeach
                     </select>
                     </div>

                       <div class="mb-3">
                           <label for="exampleInputEmail1" class="form-label">Materi</label>
                           <input type="text" class="form-control" name="materi">
                           @error('materi')
                             <div class="text-danger">{{ $message }}</div>
                         @enderror
                         </div>
  
                         <div class="mb-3">
                           <label for="exampleInputEmail1" class="form-label">Jenis Pembelajaran</label>
                           <select name="jenis" class="form-select form-control" id="" >
                               <option selected>Pilih Jenis Pembelajaran</option>
                               <option value="1">Online</option>
                               <option value="2">Offline</option>
                           </select>
                         </div>
  
                         <div class="mb-3">
                           <label for="exampleInputEmail1" class="form-label">Link Pembelajaran</label>
                           <input type="text" class="form-control" name="link">
                         </div>
  
                         <div class="mb-3">
                           <label for="exampleInputEmail1" class="form-label">Absensi Siswa</label>
                           <input type="textarea" class="form-control" name="absensi_siswa">
                           @error('absensi_siswa')
                             <div class="text-danger">{{ $message }}</div>
                         @enderror
                         </div>
  
                         
                         <div class="mb-3">
                          <label for="formFile" class="form-label">Dokumentasi</label>
                          <input class="form-control" type="file" id="foto" name="foto">
                          @error('foto')
                             <div class="text-danger">{{ $message }}</div>
                         @enderror
                        </div>

  
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kelas</label>
                            <select name="namakelas" class="form-select form-control" id="">
                              <option selected>Pilih Nama Kelas</option>
                              @foreach ($kl as $item)
                              <option value="{{ $item->namakelas }}">
                                  {{ $item->namakelas }}
                              </option>
                              @endforeach
                          </select>
                          </div>
  
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                            <select name="ketguru" class="form-select form-control" id="" >
                                <option selected>Pilih Keterangan</option>
                                <option value="1">Hadir</option>
                                <option value="2">Tidak Hadir</option>
                            </select>
                          </div>
  
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Waktu Mulai</label>
                            <input type="time" class="form-control" name="waktu_mulai">
                            @error('waktu_mulai')
                              <div class="text-danger">{{ $message }}</div>
                          @enderror
                          </div>
  
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Waktu Selesai</label>
                            <input type="time" class="form-control" name="waktu_selesai">
                            @error('waktu_selesai')
                              <div class="text-danger">{{ $message }}</div>
                          @enderror
                          </div> 
                          
  
                       <button type="submit" class="btn btn-primary">Submit</button>
                     </form>
               </div>
           </div>
       </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-11">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center mb-5">Data Agenda Kelas</h1>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                      {{ $message }}
                    </div>  
                    @endif

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

                            {{-- <td>
                                <a href="{{ url('edit-agenda',$item->id)}}" class="btn btn-warning">Edit</a>
                                <form action="{{ url('delete-agenda', $item->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">Hapus</button>
                                </form>
                            </td> --}}
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>



@endsection 