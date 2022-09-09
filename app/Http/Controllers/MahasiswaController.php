<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\MhsModel;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * DashboardController constructor.
     */


    public function index()
    {
        $mhs = MhsModel::paginate(6);
        return view('data.mahasiswa', compact('mhs'));
    }

    public function create()
    {
        return view('data.tambahmahasiswa');
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

    public function edit($id)
    {
        $mhs = DB::table('mhs')->where('id', $id)->get();
        return view('edit.editmahasiswa', ['mhs' => $mhs]);
    }

    public function update(Request $request)
    {
        DB::table('mhs')->where('id', $request->id)->update([
            'nama' => $request->nama,
            'jk' => $request->jk,
            'jurusan' => $request->jurusan,
            'alamat' => $request->alamat
        ]);

        return redirect('/mahasiswa');
    }
}
