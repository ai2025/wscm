<?php

use App\Http\Livewire\IdentitasSekolahs;
use App\Http\Livewire\Akreditasi;
use App\Http\Livewire\Ekstrakurikuler;
use App\Http\Livewire\FasilitasSekolah;
use App\Http\Livewire\Informasi;
use App\Http\Livewire\InputDataAlumni;
use App\Http\Livewire\KalenderPembelajaran;
use App\Http\Livewire\KegiatanOsis;
use App\Http\Livewire\KegiatanPramuka;
use App\Http\Livewire\Kontak;
use App\Http\Livewire\Landingpage;
use App\Http\Livewire\OrganisasiBkk;
use App\Http\Livewire\OrganisasiHumas;
use App\Http\Livewire\OrganisasiKesiswaan;
use App\Http\Livewire\OrganisasiKurikulum;
use App\Http\Livewire\OrganisasiPerpustakaan;
use App\Http\Livewire\OrganisasiSarPras;
use App\Http\Livewire\Pembelajaran;
use App\Http\Livewire\Penilaian;
use App\Http\Livewire\Perikanan;
use App\Http\Livewire\Pertanian;
use App\Http\Livewire\Pkl;
use App\Http\Livewire\Ppdb;
use App\Http\Livewire\Prestasi;
use App\Http\Livewire\ProgramKerjaHumas;
use App\Http\Livewire\ProgramKerjaKesiswaan;
use App\Http\Livewire\ProgramKerjaSarPras;
use App\Http\Livewire\StrukturOrganisasi;
use App\Http\Livewire\TentangBKK;
use App\Http\Livewire\TentangHumas;
use App\Http\Livewire\TentangKesiswaan;
use App\Http\Livewire\TentangKurikulum;
use App\Http\Livewire\TentangPerpustakaan;
use App\Http\Livewire\TentangSarPras;
use App\Http\Livewire\VMTPage;
use App\Models\Page;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/', Landingpage::class);

// Route::get('/auth/login', function() { 
//     return view('auth.login'); 
// });


Route::group(['middleware' => [
    'auth:sanctum',
    'verified'
]], function () {

    Route::get('/', Landingpage::class);

    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
});

Route::get('/', Landingpage::class);
//PROFIL
Route::get('/profil/visiMisiTujuan', VMTPage::class);
Route::get('/profil/identitasSekolah', IdentitasSekolahs::class);
Route::get('/profil/strukturOrg', StrukturOrganisasi::class);
//JURUSAN
Route::get('/paketKeahlian/agbsnsTani', Pertanian::class);
Route::get('/paketKeahlian/agbsnsIkan', Perikanan::class);
// BKK
Route::get('/bkk/tntgBKK', TentangBKK::class);
Route::get('/bkk/orgnssBKK', OrganisasiBkk::class);
Route::get('/bkk/inputDataAlumni', InputDataAlumni::class);
// Kurikulum
Route::get('/kurikulum/tntgKrklm', TentangKurikulum::class);
Route::get('/kurikulum/organisasi', OrganisasiKurikulum::class);
Route::get('/kurikulum/pmbljaran', Pembelajaran::class);
Route::get('/kurikulum/klndrPmbljaran', KalenderPembelajaran::class);
Route::get('/kurikulum/penilaian', Penilaian::class);
Route::get('/kurikulum/akreditasi', Akreditasi::class);
// Humas
Route::get('/humas/tntgHum', TentangHumas::class);
Route::get('/humas/orgnssHum', OrganisasiHumas::class);
Route::get('/humas/prgrmkrjHum', ProgramKerjaHumas::class);
Route::get('/humas/pkl', Pkl::class);
// Kesiswaan
Route::get('/kesiswaan/tntgSis', TentangKesiswaan::class);
Route::get('/kesiswaan/orgnssSis', OrganisasiKesiswaan::class);
Route::get('/kesiswaan/prgrmkrjSis', ProgramKerjaKesiswaan::class);
Route::get('/kesiswaan/ekskul', Ekstrakurikuler::class);
Route::get('/kesiswaan/kegOsis', KegiatanOsis::class);
Route::get('/kesiswaan/kegPramuka', KegiatanPramuka::class);
Route::get('/kesiswaan/prestasi', Prestasi::class);
// SarPras
Route::get('/sarpras/tntgSarpras', TentangSarPras::class);
Route::get('/sarpras/orgnssSarpras', OrganisasiSarPras::class);
Route::get('/sarpras/prgrmkrjSarpras', ProgramKerjaSarPras::class);
Route::get('/sarpras/fasSekolah', FasilitasSekolah::class);
// Perpus
Route::get('/perpus/tntgPerpus', TentangPerpustakaan::class);
Route::get('/perpus/orgnssPerpus', OrganisasiPerpustakaan::class);
// Informasi
Route::get('/informasi', Informasi::class);
//PPDB
Route::get('/ppdb', Ppdb::class);
// Kontak
Route::get('/kontak', Kontak::class);
