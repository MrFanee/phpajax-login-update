@extends('layout.layout')

    @section('title')
    <title>Matakuliah</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @endsection

    @section('conten')
    <div class="col-md-10">
        <div class="card">
            <div class="card-body">
                <label>MATAKULIAH</label>
                <hr>
                <a href="{{ route('matkul.create')}}" class="btn btn-success btn-sm">Tambah</a>
                <br>
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
                        <td>{{ $matkul->firstItem() + $loop->index }}</td>
                        <td>{{ $ma->kode_matkul}}</td>
                        <td>{{ $ma->matkul}}</td>
                        <td>{{ $ma->sks}}</td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm" >Edit</a>
                            <a href="/matkul/delete/{{ $ma->id_matkul }}" class="btn btn-danger btn-sm">Hapus</a>
                        </td>

                    </tr>
                    @endforeach
                </table>
                {{ $matkul->links() }}
            </div>
        </div>
    </div>
    @endsection
