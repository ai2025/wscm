<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use App\Models\IdentitasSekolah;
use Livewire\Component;

class VMTPage extends Component
{
    public $tag, $title, $content;
    public $tev = false;
    public $tem = false;
    public $tedt = false;
    public $togglePage = false;

    public function simpan($tags)
    {
        $this->toggleBack($tags);
    }

    public function read()
    {
        return IdentitasSekolah::select('*')->get();
    }

    public function readBlog()
    {
        return Blog::select('*')->whereIn('tag', ['visi', 'misi', 'tujuan'])->get();
    }

    public function toggleEd($tags)
    {
        if ($tags == 1) {
            $this->tev = true;
        } else if ($tags == 2) {
            $this->tem = true;
        } else if ($tags == 3) {
            $this->tedt = true;
        }

        $this->togglePage = true;
    }

    public function toggleBack($tags)
    {
        if ($tags == 1) {
            $this->tev = false;
        }
        if ($tags == 2) {
            $this->tem = false;
        }
        if ($tags == 3) {
            $this->tedt = false;
        }

        $this->togglePage = false;
    }

    public function render()
    {
        return view('livewire.profil.v-m-t-page', [
            'data' => $this->read(),
            'dataVMT' => $this->readBlog(),
        ])->layout('layouts.landingpage', [
            'data' => $this->read(),
        ]);
    }
}
