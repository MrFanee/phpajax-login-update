@extends('layout.layout')

    @section('title')
    <title>Matakuliah</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @endsection

    @section('conten')
    <div class="col-md-10">
        <div class="card">
            <div class="card-body">
                <label>Matakuliah</label>
                <hr>

                <a href="#" class="btn btn-success btn-sm">Tambah</a>
                {{-- pdf --}}
                <a href="#" class="btn btn-primary btn-sm" target="_blank">Cetak pdf</a>
                {{-- excel --}}
                <a href="#" class="btn btn-primary my-3 btn-sm" target="#">Export_excel</a>
                <table class="table table-hover">
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">Kode matkul</th>
                        <th scope="col">Matakuliah</th>
                        <th scope="col">SKS</th>
                        <th scope="col">Aksi</th>
                    </tr>
                    @foreach ( $matkul as $ma)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $ma->kode_matkul}}</td>
                        <td>{{ $ma->matkul}}</td>
                        <td>{{ $ma->sks}}</td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm" >Edit</a>
                            <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                        </td>

                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    @endsection
