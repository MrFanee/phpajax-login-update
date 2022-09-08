<?php

namespace App\Http\Controllers;

use App\Models\DosenModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DosenController extends Controller
{
    public function index()
    {
        $dosen = DosenModel::paginate(6);
        return view('data.dosen', ['dosen' => $dosen]);
    }

    public function create()
    {
        return view('data.tambahdosen');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'nip' => 'required',
            'nama_dosen' => 'required',
            'jk' => 'required',
            'alamat' => 'required'
        ]);

        DosenModel::create([
            'nip' => $request->nip,
            'nama_dosen' => $request->nama_dosen,
            'jk' => $request->jk,
            'alamat' => $request->alamat
        ]);

        return redirect('/dosen');
    }

    public function delete($id_dosen)
    {
        DB::table('dosen')->where('id_dosen', $id_dosen)->delete();
        return redirect('/dosen');
    }

}
