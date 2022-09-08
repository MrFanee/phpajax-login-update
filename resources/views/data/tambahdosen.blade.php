@extends('layout.layout')

    @section('title')
    <title>Tambah Dosen</title>
    @endsection

    @section('conten')
    <div class="col-md-5">
        <div class="card">
            <div class="card-body">
                <label>Tambah Dosen</label>
                <hr>

                <table class="table table-borderless">
                    <form method="post" action="{{ route('dosen.store')}}">
                    {{ csrf_field() }}
                    <tr>
                        <td>NIP <input type="text" name="nip" class="form-control" placeholder="nama"></td>
                    </tr>
                    <tr>
                        <td>Nama Dosen <input type="text" name="nama_dosen" class="form-control" placeholder="nama dosen"></td>
                    </tr>
                    <tr>
                    <tr>
                        <td>Jenis Kelamin <br>
                            <select name="jk" id="jk">
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </td>
                        {{-- <td>Jenis Kelamin <input type="text" name="jk" class="form-control" placeholder="jenis kelamin"></td> --}}
                    </tr>
                    <tr>
                        <td>alamat <input type="text" name="alamat" class="form-control" placeholder="alamat"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="simpan" class="btn btn-success">
                        <a href="{{ route('dosen.index')}}" class="btn btn-danger">Kembali</a></td>

                    </tr>
                    </form>

                </table>

            </div>
        </div>
    </div>
    @endsection


