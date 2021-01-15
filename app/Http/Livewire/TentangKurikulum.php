<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TentangKurikulum extends Component
{
    public function render()
    {
        return view('livewire.kurikulum.tentang-kurikulum')->layout('layouts.landingpage');
    }
}
