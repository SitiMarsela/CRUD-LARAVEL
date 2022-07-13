@extends('layout2')

@section('judul','From Edit')
@section('isi2')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('update-kelas', $kelas->id) }}" method="POST">
                        <h1>Tambah Data Kelas</h1>
                        {{ csrf_field() }}
                        @method ('PUT')

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Kelas</label>
                            <input name="namakelas" value="{{$kelas->namakelas}}" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            @error('namakelas')
                            <div class="text-warning">{{$message}}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Walikelas</label>
                            <select name="namaguru" class="form-select form-control" id="">
                                <option selected value="{{ $kelas->namaguru }}">{{ $kelas->namaguru }}</option>
                                @foreach ($ng as $item)
                                <option value="{{ $item->namaguru }}">{{ $item->namaguru }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection