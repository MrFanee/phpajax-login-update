@extends('layout.layout')

    @section('title')
    <title>Tambah Mahasiswa</title>
    @endsection

    @section('conten')
    <div class="col-md-10">
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
                        <td>Jenis Kelamin <input type="text" name="jk" class="form-control" placeholder="jenis kelamin"></td>
                    </tr>
                    <tr>
                        <td>Jurusan <input type="text" name="jurusan" class="form-control" placeholder="jurusan"></td>
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


