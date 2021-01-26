<?php

namespace App\Http\Livewire;

use App\Models\IdentitasSekolah;
use App\Models\ImgCarIdenSekolah;

use Livewire\Component;

class Kontak extends Component
{
    public function readHero($tag)
    {
        return ImgCarIdenSekolah::select("*")->where('kategori', $tag)->get();
        // $this->resetPage();
    }

    public function read()
    {
        return IdentitasSekolah::orderBy('created_at', 'DESC')->get();
    }

    public function render()
    {
        return view('livewire.kontak', [
            'data' => $this->read(),
            'dataHero' => $this->readHero('header'),
        ])->layout('layouts.landingpage', [
            'data' => $this->read(),
        ]);
    }
}
