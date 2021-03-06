@extends('layouts.app')
@section('content')
<style>
    .card{
        opacity: 0.9;
    }
    form{
        width: 100%;
        color: white;
    }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-auto">
            <div class="card bg-dark">
                <div class="card-header text-light">{{ __('Edit Data Siswa') }}</div>
                <div class="card-body">
                <form action="/siswa/{{$siswa->id_siswa}}" method="POST">
                    @method('put')
                    @csrf
                <div class="form-group">
                    <label for="siswa">Nama Siswa <span style="color: red;">*</span></label>
                    <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="{{$siswa->nama_siswa}}">
                </div> <br>
                <div class="row">
                    <div class="col">
                    <label for="siswa">Kelas</label> <span style="color: red;">*</span></label>    
                    <select class="form-select" name="kelas" id="kelas">
                      <option value="">-Pilih Kelas-</option>
                      <option value="X-1" @if($siswa->kelas == "X-1") selected @endif>X-1</option>
                      <option value="X-2" @if($siswa->kelas == "X-2") selected @endif>X-2</option>
                      <option value="X-3" @if($siswa->kelas == "X-3") selected @endif>X-3</option>
                      <option value="X-4" @if($siswa->kelas == "X-4") selected @endif>X-4</option>
                      <option value="X-5" @if($siswa->kelas == "X-5") selected @endif>X-5</option>
                      <option value="XI-1" @if($siswa->kelas == "XI-1") selected @endif>XI-1</option>
                      <option value="XI-2" @if($siswa->kelas == "XI-2") selected @endif>XI-2</option>
                      <option value="XI-3" @if($siswa->kelas == "XI-3") selected @endif>XI-3</option>
                      <option value="XII-1" @if($siswa->kelas == "XII-1") selected @endif>XII-1</option>
                      <option value="XII-2" @if($siswa->kelas == "XII-2") selected @endif>XII-2</option>
                      <option value="XII-3" @if($siswa->kelas == "XII-3") selected @endif>XII-3</option>
                    </select>
                    </div>
                    <div class="col">
                    <label for="siswa">Jurusan</label> <span style="color: red;">*</span></label>   
                    <select class="form-select" aria-label="Default select example" name="jurusan" id="jurusan">
                      <option selected>-Pilih Jurusan-</option>
                      <option value="IPS" @if($siswa->jurusan == "IPS") selected @endif>IPS</option>
                      <option value="IPA" @if($siswa->jurusan == "IPA") selected @endif>IPA</option>
                    </select>
                    </div>
                    <div class="col">
                    <label for="siswa">Jenis Kelamin</label> <span style="color: red;">*</span></label>    
                    <select class="form-select" aria-label="Default select example" name="jenis_kelamin" id="jenis_kelamin">
                      <option selected>-Pilih Jenis Kelamin-</option>
                      <option value="Laki-Laki" @if($siswa->jenis_kelamin == "Laki-Laki") selected @endif>Laki-Laki</option>
                      <option value="Perempuan" @if($siswa->jenis_kelamin == "Perempuan") selected @endif>Perempuan</option>
                    </select>
                    </div> 
                    
                    <div class="mb-3">
                    <br>
                    <label for="alamat" class="form-label">Alamat</label> <span style="color: red;">*</span></label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="3">{{ $siswa->alamat }}</textarea>
                </div>
                </div>
                <button type="submit" class="btn btn-success"><i class="bi bi-box-arrow-up"></i> Update</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection