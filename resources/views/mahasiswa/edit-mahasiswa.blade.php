@extends('layouts.app')
  <head>
    <title>Update Data Mahasiswa</title>
  </head>
@section('content')
    <h1>Update Data Mahasiswa</h1>

    <form action="{{route('mahasiswas.update', ['mahasiswa'=>$mahasiswa->id])}}" method="POST">
        @method('PUT')
        @csrf 

        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputkode">NIM</label>
            <input type="text" class="form-control @error('nim') is-invalid @enderror" 
                id="inputnim" name="nim" 
                value="{{old('nim') ?? $mahasiswa->nim}}">
            @error('nim')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputnamab">Nama Lengkap</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" 
                id="inputnamam" name="nama" 
                value="{{old('nama') ?? $mahasiswa->nama}}">
            @error('nama')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            </div>
        </div>

        <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputttl">Tempat Lahir</label>
            <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" 
                id="inputttl" name="tempat_lahir" 
                value="{{old('tempat_lahir') ?? $mahasiswa->tempat_lahir}}">
            @error('tempat_lahir')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-4">
              <label for="inputtgl">Tanggal Lahir (tgl/bln/thn)</label>
              <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" 
              id="inputtgl" name="tanggal_lahir" 
              value="{{old('tanggal_lahir') ?? $mahasiswa->tanggal_lahir}}">
              @error('tanggal_lahir')
              <div class="alert alert-danger">{{$message}}</div>
              @enderror
              </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputfak">Fakultas</label>
            <input type="text" class="form-control @error('fakultas') is-invalid @enderror" 
                id="inputfak" name="fakultas" 
                value="{{old('fakultas') ?? $mahasiswa->fakultas}}">
            @error('fakultas')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputjur">Jurusan</label>
            <input type="text" class="form-control @error('jurusan') is-invalid @enderror" 
                id="inputjur" name="jurusan" 
                value="{{old('jurusan') ?? $mahasiswa->jurusan}}">
            @error('jurusan')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-4">
                <label for="ipk">IPK</label>
                <input type="text" class="form-control @error('ipk') is-invalid @enderror" 
                    id="ipk" name="ipk" 
                    value="{{old('ipk') ?? $mahasiswa->ipk}}">
                @error('ipk')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                </div>
            </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    <hr/>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
@endsection