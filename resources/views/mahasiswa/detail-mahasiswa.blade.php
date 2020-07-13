@extends('layouts.app')
  <head>
    <title>Detail {{$mahasiswas->nama}}</title>
  </head>
@section('content')
    <div class="py-4 d-flex justify-content-end align-items-center">
        <h2 class="mr-auto">Detail {{$mahasiswas->nama}}</h2>
        <a href="{{route('mahasiswas.edit', ['mahasiswa'=>$mahasiswas->id])}}" class="btn btn-primary">
            Edit Data
        </a>
        <form action="{{ route('mahasiswas.delete', ['mahasiswa' => $mahasiswas->id]) }}"
            method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger ml-3">Hapus</button>
        </form>
    </div>

    <ul>
        <li>NIM  : {{$mahasiswas->nim}}</li>
        <li>Nama Lengkap  : {{$mahasiswas->nama}}</li>
        <li>Tempat Lahir         : {{$mahasiswas->tempat_lahir}}</li>
        <li>Tanggal Lahir(thn-bln-tgl)  : {{$mahasiswas->tanggal_lahir}}</li>
        <li>Fakultas         : {{$mahasiswas->fakultas}}</li>
        <li>Jurusan         : {{$mahasiswas->jurusan}}</li>
        <li>IPK         : {{$mahasiswas->ipk}}</li>
        <li>Diinput pada : {{$mahasiswas->created_at}}</li>
        <li>Diupdate pada: {{$mahasiswas->updated_at}}</li>
    </ul>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
@endsection