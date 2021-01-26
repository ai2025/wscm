<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use App\Models\IdentitasSekolah;
use Te7aHoudini\LaravelTrix\Models\TrixAttachment;
use Livewire\Component;

class StrukturOrganisasi extends Component
{
    public $id_blog;
    public $togglePage = false;

    public function create()
    {
        if ($this->readBlog()->count()) {
            session()->flash('msgWar', 'Blog Struktur Organisasi sudah ada, mohon lakukan update.');
            return redirect()->route('showVMTPage');
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
                    return redirect()->route('showSOPage');
                } else {
                    // dd("ELSE EMPTY");
                    session()->flash('msgErr', 'Konten tidak boleh KOSONG.');
                    return redirect()->route('showSOPage');
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
        return Blog::select('*')->where('tag', 'struktur_organisasi')->get();
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
        return redirect()->route('showSOPage');
    }

    public function delete_pending()
    {
        // dd(request('blog-trixFields'));
        $trad = TrixAttachment::where('is_pending', 1)->get();
        $this->t_content_img = $trad[0]['attachment'];
        unlink('storage/' . $this->t_content_img);
        TrixAttachment::where('is_pending', 1)->delete();
        session()->flash('msgWar', 'Anda telah membatalkan aksi.');
        return redirect()->route('showSOPage');
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
        return view('livewire.profil.struktur-organisasi', [
            'data' => $this->read(),
            'blog' => $this->readBlog(),
        ])->layout('layouts.landingpage', [
            'data' => $this->read(),
        ]);
    }
}
