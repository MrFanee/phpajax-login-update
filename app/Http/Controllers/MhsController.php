<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MhsModel;

class MhsController extends Controller
{
    public function index()
    {
        return view('data.tambahmahasiswa');
    }

    // public function tambah(Request $request)
    // {
    //     $nama = $request->input('nama');
    //     $jk = $request->input('jk');
    //     $jurusan = $request->input('jurusan');
    //     $alamat = $request->input('alamat');

    //     $mhs = MhsModel::create([
    //         'nama' => $nama,
    //         'jk' =>  $jk,
    //         'jurusan' => $jurusan,
    //         'alamat' => $alamat
    //     ]);

    //     if($mhs) {
    //         return response()->json([
    //             'success' => true,
    //             'message' => 'Register Berhasil!'
    //         ], 201);
    //     } else {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'Register Gagal!'
    //         ], 400);
    //     }

    // }

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
