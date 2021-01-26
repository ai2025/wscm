<?php

namespace App\Http\Livewire;

use Illuminate\Validation\Rule;
use Livewire\Component;
use App\Models\IdentitasSekolah;
use App\Models\ImgCarIdenSekolah;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class IdentitasSekolahs extends Component
{

    use WithPagination;
    use WithFileUploads;

    // public $modalIdentitas = false;

    public $nama, $nis, $alamat, $kab, $provinsi, $negara, $email, $web, $telp, $pos, $id_identitas;
    public $is_showing, $imgIdent, $keterangan, $kategori, $id_img, $tempImg;
    // public $switchRule = 0;
    // public $statusUp = false;

    public $judul = [
        'nama' => 'Nama Sekolah',
        'nis' => 'NIS',
        'alamat' => 'Alamat',
        'kab' => 'Kabupaten',
        'provinsi' => 'Provinsi',
        'negara' => 'Negara',
        'email' => 'Email',
        'web' => 'Website',
        'telp' => 'Telepon',
        'pos' => 'Kode POS',
    ];

    // public $judul = [
    //     ['nama', 'Nama Sekolah', $ids->nama],
    //     ['nis', 'NIS', $ids->nis],
    //     ['alamat', 'Alamat', $ids->alamat],
    //     ['kab', 'Kabupaten', $ids->kab],
    //     ['provinsi', 'Provinsi', $ids->provinsi],
    //     ['negara', 'Negara', $ids->negara],
    //     ['email', 'Email', $ids->email],
    //     ['web', 'Website', $ids->web],
    //     ['telp', 'Telepon', $ids->telp],
    //     ['pos', 'POS', $ids->pos],
    // ];

    public function rules()
    {
        return [
            'nama' => ['required', 'min:5'],
            'nis' => ['required', 'min:6', 'numeric'],
            'alamat' => ['required', 'min:5'],
            'kab' => ['required', 'min:3'],
            'provinsi' => ['required', 'min:3'],
            'negara' => ['required', 'min:3'],
            'email' => ['required', 'min:5', 'email'],
            'web' => ['required', 'min:5'],
            'telp' => ['required', 'min:5', 'numeric'],
            'pos' => ['required', 'min:4', 'numeric'],
        ];
        // if ($switchRule == 0) {

        // } else if($switchRule == 1) {
        //     return [
        //         'keterangan' => ['required', 'min:3'],
        //         'imgIden' => ['required', 'image:url:image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        //     ]
        // }
    }

    public function read()
    {
        return IdentitasSekolah::select('*')->get();
        // $this->resetPage();
    }

    public function readImg()
    {
        return ImgCarIdenSekolah::select('*')->where('kategori','identitas')->get();
    }

    public function create()
    {
        // $switchRule = 0;
        $this->validate();
        IdentitasSekolah::create($this->modelData());
        $this->reset();
        $this->reloadPage();
        session()->flash('msgUpdateIdentitas', 'Identitas Sekolah successfully added.');
    }

    public function createImgIden()
    {
        // $switchRule = 1;
        $valData = $this->validate([
            'imgIdent' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'keterangan' => 'required|min:3|max:50',
        ]);

        $valData['imgIden'] = $this->imgIdent->store('img_car_iden_sekolahs', 'public');
        $valData['is_showing'] = $this->is_showing;
        $valData['kategori'] = 'identitas';

        ImgCarIdenSekolah::create($valData);
        $this->reloadPage();
        session()->flash('msgUpdateIdentitas', 'GAMBAR successfully added.');
    }

    public function update()
    {
        $this->validate();
        // dd($this->id_identitas);
        IdentitasSekolah::find($this->id_identitas)->update($this->modelData());
        session()->flash('msgUpdateIdentitas', 'Identitas Sekolah successfully updated.');
        $this->reloadPage();
        // $statusUp = true;
        // $this->statusUpdate();
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

            $valData['imgIden'] = $this->tempImg->store('img_car_iden_sekolahs', 'public');
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

    // public function statusUpdate()
    // {
    //     return true;
    // }

    // public function updateIdentitas($id)
    // {
    // $this->validate();
    // dd("Updating.." + $id);
    // $this->idform = $id;
    // $data = IdentitasSekolah::find($id);
    // $this->nama = $data->nama;
    // $this->nis = $data->nis;
    // $this->alamat = $data->alamat;
    // $this->kab = $data->kab;
    // $this->provinsi = $data->provinsi;
    // $this->negara = $data->negara;
    // $this->email = $data->email;
    // $this->web = $data->web;
    // $this->telp = $data->telp;
    // $this->pos = $data->pos;
    // }

    /**
     * show Edit Identitas Modal
     *
     * @return void
     */
    // public function showEditIdentitasModal()
    // {
    //     $this->modalIdentitas = true;
    // }

    public function reloadPage()
    {
        return redirect()->to('/profil/identitasSekolah');
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
    // }

    public function loadData($id)
    {
        $this->id_identitas = $id;
        $data = IdentitasSekolah::find($this->id_identitas);
        $this->nama = $data->nama;
        $this->nis = $data->nis;
        $this->alamat = $data->alamat;
        $this->kab = $data->kab;
        $this->provinsi = $data->provinsi;
        $this->negara = $data->negara;
        $this->email = $data->email;
        $this->web = $data->web;
        $this->telp = $data->telp;
        $this->pos = $data->pos;
    }

    /**
     * pemetaan data untuk model
     *
     * @return void
     */
    public function modelData()
    {
        return [
            'nama' => $this->nama,
            'nis' => $this->nis,
            'alamat' => $this->alamat,
            'kab' => $this->kab,
            'provinsi' => $this->provinsi,
            'negara' => $this->negara,
            'email' => $this->email,
            'web' => $this->web,
            'telp' => $this->telp,
            'pos' => $this->pos,
        ];
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

    /**
     * viewnya
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.profil.identitas-sekolah', [
            'data' => $this->read(),
            'dataImg' => $this->readImg(),
            // 'statusUp' => $this->statusUpdate(),
        ])->layout('layouts.landingpage', [
            'data' => $this->read(),
            // 'statusUp' => $this->statusUpdate(),
        ]);
    }
}
