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

                <a href="{{ route('mahasiswa.create')}}" class="btn btn-success my-2 btn-sm">Tambah</a>
                <br>
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
                        <td>{{ $mhs->firstItem() + $loop->index }}</td>
                        <td>{{ $m->nama}}</td>
                        <td>{{ $m->jk}}</td>
                        <td>{{ $m->jurusan}}</td>
                        <td>{{ $m->alamat}}</td>
                        <td>
                            <a href="/mahasiswa/edit/ {{ $m->id }}" class="btn btn-primary btn-sm" >Edit</a>
                            <a href="/mahasiswa/delete/{{ $m->id }}" class="btn btn-danger btn-sm">Hapus</a>
                        </td>

                    </tr>
                    @endforeach
                </table>
                {{ $mhs->links() }}
            </div>
        </div>
    </div>
    @endsection
