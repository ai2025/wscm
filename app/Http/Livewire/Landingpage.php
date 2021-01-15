<?php

namespace App\Http\Livewire;
use App\Models\IdentitasSekolah;
use Livewire\Component;

class Landingpage extends Component
{
    public $modalIdentitas = false;

    public $nama, $nis, $alamat, $kab, $provinsi, $negara, $email, $web, $telp, $pos, $id_identitas;

    public function rules()
    {
        return [
            'nama' => ['required', 'min:5'],
            'nis' => ['required', 'min:6', 'numeric'],
            'alamat' => ['required', 'min:5'],
            'kab' => ['required', 'min:3'],
            'provinsi' => ['required', 'min:3'],
            'negara' => ['required', 'min:3'],
            'email' => ['required', 'min:5', 'email'],
            'web' => ['required', 'min:5'],
            'telp' => ['required', 'min:5', 'numeric'],
            'pos' => ['required', 'min:4', 'numeric'],
        ];
    }

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
            'telp' => $this->telp,
            'pos' => $this->pos,
        ];
    }

    public function read()
    {
        return IdentitasSekolah::orderBy('created_at', 'DESC')->get();
        // $this->resetPage();
    }

    /**
     * show Edit Identitas Modal
     *
     * @return void
     */

    public function loadData($id)
    {
        $this->id_identitas = $id;
        $data = IdentitasSekolah::find($id)->first();
        $this->nama = $data->nama;
        $this->nis = $data->nis;
        $this->alamat = $data->alamat;
        $this->kab = $data->kab;
        $this->provinsi = $data->provinsi;
        $this->negara = $data->negara;
        $this->email = $data->email;
        $this->web = $data->web;
        $this->telp = $data->telp;
        $this->pos = $data->pos;
    }

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
        'pos' => 'Kode POS',
    ];

    /**
     * viewnya
     *
     * @return void
     */
    // 'data' => $this->read(),
    public function render()
    {
        return view('livewire.landingpage' , [
            'data'=> $this->read(),
         ])->layout('layouts.landingpage', [
            'data'=> $this->read(),
         ]);
    }
}
