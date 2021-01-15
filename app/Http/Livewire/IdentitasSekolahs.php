<?php

namespace App\Http\Livewire;

use Illuminate\Validation\Rule;
use Livewire\Component;
use App\Models\IdentitasSekolah;
// use Livewire\WithPagination;

class IdentitasSekolahs extends Component
{

    // use WithPagination;

    public $modalIdentitas = false;

    public $nama, $nis, $alamat, $kab, $provinsi, $negara, $email, $web, $telp, $pos, $id_identitas;
    // public $ids;
    // public $statusUp = false;

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

    public function create()
    {
        $this->validate();
        IdentitasSekolah::create($this->modelData());
        $this->reset();
        return redirect()->to('/profil/identitasSekolah');
        session()->flash('msgUpdateIdentitas', 'Identitas Sekolah successfully added.');
    }

    public function read()
    {
        return IdentitasSekolah::orderBy('created_at', 'DESC')->get();
        // $this->resetPage();
    }

    public function update()
    {
        $this->validate();
        // dd($this->id_identitas);
        IdentitasSekolah::find($this->id_identitas)->update($this->modelData());
        session()->flash('msgUpdateIdentitas', 'Identitas Sekolah successfully updated.');
        return redirect()->to('/profil/identitasSekolah');
        // $statusUp = true;
        // $this->statusUpdate();
    }

    // public function statusUpdate()
    // {
    //     return true;
    // }

    // public function updateIdentitas($id)
    // {
    // $this->validate();
    // dd("Updating.." + $id);
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
    // }

    /**
     * show Edit Identitas Modal
     *
     * @return void
     */
    // public function showEditIdentitasModal()
    // {
    //     $this->modalIdentitas = true;
    // }

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

    /**
     * viewnya
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.profil.identitas-sekolah', [
            'data' => $this->read(),
            // 'statusUp' => $this->statusUpdate(),
        ])->layout('layouts.landingpage');
    }
}
