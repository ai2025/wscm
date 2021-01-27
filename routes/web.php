<?php

use App\Http\Livewire\Admin\VMTPageAdmin;
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
Route::get('/profil/visiMisiTujuan', VMTPage::class)->name('showVMTPage');
// CRUD VMT
Route::post('/profil/visiMisiTujuan', [VMTPage::class, 'create']);
Route::patch('/profil/visiMisiTujuan/{id}', [VMTPage::class, 'update']);

Route::get('/profil/identitasSekolah', IdentitasSekolahs::class);

Route::get('/profil/strukturOrg', StrukturOrganisasi::class)->name('showSOPage');
// CRUD STRUKTUR ORG
Route::post('/profil/strukturOrg', [StrukturOrganisasi::class, 'create']);
Route::patch('/profil/strukturOrg/{id}', [StrukturOrganisasi::class, 'update']);

//JURUSAN
Route::get('/paketKeahlian/agbsnsTani', Pertanian::class)->name('showTaniPage');
// CRUD Tani
Route::post('/paketKeahlian/agbsnsTani', [Pertanian::class, 'create']);
Route::patch('/paketKeahlian/agbsnsTani/{id}', [Pertanian::class, 'update']);

Route::get('/paketKeahlian/agbsnsIkan', Perikanan::class)->name('showIkanPage');
// CRUD Perikanan
Route::post('/paketKeahlian/agbsnsIkan', [Perikanan::class, 'create']);
Route::patch('/paketKeahlian/agbsnsIkan/{id}', [Perikanan::class, 'update']);

// BKK
Route::get('/bkk/tntgBKK', TentangBKK::class)->name('showTbkkPage');
// CRUD Tentang BKK
Route::post('/bkk/tntgBKK', [TentangBKK::class, 'create']);
Route::patch('/bkk/tntgBKK/{id}', [TentangBKK::class, 'update']);
// Organisasi BKK
Route::get('/bkk/orgnssBKK', OrganisasiBkk::class)->name('showSObkkPage');
// CRUD Organisasi BKK
Route::post('/bkk/orgnssBKK', [OrganisasiBkk::class, 'create']);
Route::patch('/bkk/orgnssBKK/{id}', [OrganisasiBkk::class, 'update']);
Route::get('/bkk/inputDataAlumni', InputDataAlumni::class);

// Kurikulum
Route::get('/kurikulum/tntgKrklm', TentangKurikulum::class)->name('showTkurikulumPage');
// CRUD Tentang Kurikulum
Route::post('/kurikulum/tntgKrklm', [TentangKurikulum::class, 'create']);
Route::patch('/kurikulum/tntgKrklm/{id}', [TentangKurikulum::class, 'update']);
// STRUKTUR KURIKULUM
Route::get('/kurikulum/organisasi', OrganisasiKurikulum::class)->name('showSOkurikulumPage');
// CRUD STRUKTUR Organisasi KURIKULUM
Route::post('/kurikulum/organisasi', [OrganisasiKurikulum::class, 'create']);
Route::patch('/kurikulum/organisasi/{id}', [OrganisasiKurikulum::class, 'update']);
// PEMBELAJARAN
Route::get('/kurikulum/pmbljaran', Pembelajaran::class)->name('showPembelajaranPage');
// CRUD PEMBELAJARAN
Route::post('/kurikulum/pmbljaran', [Pembelajaran::class, 'create']);
Route::patch('/kurikulum/pmbljaran/{id}', [Pembelajaran::class, 'update']);
// KALENDER PEMBELAJARAN
Route::get('/kurikulum/klndrPmbljaran', KalenderPembelajaran::class)->name('showKalenderPage');
// CRUD KALENDER PEMBELAJARAN
Route::post('/kurikulum/klndrPmbljaran', [KalenderPembelajaran::class, 'create']);
Route::patch('/kurikulum/klndrPmbljaran/{id}', [KalenderPembelajaran::class, 'update']);
// PENILAIAN
Route::get('/kurikulum/penilaian', Penilaian::class)->name('showPenilaianPage');
// CRUD KALENDER PEMBELAJARAN
Route::post('/kurikulum/penilaian', [Penilaian::class, 'create']);
Route::patch('/kurikulum/penilaian/{id}', [Penilaian::class, 'update']);
// AKREDITASI
Route::get('/kurikulum/akreditasi', Akreditasi::class)->name('showAkreditasiPage');
// CRUD AKREDITASI
Route::post('/kurikulum/akreditasi', [Akreditasi::class, 'create']);
Route::patch('/kurikulum/akreditasi/{id}', [Akreditasi::class, 'update']);

// TENTANG HUMAS
Route::get('/humas/tntgHum', TentangHumas::class)->name('showTHumasPage');
// CRUD TENTANG HUMAS
Route::post('/humas/tntgHum', [TentangHumas::class, 'create']);
Route::patch('/humas/tntgHum/{id}', [TentangHumas::class, 'update']);
// ORGANISASI HUMAS
Route::get('/humas/orgnssHum', OrganisasiHumas::class)->name('showSOHumasPage');
// CRUD ORGANISASI HUMAS
Route::post('/humas/orgnssHum', [OrganisasiHumas::class, 'create']);
Route::patch('/humas/orgnssHum/{id}', [OrganisasiHumas::class, 'update']);
//PROGRAM KERJA HUMAS
Route::get('/humas/prgrmkrjHum', ProgramKerjaHumas::class)->name('showPKHumasPage');
// CRUD PROGRAM KERJA HUMAS
Route::post('/humas/prgrmkrjHum', [ProgramKerjaHumas::class, 'create']);
Route::patch('/humas/prgrmkrjHum/{id}', [ProgramKerjaHumas::class, 'update']);
//pkl
Route::get('/humas/pkl', Pkl::class);

// Kesiswaan
Route::get('/kesiswaan/tntgSis', TentangKesiswaan::class)->name('showTSiswaPage');
// CRUD Kesiswaan
Route::post('/kesiswaan/tntgSis', [TentangKesiswaan::class, 'create']);
Route::patch('/kesiswaan/tntgSis/{id}', [TentangKesiswaan::class, 'update']);
// ORGANISASI KESISWAAN
Route::get('/kesiswaan/orgnssSis', OrganisasiKesiswaan::class)->name('showSOSiswaPage');
// CRUD ORGANISASI KESISWAAN
Route::post('/kesiswaan/orgnssSis', [OrganisasiKesiswaan::class, 'create']);
Route::patch('/kesiswaan/orgnssSis/{id}', [OrganisasiKesiswaan::class, 'update']);
// PROGRAM KERJA SISWA
Route::get('/kesiswaan/prgrmkrjSis', ProgramKerjaKesiswaan::class)->name('showPKSiswaPage');
// CRUD ORGANISASI KESISWAAN
Route::post('/kesiswaan/prgrmkrjSis', [ProgramKerjaKesiswaan::class, 'create']);
Route::patch('/kesiswaan/prgrmkrjSis/{id}', [ProgramKerjaKesiswaan::class, 'update']);
//EKSTRAKURIKULER
Route::get('/kesiswaan/ekskul', Ekstrakurikuler::class)->name('showEkskulPage');
// CRUD EKSTRAKURIKULER
Route::post('/kesiswaan/ekskul', [Ekstrakurikuler::class, 'create']);
Route::patch('/kesiswaan/ekskul/{id}', [Ekstrakurikuler::class, 'update']);
// KEGIATAN OSIS
Route::get('/kesiswaan/kegOsis', KegiatanOsis::class)->name('showOsisPage');
// CRUD KEGIATAN OSIS
Route::post('/kesiswaan/kegOsis', [KegiatanOsis::class, 'create']);
Route::patch('/kesiswaan/kegOsis/{id}', [KegiatanOsis::class, 'update']);
//PRAMUKA
Route::get('/kesiswaan/kegPramuka', KegiatanPramuka::class)->name('showPramukaPage');
// CRUD KEGIATAN PRAMUKA
Route::post('/kesiswaan/kegPramuka', [KegiatanPramuka::class, 'create']);
Route::patch('/kesiswaan/kegPramuka/{id}', [KegiatanPramuka::class, 'update']);
// PRESTASI
Route::get('/kesiswaan/prestasi', Prestasi::class)->name('showPrestasiPage');
// CRUD PRESTASI
Route::post('/kesiswaan/prestasi', [Prestasi::class, 'create']);
Route::patch('/kesiswaan/prestasi/{id}', [Prestasi::class, 'update']);

// SarPras
Route::get('/sarpras/tntgSarpras', TentangSarPras::class)->name('showTSarprasPage');
// CRUD SarPras
Route::post('/sarpras/tntgSarpras', [TentangSarPras::class, 'create']);
Route::patch('/sarpras/tntgSarpras/{id}', [TentangSarPras::class, 'update']);
// ORGANISASI SARPRAS
Route::get('/sarpras/orgnssSarpras', OrganisasiSarPras::class)->name('showSOSarprasPage');
// CRUD ORGANISASI SARPRAS
Route::post('/sarpras/orgnssSarpras', [OrganisasiSarPras::class, 'create']);
Route::patch('/sarpras/orgnssSarpras/{id}', [OrganisasiSarPras::class, 'update']);
//PROGRAM KERJA SARPRAS
Route::get('/sarpras/prgrmkrjSarpras', ProgramKerjaSarPras::class)->name('showPKSarprasPage');
// CRUD ORGANISASI SARPRAS
Route::post('/sarpras/prgrmkrjSarpras', [ProgramKerjaSarPras::class, 'create']);
Route::patch('/sarpras/prgrmkrjSarpras/{id}', [ProgramKerjaSarPras::class, 'update']);
//FASILITAS SEKOLAH
Route::get('/sarpras/fasSekolah', FasilitasSekolah::class)->name('showFasilitasPage');
// CRUD FASILITAS SEKOLAH
Route::post('/sarpras/fasSekolah', [ProgramKerjaSarPras::class, 'create']);
Route::patch('/sarpras/fasSekolah/{id}', [ProgramKerjaSarPras::class, 'update']);

// Perpus
Route::get('/perpus/tntgPerpus', TentangPerpustakaan::class);
Route::get('/perpus/orgnssPerpus', OrganisasiPerpustakaan::class);
// Informasi
Route::get('/informasi', Informasi::class);
//PPDB
Route::get('/ppdb', Ppdb::class);
// Kontak
Route::get('/kontak', Kontak::class);


// routes
Route::get('routes', function () {
    $routeCollection = Route::getRoutes();

    echo "<table style='width:100%'>";
    echo "<tr>";
    echo "<td width='10%'><h4>HTTP Method</h4></td>";
    echo "<td width='10%'><h4>Route</h4></td>";
    echo "<td width='10%'><h4>Name</h4></td>";
    echo "<td width='70%'><h4>Corresponding Action</h4></td>";
    echo "</tr>";
    foreach ($routeCollection as $value) {
        echo "<tr>";
        echo "<td>" . $value->methods()[0] . "</td>";
        echo "<td>" . $value->uri() . "</td>";
        echo "<td>" . $value->getName() . "</td>";
        echo "<td>" . $value->getActionName() . "</td>";
        echo "</tr>";
    }
    echo "</table>";
});
