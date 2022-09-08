<?php

namespace App\Http\Controllers;

use App\Models\DosenModel;
use App\Models\MatkulModel;
use App\Models\MhsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * DashboardController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $mhs = MhsModel::count();
        $dosen = DosenModel::count();
        $matkul = MatkulModel::count();
        return view('dashboard', compact('mhs','dosen','matkul'));
    }

    public function profil()
    {
        return view('profil');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout(Request $request) {
        Auth::logout();
        return redirect(route('login'));
    }
}
