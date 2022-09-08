@extends('layout.layout')

    @section('title')
    <title>Tambah Mahasiswa</title>
    @endsection

    @section('conten')
    <div class="col-md-5">
        <div class="card">
            <div class="card-body">
                <label>Tambah Mahasiswa</label>
                <hr>

                <table class="table table-borderless">
                    <form method="post" action="{{ route('mahasiswa.store')}}" >
                    {{ csrf_field() }}
                    <tr>
                        <td>Nama <input type="text" name="nama" class="form-control" placeholder="nama"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin <br>
                            <select name="jk" id="jk">
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </td>
                        {{-- <td>Jenis Kelamin <input type="text" name="jk" class="form-control" placeholder="jenis kelamin"></td> --}}
                    </tr>
                    <tr>
                        <td>Jurusan <br>
                            <select name="jurusan" id="jurusan">
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Teknik Informasi">Teknik Informasi</option>
                            <option value="Akutansi">Akutasi</option>
                            <option value="Sastra Inggris">Sastra Inggris</option>
                        </td>
                        {{-- <td>Jurusan <input type="text" name="jurusan" class="form-control" placeholder="jurusan"></td> --}}
                    </tr>
                    <tr>
                        <td>alamat <input type="text" name="alamat" class="form-control" placeholder="alamat"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="simpan" class="btn btn-success">
                        <a href="{{ route('mahasiswa.index')}}" class="btn btn-danger">Kembali</a></td>

                    </tr>
                    </form>

                </table>

            </div>
        </div>
    </div>
    @endsection


