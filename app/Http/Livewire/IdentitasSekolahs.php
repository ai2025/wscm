<?php

namespace App\Http\Livewire;

use Illuminate\Validation\Rule;
use Livewire\Component;
use App\Models\IdentitasSekolah;

class IdentitasSekolahs extends Component
{

    public $modalIdentitas = false;

    public $nama, $nis, $alamat, $kab, $provinsi, $negara, $email, $web, $telp, $pos;
    public $ids;
    // public $idform;

    public $judul = [
        'nama' => 'Nama Sekolah',
        'nis' => 'NIS',
        'alamat' => 'Alamat',
        'kab' => 'Kabupaten',
        'provinsi' => 'Provinsi',
        'negara' => 'Negara',
        'email' => 'Email',
        'web' => 'Website',
        'telp' => 'Telepon',
        'pos' => 'POS',
    ];

    public function index()
    {
        # code...
    }

    // public $judul = [
    //     ['nama', 'Nama Sekolah', $ids->nama],
    //     ['nis', 'NIS', $ids->nis],
    //     ['alamat', 'Alamat', $ids->alamat],
    //     ['kab', 'Kabupaten', $ids->kab],
    //     ['provinsi', 'Provinsi', $ids->provinsi],
    //     ['negara', 'Negara', $ids->negara],
    //     ['email', 'Email', $ids->email],
    //     ['web', 'Website', $ids->web],
    //     ['telp', 'Telepon', $ids->telp],
    //     ['pos', 'POS', $ids->pos],
    // ];

    public function rules()
    {
        return [
            'nama' => 'required',
            'nis' => 'required',
            'alamat' => 'required',
            'kab' => 'required',
            'provinsi' => 'required',
            'negara' => 'required',
            'email' => 'required',
            'web' => 'required',
            'telp' => 'required',
            'pos' => 'required',
        ];
    }

    public function read()
    {
        return $this->ids = IdentitasSekolah::orderBy('created_at', 'DESC')->get();
    }

    public function updateIdentitas($id)
    {
        $this->validate();
        dd("Updating.." + $id);
        // $this->idform = $id;
        // $data = IdentitasSekolah::find($id);
        // $this->nama = $data->nama;
        // $this->nis = $data->nis;
        // $this->alamat = $data->alamat;
        // $this->kab = $data->kab;
        // $this->provinsi = $data->provinsi;
        // $this->negara = $data->negara;
        // $this->email = $data->email;
        // $this->web = $data->web;
        // $this->telp = $data->telp;
        // $this->pos = $data->pos;
    }

    /**
     * show Edit Identitas Modal
     *
     * @return void
     */
    // public function showEditIdentitasModal()
    // {
    //     $this->modalIdentitas = true;
    // }

    /**
     * pemetaan data untuk model
     *
     * @return void
     */
    public function modelData()
    {
        return [
            'nama' => $this->nama,
            'nis' => $this->nis,
            'alamat' => $this->alamat,
            'kab' => $this->kab,
            'provinsi' => $this->provinsi,
            'negara' => $this->negara,
            'email' => $this->email,
            'web' => $this->web,
            'telp' => $this->tel,
            'pos' => $this->pos,
        ];
    }

    /**
     * viewnya
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.profil.identitas-sekolah', [
            'data' => $this->read(),
        ])->layout('layouts.landingpage');
    }
}
