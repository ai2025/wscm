<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\IdentitasSekolah;

class OrganisasiBkk extends Component
{
    public $nama, $nis, $alamat, $kab, $provinsi, $negara, $email, $web, $telp, $pos, $id_identitas;

    public function read()
    {
        return IdentitasSekolah::orderBy('created_at', 'DESC')->get();
    }

    public function render()
    {
        return view('livewire.bkk.organisasi-bkk', [
            'data'=> $this->read(),
        ])->layout('layouts.landingpage', [
            'data'=> $this->read(),
        ]);
    }
}
