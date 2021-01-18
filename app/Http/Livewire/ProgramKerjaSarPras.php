<?php

namespace App\Http\Livewire;
use App\Models\IdentitasSekolah;
use Livewire\Component;

class ProgramKerjaSarPras extends Component
{
    public $nama, $nis, $alamat, $kab, $provinsi, $negara, $email, $web, $telp, $pos, $id_identitas;

    public function read()
    {
        return IdentitasSekolah::orderBy('created_at', 'DESC')->get();
    }

    public function render()
    {
        return view('livewire.sarpras.program-kerja-sar-pras', [
            'data'=> $this->read(),
        ])->layout('layouts.landingpage', [
            'data'=> $this->read(),
        ]);
    }
}
