<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TentangHumas extends Component
{
    public function render()
    {
        return view('livewire.humas.tentang-humas')->layout('layouts.landingpage');
    }
}
