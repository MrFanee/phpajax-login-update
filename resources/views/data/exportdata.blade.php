@extends('layout.layout')

    @section('title')
    <title>Export</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @endsection

    @section('conten')
    <div class="col-md-10">
        <div class="card">
            <div class="card-body">
                <label>DATA EXPORT</label>
                <hr>
                <label>Data Mahasiswa Export</label>
                <br>
                {{-- pdf --}}
                <a href="#" class="btn btn-primary btn-sm" target="_blank">Cetak pdf</a>
                {{-- excel --}}
                <a href="#" class="btn btn-primary my-3 btn-sm" target="#">Export_excel</a>
                <a href="{{ route('mahasiswa.index')}}" class="btn btn-success my-3 btn-sm">Lihat Data</a>
                <hr>
                <label>Data Dosen Export</label>
                <br>
                {{-- pdf --}}
                <a href="#" class="btn btn-primary btn-sm" target="_blank">Cetak pdf</a>
                {{-- excel --}}
                <a href="#" class="btn btn-primary my-3 btn-sm" target="#">Export_excel</a>
                <a href="{{ route('dosen.index')}}" class="btn btn-success my-3 btn-sm" target="#">Lihat Data</a>
                <hr>
                <label>Data Matakuliah Export</label>
                <br>
                {{-- pdf --}}
                <a href="#" class="btn btn-primary btn-sm" target="_blank">Cetak pdf</a>
                {{-- excel --}}
                <a href="#" class="btn btn-primary my-3 btn-sm" target="#">Export_excel</a>
                <a href="{{ route('matkul.index')}}" class="btn btn-success my-3 btn-sm" target="#">Lihat Data</a>
                <hr>


            </div>
        </div>
    </div>
    @endsection
