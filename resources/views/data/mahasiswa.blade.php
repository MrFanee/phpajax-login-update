@extends('layout.layout')

    @section('title')
    <title>Mahasiswa</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @endsection

    @section('conten')
    <div class="col-md-10">
        <div class="card">
            <div class="card-body">
                <label>MAHASISWA</label>
                <hr>

                <a href="{{ route('mahasiswa.create')}}" class="btn btn-success btn-sm">Tambah</a>
                {{-- pdf --}}
                <a href="#" class="btn btn-primary btn-sm" target="_blank">Cetak pdf</a>
                {{-- excel --}}
                <a href="#" class="btn btn-primary my-3 btn-sm" target="#">Export_excel</a>
                <table class="table table-hover">
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis kelamin</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                    @foreach ( $mhs as $m)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $m->nama}}</td>
                        <td>{{ $m->jk}}</td>
                        <td>{{ $m->jurusan}}</td>
                        <td>{{ $m->alamat}}</td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm" >Edit</a>
                            <a href="/mahasiswa/delete/{{ $m->id }}" class="btn btn-danger btn-sm">Hapus</a>
                        </td>

                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    @endsection
