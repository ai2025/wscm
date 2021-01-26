<?php

namespace App\Http\Livewire;

use App\Models\IdentitasSekolah;
use Livewire\Component;
use App\Models\ImgCarIdenSekolah;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Ppdb extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $nama, $nis, $alamat, $kab, $provinsi, $negara, $email, $web, $telp, $pos, $id_identitas;

    public function read()
    {
        return IdentitasSekolah::orderBy('created_at', 'DESC')->get();
    }

    public function render()
    {
        return view('livewire.ppdb', [
            'data' => $this->read(),
        ])->layout('layouts.landingpage', [
            'data' => $this->read(),
        ]);
    }
}
