@extends('layouts');
@section('title', 'Detail ')
@section('content')
    <div class="container mt-2">
        <ul class="list-group">
            <li class="list-group-item">Nama : {{$mahasiswa->nama}}</li>
            <li class="list-group-item">Email: {{$mahasiswa->email}}</li>
            <li class="list-group-item">Alamat : {{$mahasiswa->alamat}}</li>
            <li class="list-group-item">Tempat tanggal lahir : {{$mahasiswa->tanggal_tempat_lahir}}</li>
            <li class="list-group-item">Jenis kelamin : {{$mahasiswa->jenis_kelamin}}</li>
            <li class="list-group-item">Nama orang tua : {{$mahasiswa->orang_tua}}</li>
            <li class="list-group-item">No hp orang tua : {{$mahasiswa->no_hp_orang_tua}}</li>
            <li class="list-group-item">Nomor telepon : {{$mahasiswa->nomor_telepon}}</li>
          </ul>
    </div>
@endsection
