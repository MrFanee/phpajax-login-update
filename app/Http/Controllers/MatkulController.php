<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MatkulModel;
use Illuminate\Support\Facades\DB;

class MatkulController extends Controller
{
    public function index()
    {
        $matkul = MatkulModel::paginate(6);
        return view('data.matkul', compact('matkul'));
    }

    public function create()
    {
        return view('data.tambahmatkul');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'kode_matkul' => 'required',
            'matkul' => 'required',
            'sks' => 'required'
        ]);

        MatkulModel::create([
            'kode_matkul' => $request->kode_matkul,
            'matkul' => $request->matkul,
            'sks' => $request->sks
        ]);

        return redirect('/matkul');
    }

    public function delete($id_matkul)
    {
        DB::table('matkul')->where('id_matkul', $id_matkul)->delete();
        return redirect('/matkul');
    }
}
