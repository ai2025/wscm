<?php

namespace App\Http\Livewire;
use App\Models\IdentitasSekolah;
use Livewire\Component;
use App\Models\ImgCarIdenSekolah;
use App\Models\Pkl as DataPkl;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Pkl extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $nama, $nis, $alamat, $kab, $provinsi, $negara, $email, $web, $telp, $pos, $id_identitas;

    public $is_showing, $imgIdent, $keterangan, $kategori, $id_img, $tempImg;

    public $namaInstansi, $alamatInstansi, $id_pkl;

    public $judul = [
        'namaInstansi' => 'Nama Instansi',
        'alamatInstansi' => 'Alamat Instansi',
    ];

    public function rules()
    {
        return [
            'namaInstansi' => ['required'],
            'alamatInstansi' => ['required'],
        ];
    }

    public function modelDataPkl()
    {
        return [
            'namaInstansi' => $this->namaInstansi,
            'alamatInstansi' => $this->alamatInstansi,
        ];
    }

    public function createPkl()
    {
        $this->validate();
        DataPkl::create($this->modelDataPkl());
        $this->reset();
        $this->reloadPage();
        session()->flash('msgUpdatePkl', 'Data PKL successfully added.');
        
        // $validatedData = $this->validate([
        //     'namaInstansi' => ['required'],
        //     'alamatInstansi' => ['required'],
        // ]);
        // DataPkl::create($validatedData);
        // session()->flash('msgUpdatePkl', 'Pkl successfully added.');
        // return redirect()->to('/');
    }

    public function updatePkl()
    {
        $validatedData = $this->validate([
            'namaInstansi' => ['required'],
            'alamatInstansi' => ['required'],
        ]);
        DataPkl::find($this->id_pkl)->update($this->modelDataPkl());
        session()->flash('msgUpdatePkl', 'Pkl successfully updated.');
        return redirect()->to('/humas/pkl');
    }

    public function readPkl()
    {
        return DataPkl::orderBy('created_at', 'DESC')->get();
    }

    public function loadDataPkl($idp)
    {
        $this->id_pkl = $idp;
        $dataPkl = DataPkl::find($this->id_pkl);
        $this->namaInstansi = $dataPkl->namaInstansi;
        $this->alamatInstansi = $dataPkl->alamatInstansi;
    }

    public function deletePkl()
    {
        // dd($this->id_img);
        DataPkl::destroy($this->id_pkl);
        $this->reloadPage();
    }

    public function createImg()
    {
        // $switchRule = 1;
        $valData = $this->validate([
            'imgIdent' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'keterangan' => 'required|min:3|max:50',
            'kategori' => 'required|min:3|max:50',
        ]);

        $valData['imgIden'] = $this->imgIdent->store('img_car_pkl', 'public');
        $valData['is_showing'] = $this->is_showing;
        $valData['kategori'] = 'pkl';

        ImgCarIdenSekolah::create($valData);
        $this->reloadPage();
        session()->flash('msgUpdateIdentitas', 'GAMBAR successfully added.');
    }


    public function readImg()
    {
        return ImgCarIdenSekolah::select('*')->get();
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
                'kategori' => 'required|min:3|max:50',
            ]);

            $valData['imgIden'] = $this->tempImg->store('img_car_pkl', 'public');
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
        session()->flash('msgUpdateIdentitas', 'GAMBAR successfully added.');
    }

    public function deleteImg()
    {
        // dd($this->id_img);
        unlink('storage/' . $this->imgIdent);
        ImgCarIdenSekolah::destroy($this->id_img);
        $this->reloadPage();
    }

    public function reloadPage()
    {
        return redirect()->to('/humas/pkl');
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

    public function loadDataImgUp($id)
    {
        $this->id_img = $id;
        $dim = ImgCarIdenSekolah::find($this->id_img);
        // $this->sequence = $dim->sequence;
        $this->is_showing = $dim->is_showing;
        // $this->imgIdent = $dim->imgIden;
        $this->keterangan = $dim->keterangan;
        $this->kategori = $dim->kategori;
    }

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
        return view('livewire.humas.pkl', [
            'data'=> $this->read(),
            'dataImg' => $this->readImg(),
            'dataPkl' => $this->readPkl(),
        ])->layout('layouts.landingpage', [
            'data'=> $this->read(),
        ]);
    }
}
