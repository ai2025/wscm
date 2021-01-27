<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use App\Models\IdentitasSekolah;
use App\Models\ImgCarIdenSekolah;
use Te7aHoudini\LaravelTrix\Models\TrixAttachment;
use Livewire\Component;

class OrganisasiPerpustakaan extends Component
{
    public $id_blog;
    public $togglePage = false;

    public function create()
    {
        if ($this->readBlog()->count()) {
            session()->flash('msgWar', 'Blog Organisasi Perpustakaan sudah ada, mohon lakukan update.');
            return redirect()->route('showOrgPerpusPage');
        } else {
            $rq = request('blog-trixFields');
            foreach ($rq as $key => $value) {
                // dd($key . ' ' . $value);
                if (!empty($value)) {
                    // dd("NOT EMPTY");
                    Blog::create([
                        'tag' => request('tag'),
                        'title' => request('title'),
                        'blog-trixFields' => request('blog-trixFields'),
                        'attachment-blog-trixFields' => request('attachment-blog-trixFields'),
                    ]);
                    session()->flash('msg', 'Blog successfully added.');
                    return redirect()->route('showOrgPerpusPage');
                } else {
                    // dd("ELSE EMPTY");
                    session()->flash('msgErr', 'Konten tidak boleh KOSONG.');
                    return redirect()->route('showOrgPerpusPage');
                }
            }
        }
    }

    public function read()
    {
        return IdentitasSekolah::orderBy('created_at', 'DESC')->get();
    }

    public function readBlog()
    {
        return Blog::select('*')->where('tag', 'org_perpus')->get();
    }

    public function readHero($tag)
    {
        return ImgCarIdenSekolah::select("*")->where('kategori', $tag)->get();
        // $this->resetPage();
    }

    public function update()
    {
        Blog::find(intval(request()->route('id')))->update([
            'tag' => request('tag'),
            'title' => request('title'),
            'blog-trixFields' => request('blog-trixFields'),
            'attachment-blog-trixFields' => request('attachment-blog-trixFields'),
        ]);
        session()->flash('msg', 'Blog successfully updated.');
        return redirect()->route('showOrgPerpusPage');
    }

    public function delete_pending()
    {
        // dd(request('blog-trixFields'));
        $trad = TrixAttachment::where('is_pending', 1)->get();
        if (count($trad) > 0) {
            // dd("NULL");
            $this->t_content_img = $trad[0]['attachment'];
            unlink('storage/' . $this->t_content_img);
            TrixAttachment::where('is_pending', 1)->delete();
        }
        session()->flash('msgWar', 'Anda telah membatalkan aksi.');
        return redirect()->route('showOrgPerpusPage');
    }

    public function loadID($id)
    {
        $this->id_blog = $id;
        $this->togglePage = true;
    }

    // public function togglePage()
    // {
    //     # code...
    // }


    public function render()
    {
        return view('livewire.perpus.organisasi-perpustakaan', [
            'data' => $this->read(),
            'blog' => $this->readBlog(),
            'dataHero' => $this->readHero('header'),
        ])->layout('layouts.landingpage', [
            'data' => $this->read(),
        ]);
    }
}
