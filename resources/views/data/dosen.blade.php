@extends('layout.layout')

    @section('title')
    <title>Dosen</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @endsection

    @section('conten')
    <div class="col-md-10">
        <div class="card">
            <div class="card-body">
                <label>DOSEN</label>
                <hr>

                <a href="{{ route('dosen.create')}}" class="btn btn-success btn-sm">Tambah</a>
                {{-- pdf --}}
                <a href="#" class="btn btn-primary btn-sm" target="_blank">Cetak pdf</a>
                {{-- excel --}}
                <a href="#" class="btn btn-primary my-3 btn-sm" target="#">Export_excel</a>
                <table class="table table-hover">
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">NIP</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis kelamin</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                    @foreach ( $dosen as $d)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $d->nip}}</td>
                        <td>{{ $d->nama_dosen}}</td>
                        <td>{{ $d->jk}}</td>
                        <td>{{ $d->alamat}}</td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm" >Edit</a>
                            <a href="/dosen/delete/{{ $d->id_dosen }}" class="btn btn-danger btn-sm">Hapus</a>
                        </td>

                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    @endsection
