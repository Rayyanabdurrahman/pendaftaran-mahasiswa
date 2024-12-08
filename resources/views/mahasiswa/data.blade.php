@extends('layouts')
@section('title', 'Data mahasiswa')
@section('content')
    <div class="container" >
        <form action="{{route('mahasiswa.search')}}" method="post" class="mt-2 mb-2">
            @csrf
            <input type="text" name="search">
            <button class="btn btn-primary">Cari</button>
        </form>
        <table class="table table-primary">
            <tr class="table-primary">
                <th class="table-primary">No</th>
                <th class="table-primary">Nama</th>
                {{-- <th class="table-primary">Email</th>
                <th class="table-primary">Alamat</th> --}}
                <th class="table-primary">Aksi</th>
            </tr>
            @foreach ($mahasiswa as $item)
           
            <tr class="table-primary">
                <td class="table-primary">{{$loop->iteration}}</td>
                <td class="table-primary">{{$item->nama}}</td>
                {{-- <td class="table-primary">{{$item->email}}</td>
                <td class="table-primary">{{$item->alamat}}</td> --}}
                <td class="table-primary d-flex">
                    <a href="{{route('mahasiswa.detail', $item->id)}}" class="mx-2">
                        <button class="btn btn-primary">Detail</button>
                    </a>
                    <form action="{{route('mahasiswa.failed', $item->id)}}" method="get" class="mx-2">
                        <button class="btn btn-info">Gagal validasi</button>
                    </form>
                    <form action="{{route('mahasiswa.success', $item->id)}}" method="get" class="">
                        <button class="btn btn-info ml-2">Berhasil validasi</button>
                    </form>
                    <form action="{{route('mahasiswa.delete', $item->id)}}" method="post" class="">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger ml-2">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach

            {{$mahasiswa->links()}}
        </table>
    </div>
@endsection