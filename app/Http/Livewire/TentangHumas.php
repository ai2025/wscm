<?php

namespace App\Http\Livewire;
use App\Models\IdentitasSekolah;
use Livewire\Component;
use App\Models\Blog;
use Te7aHoudini\LaravelTrix\Models\TrixAttachment;

class TentangHumas extends Component
{
    public $nama, $nis, $alamat, $kab, $provinsi, $negara, $email, $web, $telp, $pos, $id_identitas;
    public $id_blog;
    public $togglePage = false;

    public function create()
    {
        if ($this->readBlog()->count()) {
            session()->flash('msgWar', 'Blog Tentang Humas sudah ada, mohon lakukan update.');
            return redirect()->route('showTHumasPage');
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
                    return redirect()->route('showTHumasPage');
                } else {
                    // dd("ELSE EMPTY");
                    session()->flash('msgErr', 'Konten tidak boleh KOSONG.');
                    return redirect()->route('showTHumasPage');
                }
            }
        }
    }

    public function readBlog()
    {
        return Blog::select('*')->where('tag', 'tentang_humas')->get();
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
        return redirect()->route('showTHumasPage');
    }

    public function loadID($id)
    {
        $this->id_blog = $id;
        $this->togglePage = true;
    }

    public function delete_pending()
    {
        // dd(request('blog-trixFields'));
        $trad = TrixAttachment::where('is_pending', 1)->get();
        $this->t_content_img = $trad[0]['attachment'];
        unlink('storage/' . $this->t_content_img);
        TrixAttachment::where('is_pending', 1)->delete();
        session()->flash('msgWar', 'Anda telah membatalkan aksi.');
        return redirect()->route('showTHumasPage');
    }

    public function read()
    {
        return IdentitasSekolah::orderBy('created_at', 'DESC')->get();
    }

    public function render()
    {
        return view('livewire.humas.tentang-humas', [
            'data'=> $this->read(),
            'blog' => $this->readBlog(),
        ])->layout('layouts.landingpage', [
            'data'=> $this->read(),
        ]);
    }
}
