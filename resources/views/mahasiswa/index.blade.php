@extends('layouts.app')
  <head>
    <title>Data Mahasiswa</title>
  </head>
@section('content')
    <div>
    <div class="py-4 d-flex justify-content-end align-items-center">
      <h2 class="mr-auto">Data Mahasiswa</h2>
    <a href="{{route('mahasiswas.create')}}" class="btn btn-primary">
      Registrasi Mahasiswa
    </a>
    </div>

    @if (session()->has('pesan'))
        <div class="alert alert-success">
          {{session()->get('pesan')}}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($mahasiswa as $mahasiswa)
            <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td><a href="{{route('mahasiswas.detail',['mahasiswa'=>$mahasiswa->id])}}">
                {{$mahasiswa->nim}}</a></td>
                <td>{{$mahasiswa->nama}}</td>
            </tr>
            @empty
                <td colspan="4" class="text-center">Data Mahasiswa tidak ada</td>
            @endforelse
        </tbody>
      </table>
    </div class="py-4 d-flex justify-content-end align-items-center">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
@endsection