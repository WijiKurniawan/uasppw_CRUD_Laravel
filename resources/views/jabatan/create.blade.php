@extends('layouts.master')



@section('content')

<div class="container">
    <br>
    <h1 class="text-center">Halaman Tambah Jabatan</h1>
    <form action="/jabatan/store" method="POST">
        @csrf
        <div class="mb-3">
            <label for="createPegawai" class="form-label">Nama</label>
            <input type="text" name="Nama" class="form-control" id="createPegawai" aria-describedby="">
        </div>
        <div class="mb-3">
            <label for="createPegawai" class="form-label">Kode Jabatan</label>
            <input type="text" name="KodeJabatan" class="form-control" id="createPegawai" aria-describedby="">
        </div>
        <div class="mb-3">
            <label for="createPegawai" class="form-label">Nama Jabatan</label>
            <input type="text" name="NamaJabatan" class="form-control" id="createPegawai" aria-describedby="">
        </div>
        
        <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
        </form>
</div>

@endsection