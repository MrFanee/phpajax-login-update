@extends('layout.layout')

    @section('title')
    <title>Dashboard</title>

    @section('conten')
    <div class="col-md-10">
        <div class="card">
            <div class="card-body">
                <label>DASBOARD</label>
                <hr>
                Selamat Datang {{ Auth::user()->name }}
                <p>
                    Di menu dashboard menampilkan : <br>
                    jumlah mahasiswa <br>
                    jumlah dosen <br>
                    jumlah matkul <br>
                    jumlah user <br>
                </p>
            </div>
        </div>
    </div>
    @endsection
