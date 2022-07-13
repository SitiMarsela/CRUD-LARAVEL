@extends('layout2')
@section('judul','Form Edit ')
    @section('isi2')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('update-guru', $guru->id) }}" method="POST">
                        {{ csrf_field() }}
                        @method('PUT')
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nama Guru</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="namaguru" value="{{ $guru->namaguru }}">
                          @error('namaguru')
                              <div class="text-danger">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Mata Pelajaran</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" name="mapel" value="{{ $guru->mapel }}">
                          @error('mapel')
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
@endsection