<?php

namespace App\Http\Livewire\Admin;

// use App\Http\Livewire\VMTPage;
use App\Models\Blog;
use App\Models\IdentitasSekolah;
use Livewire\Component;

class VMTPageAdmin extends Component
{
    // public VMTPage $vmt;

    public $title, $content, $id_blog, $tev, $tem, $tedt;
    // public $vmt;
    // public $tema = $this->vmt->tev;
    // public $tedta = $this->vmt->tev;
    // public $togglePage = true;
    // public $isUpdate = 0;
    // public $tagss = $tag;
    // public $post = \App\Model\Blog::class;

    // public function rules()
    // {
    //     return [

    //     ];
    // }

    public function mount($idvmt)
    {
        if ($idvmt == 'visi') {
            $this->tev = true;
        } else if ($idvmt == 'misi') {
            $this->tem = true;
        } else if ($idvmt == 'tujuan') {
            $this->tedt = true;
        }
    }

    public function create()
    {
        // dd(request('blog-trixFields'));
        // if (request('blog-trixFields') != null) {
        //     dd("GAK");
        // Blog::create([
        //     'tag' => request('tag'),
        //     'title' => request('title'),
        //     'blog-trixFields' => request('blog-trixFields'),
        //     'attachment-blog-trixFields' => request('attachment-blog-trixFields')
        // ]);
        // } else {
        //     dd("null");
        // }
        // // return redirect()->route('/');
        // session()->flash('msg', 'Blog successfully added.');
        // return back()->withInput()->to();
        return redirect()->route('vmt');
    }

    public function reloadPage()
    {
        dd("reloaded");
        // return redirect()->to('/profil/visiMisiTujuan');
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
        $valData = $this->validate([
            'tag' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);

        Blog::find($this->id_blog)->update($valData);
        session()->flash('msg', 'Blog successfully UPDATED.');
        $this->reloadPage();
    }

    public function findID()
    {
        if ($this->id_blog != null) {
            return Blog::select('*')->where('id', $this->id_blog)->get();
        } else {
            return null;
        }
    }

    public function loadData($id, $tags)
    {
        $this->id_blog = $id;
        $load = Blog::find($id);
        $this->title = $load->title;
        $this->content = $load->content;
        // dd($load);
        $this->toggleEd($tags);
    }

    public function toggleEd($tags)
    {
        // if ($isUp == 1) {
        //     $this->isUpdate = 1;
        // }

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

        // return view('livewire.admin.vmt-form', [
        //     'data' => $this->read(),
        //     'dataV' => $this->readBlog(1),
        //     'dataM' => $this->readBlog(2),
        //     'dataT' => $this->readBlog(3),
        //     // 'findID' => $this->findID(),
        // ])->layout('layouts.landingpage', [
        //     'data' => $this->read(),
        // ]);

        // $this->togglePage = true;
        // $this->renderForm();
    }

    // public function renderForm()
    // {
    //     return view('livewire.admin.vmt-form', [
    //         'data' => $this->read(),
    //         'dataV' => $this->readBlog(1),
    //         'dataM' => $this->readBlog(2),
    //         'dataT' => $this->readBlog(3),
    //         // 'findID' => $this->findID(),
    //     ])->layout('layouts.landingpage', [
    //         'data' => $this->read(),
    //     ]);
    // }

    public function render()
    {
        return view('livewire.admin.v-m-t-page-admin', [
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
