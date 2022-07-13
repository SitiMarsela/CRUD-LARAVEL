@extends('layout')


@section('isi')
<div class="container">
    <div class="row justify-content-center">
       <div class="col-11">
           <div class="card mt-5">
               <div class="card-body">
                <form action="{{ route('update-agenda',$agenda->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    @method('PUT')
                       
                       <div class="mb-3">
                         <label for="exampleInputEmail1" class="form-label">Nama Guru</label>
                         <select name="namaguru" class="form-select form-control" id="">
                          <option selected value="{{ $agenda->namaguru }}">{{ $agenda->namaguru }}</option>
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
                          <option selected value="{{ $agenda->mapel }}">{{ $agenda->mapel }}</option>
                          @foreach ($ng as $item)
                          <option value="{{ $item->mapel }}">
                            {{ $item->mapel }}
                          </option>
                          @endforeach
                      </select>
                      </div>
  
                       <div class="mb-3">
                           <label for="exampleInputEmail1" class="form-label">Materi</label>
                           <input type="text" class="form-control" name="materi" value="{{ $agenda->materi }}">
                           @error('materi')
                             <div class="text-danger">{{ $message }}</div>
                         @enderror
                         </div>
  
                         <div class="mb-3">
                           <label for="exampleInputEmail1" class="form-label">Jenis Pembelajaran</label>
                           <select name="jenis" class="form-select form-control" id="">
                               <option selected>{{ $agenda->jenis }}</option>
                               <option value="1">Online</option>
                               <option value="2">Offline</option>
                           </select>
                         </div>
  
                         <div class="mb-3">
                           <label for="exampleInputEmail1" class="form-label">Link Pembelajaran</label>
                           <input type="text" class="form-control" name="link" value="{{ $agenda->link }}">
                         </div>
  
                         <div class="mb-3">
                           <label for="exampleInputEmail1" class="form-label">Absensi Siswa</label>
                           <input type="textarea" class="form-control" name="absensi_siswa" value="{{ $agenda->absensi_siswa }}">
                           @error('absensi_siswa')
                             <div class="text-danger">{{ $message }}</div>
                         @enderror
                         </div>


                         <div class="input-group mb-3"> 
                          <input type="file" class="form-control" id="inputGroupFile02" name="foto">
                          <img src="{{ asset('foto/'.$agenda->foto) }}" alt="" style="width: 90px">
                          {{-- @error('foto')
                           <div class="text-danger">{{ $message }}</div>
                       @enderror --}}
                        </div>

                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kelas</label>
                            <select name="namakelas" class="form-select form-control" id="">
                              <option selected value="{{ $agenda->namakelas }}">{{ $agenda->namakelas }}</option>
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
                                <option selected>{{ $agenda->ketguru }}</option>
                                <option value="1">Hadir</option>
                                <option value="2">Tidak Hadir</option>
                            </select>
                          </div>

                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Waktu Mulai</label>
                            <input type="time" class="form-control" name="waktu_mulai" value="{{ $agenda->waktu_mulai }}">
                            @error('waktu_mulai')
                              <div class="text-danger">{{ $message }}</div>
                          @enderror
                          </div>

                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Waktu Selesai</label>
                            <input type="time" class="form-control" name="waktu_selesai"  value="{{ $agenda->waktu_selesai }}">
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