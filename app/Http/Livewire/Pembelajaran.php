<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Pembelajaran extends Component
{
    public function render()
    {
        return view('livewire.kurikulum.pembelajaran')->layout('layouts.landingpage');
    }
}
