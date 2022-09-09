@extends('layout.layout')

    @section('title')
    <title>Edit Dosen</title>

    @section('conten')
    <div class="col-md-5">
        <div class="card">
            <div class="card-body">
                <label>Edit Dosen</label>
                <hr>

                <table class="table table-borderless">
                    @foreach ( $dosen as $d)
                    <form action="{{ route('dosen.update')}}" method="post">
                    {{ csrf_field() }}

                    <tr>
                        <td><input type="hidden" name="id_dosen" value="{{ $d->id_dosen}}" ></td>
                    </tr>
                    <tr>
                        <td>NIP<input type="text" required="required" name="nip" value="{{ $d->nip}}"class="form-control" placeholder="nip"></td>
                    </tr>
                    <tr>
                        <td>Nama<input type="text" required="required" name="nama_dosen" value="{{ $d->nama_dosen}}"class="form-control" placeholder="nama dosen"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin <br>
                            <select name="jk" id="jk">
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </td>
                        {{-- <td>Jenis Kelamin<input type="text" required="required" name="jk" value="{{ $d->jk }}" class="form-control" placeholder="jenis kelamin"></td> --}}
                    </tr>
                    <tr>
                        <td>Alamat<input type="text" required="required" name="alamat" value="{{ $d->alamat }}" class="form-control" placeholder="alamat"></td>
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
