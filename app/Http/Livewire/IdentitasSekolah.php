<?php

namespace App\Http\Livewire;

use Livewire\Component;

class IdentitasSekolah extends Component
{

    public $modalIdentitas = false;

    public $nama;
    public $nis;
    public $alamat;
    public $kab;
    public $provinsi;
    public $negara;
    public $email;
    public $web;
    public $telp;
    public $pos;

    /**
     * show Edit Identitas Modal
     *
     * @return void
     */
    public function showEditIdentitasModal()
    {
        $this->modalIdentitas = true;
    }

    /**
     * viewnya
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.profil.identitas-sekolah')->layout('layouts.landingpage');
    }
}
