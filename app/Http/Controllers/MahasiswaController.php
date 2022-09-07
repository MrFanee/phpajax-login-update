<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\MhsModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    /**
     * DashboardController constructor.
     */


    public function index()
    {
        $mhs = MhsModel::all();
        return view('data.mahasiswa', compact('mhs'));
    }

    public function create()
    {
        return view('data/tambahmahasiswa');
    }

    public function store(Request $request)
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

    	return redirect('/mahasiswa');
    }

    public function delete($id)
    {
        DB::table('mhs')->where('id',$id)->delete();
        return redirect('/mahasiswa');
    }
}