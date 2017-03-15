<?php

namespace App\Http\Controllers;

use App\Models\m_pemeriksaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class pasienController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('rule:pasien');
    }

    public function viewPasien(){
        $user = Auth::user();
        $datapemeriksaan = m_pemeriksaan::where('id_pasien',$user->kepasien->id_pasien)->orderby('tanggal_periksa','DESC')->get();
        return view('pasien.viewPasien',compact('datapemeriksaan'));
    }

    public function logoutPasien(){
        Auth::logout();
        return redirect('login');
    }
}
