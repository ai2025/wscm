<?php

namespace App\Http\Livewire;
use App\Models\IdentitasSekolah;
use Livewire\Component;
use App\Models\ImgCarIdenSekolah;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Ppdb extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $nama, $nis, $alamat, $kab, $provinsi, $negara, $email, $web, $telp, $pos, $id_identitas;
    public $is_showing, $imgIdent, $keterangan, $kategori, $id_img, $tempImg;
    
    //section gambar header
    public function createImg()
    {
        // $switchRule = 1;
        $valData = $this->validate([
            'imgIdent' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'keterangan' => 'required|min:3|max:50',
        ]);

        $valData['imgIden'] = $this->imgIdent->store('img_car_header', 'public');
        $valData['is_showing'] = $this->is_showing;
        $valData['kategori'] = 'header';

        ImgCarIdenSekolah::create($valData);
        $this->reloadPage();
        session()->flash('msgUpdateGambar', 'GAMBAR successfully added.');
    }

    public function readImg()
    {
        return ImgCarIdenSekolah::select('*')->where('kategori','header')->get();
    }

    public function updateImg()
    {
        $valData = '';
        // $tempImg = $this->imgIdent;
        if ($this->tempImg != null) {
            // dd("not null");
            $valData = $this->validate([
                'tempImg' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'keterangan' => 'required|min:3|max:50',
                // 'kategori' => 'required|min:3|max:50',
            ]);

            $valData['imgIden'] = $this->tempImg->store('img_car_header', 'public');
            unlink('storage/' . $this->imgIdent);
        } else {
            // dd("null");
            $valData = $this->validate([
                'keterangan' => 'required|min:3|max:50',
            ]);
        }

        // dd($valData);
        $valData['is_showing'] = $this->is_showing;
        ImgCarIdenSekolah::find($this->id_img)->update($valData);
        $this->reloadPage();
        session()->flash('msgUpdateGambar', 'GAMBAR successfully updated.');
    }

    // public function deleteImg()
    // {
    //     // dd($this->id_img);
    //     unlink('storage/' . $this->imgIdent);
    //     ImgCarIdenSekolah::destroy($this->id_img);
    //     $this->reloadPage();
    // }

    public function reloadPage()
    {
        return redirect()->to('/ppdb');
    }

    public function loadDataImg($id)
    {
        $this->id_img = $id;
        $dim = ImgCarIdenSekolah::find($this->id_img);
        // $this->sequence = $dim->sequence;
        $this->is_showing = $dim->is_showing;
        $this->imgIdent = $dim->imgIden;
        $this->keterangan = $dim->keterangan;
        $this->kategori = $dim->kategori;
    }

    // public function loadDataImgUp($id)
    // {
    //     $this->id_img = $id;
    //     $dim = ImgCarIdenSekolah::find($this->id_img);
    //     // $this->sequence = $dim->sequence;
    //     $this->is_showing = $dim->is_showing;
    //     // $this->imgIdent = $dim->imgIden;
    //     $this->keterangan = $dim->keterangan;
    //     $this->kategori = $dim->kategori;
    // }

    public $judul = [
        'is_showing' => 'Tampil',
        'imgIden' => 'Gambar',
        // 'keterangan' => 'Keterangan',
        'kategori' => 'Kategori',
    ];

    public function modelDataImg()
    {
        return [
            // 'sequence' => $this->sequence,
            'is_showing' => $this->is_showing,
            'imgIden' => $this->imgIdent,
            'keterangan' => $this->keterangan,
            'kategori' => $this->kategori,
        ];
    }

    public function read()
    {
        return IdentitasSekolah::orderBy('created_at', 'DESC')->get();
    }

    public function render()
    {
        return view('livewire.ppdb', [
            'data'=> $this->read(),
            'dataImg' => $this->readImg(),
        ])->layout('layouts.landingpage', [
            'data'=> $this->read(),
        ]);
    }
}
