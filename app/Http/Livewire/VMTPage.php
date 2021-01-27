<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use App\Models\IdentitasSekolah;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithFileUploads;
use Te7aHoudini\LaravelTrix\Models\TrixAttachment;

class VMTPage extends Component
{
    use WithFileUploads;

    public $title, $id_blog, $temporary_id, $t_content_img;
    public $tev = false;
    public $tem = false;
    public $tedt = false;
    public $togglePage = false;
    public $tag = '';

    public function create()
    {
        $tags = request('tag');
        $d = Blog::find($tags);
        if ($d > 0) {
            session()->flash('msgWar', 'Blog ' . $tags . ' sudah ada, mohon lakukan update.');
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
                    return redirect()->route('showVMTPage');
                } else {
                    // dd("ELSE EMPTY");
                    session()->flash('msgErr', 'Konten tidak boleh KOSONG.');
                    return redirect()->route('showVMTPage');
                }
            }
        }
    }

    public function read()
    {
        return IdentitasSekolah::select('*')->get();
    }

    public function readBlog($tags)
    {
        if ($tags == 1) {
            return Blog::select('*')->where('tag', 'visi')->get();
        } else if ($tags == 2) {
            return Blog::select('*')->where('tag', 'misi')->get();
        } else if ($tags == 3) {
            return Blog::select('*')->where('tag', 'tujuan')->get();
        }
    }

    public function update()
    {
        // $reqImg = request('attachment-blog-trixFields');
        // dd(trim($reqImg['content'], '[""]'));
        // // if ($reqImg) {
        // //     # code...
        // // } else {
        // //     # code...
        // // }

        Blog::find(intval(request()->route('id')))->update([
            'tag' => request('tag'),
            'title' => request('title'),
            'blog-trixFields' => request('blog-trixFields'),
            'attachment-blog-trixFields' => request('attachment-blog-trixFields'),
        ]);
        session()->flash('msg', 'Blog successfully updated.');
        return redirect()->route('showVMTPage');
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
        return redirect()->route('showVMTPage');
    }

    public function loadData($id, $tags)
    {
        $this->id_blog = $id;
        $load = Blog::find($id);
        $this->title = $load->title;
        $this->temporary_id = $load->id;
        // dd($load);
        $this->toggleEd($tags);
    }

    public function toggleEd($tags)
    {
        if ($tags == 1) {
            $this->tag = "visi";
            $this->tev = true;
        } else if ($tags == 2) {
            $this->tag = "misi";
            $this->tem = true;
        } else if ($tags == 3) {
            $this->tag = "tujuan";
            $this->tedt = true;
        }

        $this->togglePage = true;
        // $this->renderForm();
    }

    public function render()
    {
        return view('livewire.profil.v-m-t-page', [
            'data' => $this->read(),
            'dataV' => $this->readBlog(1),
            'dataM' => $this->readBlog(2),
            'dataT' => $this->readBlog(3),
            // 'findID' => $this->findID(),
        ])->layout('layouts.landingpage', [
            'data' => $this->read(),
        ]);
    }
}
