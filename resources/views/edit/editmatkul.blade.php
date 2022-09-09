@extends('layout.layout')

    @section('title')
    <title>Edit Matakuliah</title>

    @section('conten')
    <div class="col-md-5">
        <div class="card">
            <div class="card-body">
                <label>Edit Matakuliah</label>
                <hr>

                <table class="table table-borderless">
                    @foreach ( $matkul as $m)
                    <form action="{{ route('matkul.update') }}" method="post">
                    {{ csrf_field() }}

                    <tr>
                        <td><input type="hidden" name="id_matkul" value="{{ $m->id_matkul}}" ></td>
                    </tr>
                    <tr>
                        <td>Kode Matakuliah<input type="text" required="required" name="kode_matkul" value="{{ $m->kode_matkul}}"class="form-control" placeholder="kode matakuliah"></td>
                    </tr>
                    <tr>
                        <td>Matakuliah<input type="text" required="required" name="matkul" value="{{ $m->matkul}}"class="form-control" placeholder="matakuliah"></td>
                    </tr>
                    <td>SKS <br>
                        <select name="sks" id="sks">
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
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
