@extends('layout')


@section('isi')
<div class="container">
    <div class="row justify-content-center">
       <div class="col-11">
           <div class="card mt-5">
               <div class="card-body">
                 <h1 class="text-center">Tambah Data Agenda</h1>
                   <form action="{{ route('simpan-agenda')}}" method="POST" enctype="multipart/form-data">
                       @csrf
                       
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


                          <div class="form-group mb-3"> 
                            <input type="file" class="form-control" id="foto" name="foto"> 
                            {{-- @error('foto')
                             <div class="text-danger">{{ $message }}</div>
                         @enderror --}}
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
                   </form>
               </div>
           </div>
       </div>
    </div>
  </div>
@endsection