<?php

namespace App\Http\Livewire;

// use App\Model\Blog as ModelBlog;
use App\Models\Blog;
use App\Models\IdentitasSekolah;
use Livewire\Component;
// use Livewire\Request;

class VMTPage extends Component
{
    public $title, $id_blog, $temporary_id;
    public $tev = false;
    public $tem = false;
    public $tedt = false;
    public $togglePage = false;
    // public $isUpdate = 0;
    public $tag = '';

    // public function mount($id_bg)
    // {
    //     $this->id_blog = $id_bg;
    // }

    public function create()
    {
        // $this->validate([
        //     'tag' => 'required',
        //     'title' => 'required',
        //     'content' => 'required',
        //     'blog-trixFields' => 'required',
        // ]);
        // if (!empty(request('blog-trixFields'))) {
        //     dd(request()->all());
        // } else {
        //     dd("NO");
        // }

        // if (request('blog-trixFields') != null) {
        //     dd("GAK");
        Blog::create([
            'tag' => request('tag'),
            'title' => request('title'),
            'blog-trixFields' => request('blog-trixFields'),
            'attachment-blog-trixFields' => request('attachment-blog-trixFields')
        ]);
        // } else {
        //     dd("null");
        // }
        session()->flash('msg', 'Blog successfully added.');
        return redirect()->route('showVMTPage');

        // return redirect()->to('/profil/visiMisiTujuan')->send();
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
        Blog::find(intval(request()->route('id')))->update([
            'tag' => request('tag'),
            'title' => request('title'),
            'blog-trixFields' => request('blog-trixFields'),
            'attachment-blog-trixFields' => request('attachment-blog-trixFields')
        ]);
        session()->flash('msg', 'Blog successfully updated.');
        return redirect()->route('showVMTPage');
    }

    // public function findID()
    // {
    //     if ($this->id_blog != null) {
    //         return Blog::select('*')->where('id', $this->id_blog)->get();
    //     } else {
    //         return null;
    //     }
    // }

    public function loadData($id, $tags)
    {
        $this->id_blog = $id;
        $load = Blog::find($id);
        $this->title = $load->title;
        $this->content = $load->content;
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
