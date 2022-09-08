@extends('layout.layout')

    @section('title')
    <title>Tambah Matakuliah</title>
    @endsection

    @section('conten')
    <div class="col-md-5">
        <div class="card">
            <div class="card-body">
                <label>Tambah Matakuliah</label>
                <hr>
                <table class="table table-borderless">
                    <form method="post" action="{{ route('matkul.store')}}">
                    {{ csrf_field() }}
                    <tr>
                        <td>kode <input type="text" name="kode_matkul" class="form-control" placeholder="kode matakuliah"></td>
                    </tr>
                    <tr>
                        <td>Nama Matakuliah <input type="text" name="matkul" class="form-control" placeholder="matakuliah"></td>
                    </tr>
                    <tr>
                    <tr>
                        <td>SKS <br>
                            <select name="sks" id="sks">
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                            {{-- <input type="text" name="sks" class="form-control" placeholder="sks"> --}}
                        </td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="simpan" class="btn btn-success">
                        <a href="{{ route('matkul.index')}}" class="btn btn-danger">Kembali</a></td>

                    </tr>
                    </form>

                </table>

            </div>
        </div>
    </div>
    @endsection


