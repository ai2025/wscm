<?php

namespace App\Http\Livewire;

// use App\Model\Blog as ModelBlog;
use App\Models\Blog;
use App\Models\IdentitasSekolah;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithFileUploads;
// use Livewire\Request;
use Te7aHoudini\LaravelTrix\Models\TrixAttachment;

class VMTPage extends Component
{
    use WithFileUploads;

    public $title, $id_blog, $temporary_id, $content, $t_content_img;
    public $tev = false;
    public $tem = false;
    public $tedt = false;
    public $togglePage = false;
    // public $isUpdate = 0;
    public $tag = '';
    public $m = '';
    public $errorNotif = false;

    // public function mount($id_bg)
    // {
    //     $this->id_blog = $id_bg;
    // }



    public function create(Request $req)
    {
        $tags = request('tag');
        $d = Blog::find($tags);
        if ($d > 0) {
            session()->flash('msg', 'Blog ' . $tags . ' sudah ada, mohon lakukan update.');
            return redirect()->route('showVMTPage');
        } else {
            $rq = request('blog-trixFields');
            foreach ($rq as $key => $value) {
                // dd($key . ' ' . $value);
                if (!empty($value)) {
                    if (request()->has('attachment-blog-trixFields')) {
                        // $rqa = request();
                        // foreach ($rqa as $k => $v) {
                        //     // foreach ($v as $a) {
                        dd("HAS");
                        // }
                        // dd(request('attachment-blog-trixFields.content'));
                        // $tr = trim($v, '[""]');
                        try {
                            // foreach ($rqa as $k) {
                            //     // foreach ($v as $a) {
                            //     echo $k;
                            // }
                            // request()->validate([
                            //     'attachment-blog-trixFields.content.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                            // ]);
                            // dd(request('attachment-blog-trixFields.content.*'));
                            // Blog::create([
                            //     'tag' => request('tag'),
                            //     'title' => request('title'),
                            //     'blog-trixFields' => request('blog-trixFields'),
                            //     'attachment-blog-trixFields' => request('attachment-blog-trixFields')
                            // ]);
                            // session()->flash('msg', 'Blog successfully added.');
                            // return redirect()->route('showVMTPage');
                        } catch (\Throwable $th) {
                            dd($th);
                            //throw $th;
                            // session()->flash('msgErr', 'File yang dimasukkan HARUS berupa GAMBAR!');
                            // return redirect()->route('showVMTPage');
                        }
                        // if ($verif == true) {
                        //     session()->flash('msg', 'SUCCESS');
                        // } else {
                        //     session()->flash('msgErr', 'ERROR');
                        // }
                        // }
                        // dd(request('attachment-blog-trixFields.*.content'));
                    }
                    // else {
                    //     dd("GA ADA");
                    // }
                    // foreach ($$value as $k => $v) {
                    //     dd($k . '=' . $v . '\n');
                    // }
                    dd("DATA SAVED TAPI GA ADA ATTC");
                    // $vrq = $rq->validate([
                    //     'blog-trixFields' => 'required',
                    //     'attachment-blog-trixFields.*.attachment' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    // ]);
                    // if ($vrq) {
                    //     dd("IMG" . $vrq);
                    //     session()->flash('msg', 'IMG');
                    // } else {
                    //     dd("BUKAN" . $vrq);
                    //     session()->flash('msg', 'BUKAN IMG');
                    // }
                    // dd(request('blog-trixFields'));
                    // $this->m = "";
                    // $this->errorNotif = false;
                    // try {

                    // Blog::create([
                    //     'tag' => request('tag'),
                    //     'title' => request('title'),
                    //     'blog-trixFields' => request('blog-trixFields'),
                    //     'attachment-blog-trixFields' => request('attachment-blog-trixFields')
                    // ]);
                    // session()->flash('msg', 'Blog successfully added.');
                    // return redirect()->route('showVMTPage');
                    // } catch (\Throwable $th) {
                    //     //throw $th;
                    // }
                } else {
                    // dd("ELSE EMPTY");
                    // session()->flash('msg', 'ELSE EMPTY');
                    session()->flash('msgErr', 'Konten tidak boleh KOSONG.');
                    return redirect()->route('showVMTPage');
                    // dd("NULL");
                    // $this->m = "Konten harus diisi";
                    // $this->errorNotif = true;
                }
            }
            // Blog::create([
            //     $data,
            //     // 'tag' => request('tag'),
            //     // 'title' => request('title'),
            //     // 'blog-trixFields' => request('blog-trixFields'),
            //     'attachment-blog-trixFields' => request('attachment-blog-trixFields')
            // ]);
            // session()->flash('msg', 'Blog successfully added.');
            // return redirect()->route('showVMTPage');
        }
    }

    // protected function failedValidation(Validator $validator)
    // {
    //     throw new HttpResponseException(response()->json($validator->errors(), 422));
    // }

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

    public function delete_pending()
    {
        // dd(request('blog-trixFields'));
        $trad = TrixAttachment::where('is_pending', 1)->get();
        $this->t_content_img = $trad[0]['attachment'];
        unlink('storage/' . $this->t_content_img);
        TrixAttachment::where('is_pending', 1)->delete();
        // dd($trad[0]['attachment']);
        session()->flash('msgWar', 'Anda telah membatalkan aksi.');
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
