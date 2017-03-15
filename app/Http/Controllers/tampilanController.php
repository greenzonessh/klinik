<?php

namespace App\Http\Controllers;

use App\Models\m_jadwal;
use App\Models\m_posting;
use Illuminate\Http\Request;

class tampilanController extends Controller
{
    public function viewSejarah(){
        return view('tampilan.profil.sejarah');
    }

    public function viewStrukturOrganisasi(){
        return view('tampilan.profil.strukturorganisasi');
    }

    public function viewTenagaKesehatan(){
        return view('tampilan.profil.tenagakesehatan');
    }

    public function viewUnitPelayanan(){
        return view('tampilan.profil.unitpelayanan');
    }

    public function viewJadwalDokter(){
        $jadwal = m_jadwal::all();
        return view('tampilan.profil.jadwaldokter', compact('jadwal'));
    }

    public function viewSenamProlanis(){
        return view('tampilan.prolanishipertensi.senamprolanis');
    }

    public function viewEdukasiKlub(){
        return view('tampilan.prolanishipertensi.edukasiklub');
    }

    public function viewHomeVisite(){
        return view('tampilan.prolanishipertensi.homevisite');
    }


    public function viewApaItuHipertensi(){
        return view('tampilan.crmhipertensi.apaituhipertensi');
    }

    public function viewCrmHipertensi(){
        return view('tampilan.crmhipertensi.crmhipertensi');
    }

    public function viewPentingnyaCrmHipertensi(){
        return view('tampilan.crmhipertensi.pentingnyacrmhipertensi');
    }


    public function viewAktifitasFisik(){
        $postingaktivitasfisik = m_posting::where('id_kategori','1')->orderby('tanggal','DESC')->paginate(5);
        return view('tampilan.terapihipertensi.aktifitasfisik', compact('postingaktivitasfisik'));
    }

    public function viewPolaMakanDash(){
        $postingpolamakan = m_posting::where('id_kategori','2')->orderby('tanggal','DESC')->paginate(5);
        return view('tampilan.terapihipertensi.polamakan', compact('postingpolamakan'));
    }

    public function viewBeratBadanSehat(){
        $postingberatbadan = m_posting::where('id_kategori','3')->orderby('tanggal','DESC')->paginate(5);
        return view('tampilan.terapihipertensi.beratbadansehat', compact('postingberatbadan'));
    }

    public function viewDietSodium(){
        $postingdietsodium = m_posting::where('id_kategori','4')->orderby('tanggal','DESC')->paginate(5);
        return view('tampilan.terapihipertensi.dietsodium', compact('postingdietsodium'));
    }

    public function viewDietAlkohol(){
        $postingdietalkohol = m_posting::where('id_kategori','5')->orderby('tanggal','DESC')->paginate(5);
        return view('tampilan.terapihipertensi.dietalkohol', compact('postingdietalkohol'));
    }

    public function viewDetail($id){
        $detailpost = m_posting::where('id_posting',$id)->first();
        return view('tampilan.terapihipertensi.detail', compact('detailpost'));
    }
}
