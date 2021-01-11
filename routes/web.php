<?php

use App\Http\Livewire\IdentitasSekolah;
use App\Http\Livewire\Landingpage;
use App\Http\Livewire\VMTPage;
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
Route::get('/profil/visiMisiTujuan', VMTPage::class);
Route::get('/profil/identitasSekolah', IdentitasSekolah::class);
