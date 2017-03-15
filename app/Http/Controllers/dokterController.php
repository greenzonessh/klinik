<?php

namespace App\Http\Controllers;

use App\Models\m_pemeriksaan;
use Illuminate\Http\Request;

use App\Models\m_pasien;
use Illuminate\Support\Facades\Auth;

class dokterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('rule:dokter');
    }

    public function viewDokter(){
        $daftarpasien = m_pasien::all();
        return view('dokter.viewDokter', compact('daftarpasien'));
    }
    public function buatPemeriksaan($id){
        $datapasien = m_pasien::where('id_pasien',$id)->get();
        return view('dokter.viewBuatpemeriksaan', compact('datapasien'));
    }

    public function lihatpemeriksaan(){
        $user = Auth::user();
        $datapemeriksaan = m_pemeriksaan::where('id_dokter',$user->kedokter->id_dokter)->orderby('tanggal_periksa','DESC')->get();
        return view('dokter.lihatPemeriksaan', compact('datapemeriksaan'));
    }

    public function detailPemeriksaan($id){

        $datapemeriksaan = m_pemeriksaan::where('id_pemeriksaan',$id)->first();
        return view('dokter.viewDetailpemeriksaan', compact('datapemeriksaan'));
    }

    public function simpanPemeriksaan(Request $request,$id){
        $user = Auth::user();
        $pemeriksaan = new m_pemeriksaan();
        $pemeriksaan->id_pasien = $id;
        $pemeriksaan->id_dokter = $user->kedokter->id_dokter;
        $pemeriksaan->hasil_pemeriksaan = $request->hasil_pemeriksaan;
        $pemeriksaan->save();

        return redirect('dokter');
    }

    public function logoutDokter(){
        Auth::logout();
        return redirect('login');
    }
}
