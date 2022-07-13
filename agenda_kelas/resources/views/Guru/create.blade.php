@extends('layout2')

@section('judul'.'Form create')
@section('isi2')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('simpan-guru') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nama Guru</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="namaguru" >
                          @error('namaguru')
                              <div class="text-danger">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Mata Pelajaran</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" name="mapel" >
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