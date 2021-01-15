<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TentangSarPras extends Component
{
    public function render()
    {
        return view('livewire.sarpras.tentang-sar-pras')->layout('layouts.landingpage');
    }
}
