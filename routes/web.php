<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('tampilan.beranda');
});

Route::get('sejarah', 'tampilanController@viewSejarah');
Route::get('strukturorganisasi', 'tampilanController@viewStrukturOrganisasi');
Route::get('tenagakesehatan', 'tampilanController@viewTenagaKesehatan');
Route::get('unitpelayanan', 'tampilanController@viewUnitPelayanan');
Route::get('jadwaldokter', 'tampilanController@viewJadwalDokter');

Route::get('senamprolanis', 'tampilanController@viewSenamProlanis');
Route::get('edukasiklub', 'tampilanController@viewEdukasiKlub');
Route::get('homevisite', 'tampilanController@viewHomeVisite');

Route::get('apaituhipertensi', 'tampilanController@viewApaItuHipertensi');
Route::get('crmhipertensi', 'tampilanController@viewCrmHipertensi');
Route::get('pentingnyacrmhipertensi', 'tampilanController@viewPentingnyaCrmHipertensi');

Route::get('aktifitasfisik', 'tampilanController@viewAktifitasFisik');
Route::get('polamakandash', 'tampilanController@viewPolaMakanDash');
Route::get('beratbadansehat','tampilanController@viewBeratBadanSehat');
Route::get('dietsodium','tampilanController@viewDietSodium');
Route::get('dietalkohol','tampilanController@viewDietAlkohol');
Route::get('detail/{id}','tampilanController@viewDetail');

Route::get('admin', 'adminController@viewAdmin');
Route::get('admin/berita/aktivitasfisik', 'adminController@viewAktivitasfisik');
Route::post('admin/berita/aktivitasfisik', 'adminController@buatAktivitasfisik');
Route::get('admin/berita/deletepostingaktivitasfisik/{id}','adminController@deletepostingaktivitasfisik');
Route::get('admin/berita/polamakandash', 'adminController@viewPolamakandash');
Route::post('admin/berita/polamakandash', 'adminController@buatPolamakandash');
Route::get('admin/berita/deletepostingpolamakandash/{id}','adminController@deletepostingpolamakan');
Route::get('admin/berita/beratbadansehat', 'adminController@viewBeratbadansehat');
Route::post('admin/berita/beratbadansehat', 'adminController@buatBeratbadansehat');
Route::get('admin/berita/deletepostingberatbadansehat/{id}','adminController@deletepostingberatbadansehat');
Route::get('admin/berita/dietsodium', 'adminController@viewDietsodium');
Route::post('admin/berita/dietsodium', 'adminController@buatDietsodium');
Route::get('admin/berita/deletepostingdietsodium/{id}','adminController@deletepostingdietsodium');
Route::get('admin/berita/dietalkohol', 'adminController@viewDietalkohol');
Route::post('admin/berita/dietalkohol', 'adminController@buatDietalkohol');
Route::get('admin/berita/deletepostingdietalkohol/{id}','adminController@deletepostingdietalkohol');
Route::get('admin/berita/edit/{id}', 'adminController@viewEdit');
Route::post('admin/berita/edit/{id}', 'adminController@viewEditSimpan');
Route::get('admin/akun/dokter', 'adminController@viewAkundokter');
Route::post('admin/akun/dokter', 'adminController@buatAkundokter');
Route::get('admin/akun/pasien', 'adminController@viewAkunpasien');
Route::post('admin/akun/pasien', 'adminController@buatAkunpasien');
Route::get('admin/akun/admin', 'adminController@viewAkunadmin');
Route::post('admin/akun/admin', 'adminController@buatAkunadmin');
Route::get('admin/jadwaldokter', 'adminController@viewJadwaldokter');
Route::post('admin/jadwaldokter/{id}', 'adminController@simpanJadwaldokter');
Route::post('admin/akun/ubahpassword/{id}', 'adminController@ubahpassword');

Route::get('pasien', 'pasienController@viewPasien');

Route::group(['prefix' => 'dokter'], function () {
    Route::get('/', 'dokterController@viewDokter');
    Route::get('lihat','dokterController@lihatPemeriksaan');
    Route::get('lihat/{id}','dokterController@detailPemeriksaan');
    Route::get('buat/{id}', 'dokterController@buatPemeriksaan');
    Route::post('simpan/{id}', 'dokterController@simpanPemeriksaan');
});

Route::get('login', 'loginController@viewLogin');
Route::post('login', 'loginController@postLogin');
Route::get('logoutdokter', 'dokterController@logoutDokter');
Route::get('logoutadmin', 'adminController@logoutAdmin');
Route::get('logoutpasien', 'pasienController@logoutPasien');

