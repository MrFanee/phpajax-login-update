<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MhsModel;
use Illuminate\Http\Request;

class MhsController extends Controller
{
    public function index()
    {
        return view('data.tambahmahasiswa');
    }

    public function tambah(Request $request)
    {
        $this->validate($request,[
    		'nama' => 'required',
            'jk' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required'
    	]);

        MhsModel::create([
    		'nama' => $request->nama,
    		'jk' => $request->jk,
    		'jurusan' => $request->jurusan,
    		'alamat' => $request->alamat
    	]);

    	return view('data.mahasiswa');
    }
}
