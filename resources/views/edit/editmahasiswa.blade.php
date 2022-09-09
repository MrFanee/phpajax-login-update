@extends('layout.layout')

    @section('title')
    <title>Edit Mahasiswa</title>

    @section('conten')
    <div class="col-md-5">
        <div class="card">
            <div class="card-body">
                <label>Edit Mahasiswa</label>
                <hr>

                <table class="table table-borderless">
                    @foreach ( $mhs as $m)
                    <form action="{{ route('mahasiswa.update')}}" method="post">
                    {{ csrf_field() }}

                    <tr>
                        <td><input type="hidden" name="id" value="{{ $m->id}}" ></td>
                    </tr>
                    <tr>
                        <td>Nama<input type="text" required="required" name="nama" value="{{ $m->nama}}"class="form-control" placeholder="nama"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin <br>
                            <select name="jk" id="jk">
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </td>
                        {{-- <td>Jenis Kelamin<input type="text" required="required" name="jk" value="{{ $m->jk }}" class="form-control" placeholder="jenis kelamin"></td> --}}
                    </tr>
                    <tr>
                        <td>Jurusan <br>
                            <select name="jurusan" id="jurusan">
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Teknik Informasi">Teknik Informasi</option>
                            <option value="Akutansi">Akutasi</option>
                            <option value="Sastra Inggris">Sastra Inggris</option>
                        </td>
                        {{-- <td>Jurusan<input type="text" required="required" name="jurusan" value="{{ $m->jurusan }}" class="form-control" placeholder="jurusan"></td> --}}
                    </tr>
                    <tr>
                        <td>Alamat<input type="text" required="required" name="alamat" value="{{ $m->alamat }}" class="form-control" placeholder="alamat"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="simpan" class="btn btn-success">
                            <a href="{{ route('mahasiswa.index')}}" class="btn btn-danger">Kembali</a></td>
                    </tr>
                    </form>
                    @endforeach
                </table>

            </div>
        </div>
    </div>
    @endsection
