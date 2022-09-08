@extends('layout.layout')

    @section('title')
    <title>Dashboard</title>

    @section('conten')
    <div class="col-md-10">
        <div class="card">
            <div class="card-body">
                <label>DASBOARD</label>
                <hr>


                    <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-primary o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                            <i class="fa fa-fw fa-comments"></i>
                            </div>
                            <div>{{ $mhs }} Mahasiswa</div>
                        </div>
                            <a class="card-footer text-white clearfix small z-1" href="{{ route('mahasiswa.index')}}">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fa fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-4 mb-3">
                    <div class="card text-white bg-primary o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                            <i class="fa fa-fw fa-comments"></i>
                            </div>
                            <div>{{ $dosen }} Dosen</div>
                        </div>
                            <a class="card-footer text-white clearfix small z-1" href="{{ route('dosen.index')}}">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fa fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-primary o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                            <i class="fa fa-fw fa-comments"></i>
                            </div>
                            <div>{{ $matkul }} Matakuliah</div>
                        </div>
                            <a class="card-footer text-white clearfix small z-1" href="{{ route('matkul.index')}}">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fa fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>


                Selamat Datang {{ Auth::user()->name }}

            </div>
        </div>
    </div>
    @endsection
