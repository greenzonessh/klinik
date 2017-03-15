<?php

namespace App\Http\Controllers;

use App\Models\m_dokter;
use App\Models\m_jadwal;
use App\Models\m_pasien;
use App\Models\m_pegawai;
use App\Models\m_posting;
use App\Models\m_user;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('rule:admin');
    }

    public function viewAdmin(){
        return view('admin.viewAdmin');
    }

    public function viewAktivitasfisik(){
        $daftarposting = m_posting::where('id_kategori','1')->orderby('tanggal','DESC')->get();
        return view('admin.viewAktivitasfisik', compact('daftarposting'));
    }

    public function buatAktivitasfisik(Request $request){

        $user = Auth::user();
        $extension = $request->file('gambar_posting')->getClientOriginalExtension();
        $posting = new m_posting();
        $posting->id_pegawai = $user->kepegawai->id_pegawai;
        $posting->id_kategori = '1';
        $posting->judul_posting = $request->judul_posting;
        $posting->isi_posting = $request->isi_posting;
        $posting->tanggal = date('Y-m-d');
        $posting->save();
        $filename = 'aktivitasfisik-1-'.$posting->id_posting.'.'.$extension;
        $posting->gambar_posting = $filename;
        $posting->update();
        $request->file('gambar_posting')->move('images/posting/aktivitasfisik/', $filename);
        return redirect('admin/berita/aktivitasfisik');
    }

    public function viewPolamakandash(){
        $daftarposting = m_posting::where('id_kategori','2')->orderby('tanggal','DESC')->get();
        return view('admin.viewPolamakan',compact('daftarposting'));
    }

    public function buatPolamakandash(Request $request){

        $user = Auth::user();
        $extension = $request->file('gambar_posting')->getClientOriginalExtension();
        $posting = new m_posting();
        $posting->id_pegawai = $user->kepegawai->id_pegawai;
        $posting->id_kategori = '2';
        $posting->judul_posting = $request->judul_posting;
        $posting->isi_posting = $request->isi_posting;
        $posting->tanggal = date('Y-m-d');
        $posting->save();
        $filename = 'polamakandash-2-'.$posting->id_posting.'.'.$extension;
        $posting->gambar_posting = $filename;
        $posting->update();
        $request->file('gambar_posting')->move('images/posting/polamakandash/', $filename);
        return redirect('admin/berita/polamakandash');
    }

    public function viewBeratbadansehat(){
        $daftarposting = m_posting::where('id_kategori','3')->orderby('tanggal','DESC')->get();
        return view('admin.viewBeratbadan',compact('daftarposting'));
    }

    public function buatBeratbadansehat(Request $request){

        $user = Auth::user();
        $extension = $request->file('gambar_posting')->getClientOriginalExtension();
        $posting = new m_posting();
        $posting->id_pegawai = $user->kepegawai->id_pegawai;
        $posting->id_kategori = '3';
        $posting->judul_posting = $request->judul_posting;
        $posting->isi_posting = $request->isi_posting;
        $posting->tanggal = date('Y-m-d');
        $posting->save();
        $filename = 'beratbadansehat-3-'.$posting->id_posting.'.'.$extension;
        $posting->gambar_posting = $filename;
        $posting->update();
        $request->file('gambar_posting')->move('images/posting/beratbadansehat/', $filename);
        return redirect('admin/berita/beratbadansehat');
    }

    public function viewDietsodium(){
        $daftarposting = m_posting::where('id_kategori','4')->orderby('tanggal','DESC')->get();
        return view('admin.viewDietsodium',compact('daftarposting'));
    }

    public function buatDietsodium(Request $request){

        $user = Auth::user();
        $extension = $request->file('gambar_posting')->getClientOriginalExtension();
        $posting = new m_posting();
        $posting->id_pegawai = $user->kepegawai->id_pegawai;
        $posting->id_kategori = '4';
        $posting->judul_posting = $request->judul_posting;
        $posting->isi_posting = $request->isi_posting;
        $posting->tanggal = date('Y-m-d');
        $posting->save();
        $filename = 'dietsodium-4-'.$posting->id_posting.'.'.$extension;
        $posting->gambar_posting = $filename;
        $posting->update();
        $request->file('gambar_posting')->move('images/posting/dietsodium/', $filename);
        return redirect('admin/berita/dietsodium');
    }

    public function viewDietalkohol(){
        $daftarposting = m_posting::where('id_kategori','5')->orderby('tanggal','DESC')->get();
        return view('admin.viewDietalkohol',compact('daftarposting'));
    }

    public function buatDietalkohol(Request $request){

        $user = Auth::user();
        $extension = $request->file('gambar_posting')->getClientOriginalExtension();
        $posting = new m_posting();
        $posting->id_pegawai = $user->kepegawai->id_pegawai;
        $posting->id_kategori = '5';
        $posting->judul_posting = $request->judul_posting;
        $posting->isi_posting = $request->isi_posting;
        $posting->tanggal = date('Y-m-d');
        $posting->save();
        $filename = 'dietalkohol-5-'.$posting->id_posting.'.'.$extension;
        $posting->gambar_posting = $filename;
        $posting->update();
        $request->file('gambar_posting')->move('images/posting/dietalkohol/', $filename);
        return redirect('admin/berita/dietalkohol');
    }

    public function viewAkundokter(){
        $daftardokter = m_dokter::all();
        return view('admin.viewAkundokter', compact('daftardokter'));
    }

    public function buatAkundokter(Request $request){
        $akundokter = new m_user();
        $akundokter->username = $request->username;
        $akundokter->password = bcrypt($request->password);
        $akundokter->id_level = '2';
        $akundokter->save();

        $daftardokterbaru = new m_dokter();
        $daftardokterbaru->nama_dokter = $request->nama_dokter;
        $daftardokterbaru->jenis_kelamin = $request->jenis_kelamin;
        $daftardokterbaru->tanggal_lahir = $request->tanggal_lahir;
        $daftardokterbaru->jabatan = $request->jabatan;
        $daftardokterbaru->alamat = $request->alamat;
        $daftardokterbaru->id_user = $akundokter->id_user;
        $daftardokterbaru->save();


        return redirect('admin/akun/dokter');
    }

    public function viewAkunpasien(){
        $daftarpasien = m_pasien::all();
        return view('admin.viewAkunpasien', compact('daftarpasien'));
    }

    public function buatAkunpasien(Request $request){
        $akunpasien = new m_user();
        $akunpasien->username = $request->username;
        $akunpasien->password = bcrypt($request->password);
        $akunpasien->id_level = '3';
        $akunpasien->save();

        $daftarpasienbaru = new m_pasien();
        $daftarpasienbaru->nama_pasien = $request->nama_pasien;
        $daftarpasienbaru->jenis_kelamin = $request->jenis_kelamin;
        $daftarpasienbaru->tanggal_lahir = $request->tanggal_lahir;
        $daftarpasienbaru->alamat = $request->alamat;
        $daftarpasienbaru->id_user = $akunpasien->id_user;
        $daftarpasienbaru->save();

        return redirect('admin/akun/pasien');
    }

    public function viewAkunadmin(){
        $daftaradmin = m_pegawai::all();
        return view('admin.viewAkunadmin', compact('daftaradmin'));
    }

    public function buatAkunadmin(Request $request){
        $akunpasien = new m_user();
        $akunpasien->username = $request->username;
        $akunpasien->password = bcrypt($request->password);
        $akunpasien->id_level = '1';
        $akunpasien->save();

        $daftarpasienbaru = new m_pegawai();
        $daftarpasienbaru->nama_pegawai = $request->nama_pegawai;
        $daftarpasienbaru->id_user = $akunpasien->id_user;
        $daftarpasienbaru->save();

        return redirect('admin/akun/admin');
    }

    public function logoutAdmin(){
        Auth::logout();
        return redirect('login');
    }

    public function viewEdit($id){
        $postingan = m_posting::where('id_posting',$id)->first();
        return view('admin.viewEdit', compact('postingan'));
    }
    public function viewEditSimpan(Request $request, $id){
        $update = m_posting::where('id_posting',$id)->first();
        $update->judul_posting = $request->judul_posting;
        $update->isi_posting = $request->isi_posting;
        $update->update();

        return redirect('admin');
    }

    public function ubahpassword(Request $request,$id){
        $updatepass = m_user::find($id);
        $updatepass->password = bcrypt($request->password);
        $updatepass->remember_token = NULL;
        $updatepass->update();

        return redirect('admin');
    }

    public function deletepostingaktivitasfisik($id){
        $postingan = m_posting::find($id);
        $postingan->delete();

        return redirect('admin/berita/aktivitasfisik');

    }

    public function deletepostingpolamakan($id){
        $postingan = m_posting::find($id);
        $postingan->delete();

        return redirect('admin/berita/polamakandash');

    }

    public function deletepostingberatbadansehat($id){
        $postingan = m_posting::find($id);
        $postingan->delete();

        return redirect('admin/berita/beratbadansehat');

    }

    public function deletepostingdietsodium($id){
        $postingan = m_posting::find($id);
        $postingan->delete();

        return redirect('admin/berita/dietsodium');

    }

    public function deletepostingdietalkohol($id){
        $postingan = m_posting::find($id);
        $postingan->delete();

        return redirect('admin/berita/dietalkohol');

    }

    public function viewJadwaldokter(){
        $jadwal = m_jadwal::all();
        return view('admin.viewJadwaldokter', compact('jadwal'));
    }

    public function simpanJadwaldokter(Request $request, $id){
        $user = Auth::user();
        $simpan = m_jadwal::find($id);
        $simpan->id_pegawai = $user->kepegawai->id_pegawai;
        $simpan->isi_jadwal = $request->isi_jadwal;
        $simpan->update();

        return redirect('admin/jadwaldokter');
    }
}
