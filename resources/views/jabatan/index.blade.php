@extends('layouts.master')

@section('title','jabatan')

@section('content')
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Web Kepegawaian</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Jabatan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('home')}}">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Lainnya
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="{{url('pegawai')}}">Pegawai</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{url('absen')}}">Absen</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{url('lembur')}}">Lembur</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{url('riwayat_jabatan')}}">Riwayat jabatan</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{url('pendidikan')}}">Pendidikan</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{url('pengalamankerja')}}">Pengalaman Kerja</a></li>

          </ul>
        </li>
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
        <li class="nav-item">
          
        </li>
      </ul>
    </div>
  </div>
</nav>

<br>

  <body>
    <div class="container">
      <a class="btn btn-primary" href="/jabatan/create"> + Tambah </a>
      <br>
      <br>
      <table class="table table-hover">
        <tr>
          <th>Nama</th>
          <th>Kode Jabatan</th>
          <th>Nama Jabatan</th>
          <th>Opsi</th>
        </tr>
        @foreach($jabatan as $j)
        <tr>
          <td>{{$j->Nama}}</td>
          <td>{{$j->KodeJabatan}}</td>
          <td>{{$j->NamaJabatan}}</td>

      <td>
            <form action="/jabatan/{{$j->id}}" method="POST"><a class="btn btn-warning" href="/jabatan/edit/{{ $j->id }}">Edit</a>
               <!--ini untuk pilihh yg mana tabel yg nk dihapus -->
               @csrf
               @method('delete')
             <input type="submit" class="btn btn-danger" value="Delete">
            </form>
          </td>
        </tr>
      </td>
        @endforeach
      </table>
    </div>

  </body>

@endsection