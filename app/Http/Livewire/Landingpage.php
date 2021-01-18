<?php

namespace App\Http\Livewire;
use App\Models\IdentitasSekolah;
use App\Models\JmlhPsrtDidik;
use Livewire\Component;

class Landingpage extends Component
{
    public $modalIdentitas = false;
    public $modalLanding = false;

    public $nama, $nis, $alamat, $kab, $provinsi, $negara, $email, $web, $telp, $pos, $id_identitas, 
    $jmlhSis, $guru, $kelas, $jurusan, $id_jmlh;

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
    
    public $judulJmlh = [
        'jmlhSis' => 'Jumlah Siswa',
        'guru' => 'Guru',
        'kelas' => 'Kelas',
        'jurusan' => 'Jurusan',
    ];
    
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
    }

    // public function rulesJmlh()
    // {
    //     return [
    //         'jmlhSis' => ['required', 'numeric'],
    //         'guru' => ['required', 'numeric'],
    //         'kelas' => ['required', 'numeric'],
    //         'jurusan' => ['required', 'numeric'],
    //     ];
    // }

    public function createJmlh()
    {
        // $this->validate();
        $validatedData = $this->validate([
            'jmlhSis' => ['required', 'numeric'],
            'guru' => ['required', 'numeric'],
            'kelas' => ['required', 'numeric'],
            'jurusan' => ['required', 'numeric'],
        ]);
        // $validatedData['name']=$this->modelDataJmlh();
        JmlhPsrtDidik::create($validatedData);
        session()->flash('msgUpdateJumlah', 'Jumlah successfully added.');
        return redirect()->to('/');
        // JmlhPsrtDidik::createJmlh($this->modelDataJmlh());
        // $this->reset();
        // session()->flash('msgUpdateJumlah', 'Jumlah successfully added.');
        // return redirect()->to('/');
    }

    public function read()
    {
        return IdentitasSekolah::orderBy('created_at', 'DESC')->get();
    }
    
    public function readJmlh()
    {
        return JmlhPsrtDidik::orderBy('created_at', 'DESC')->get();
        // $this->resetPage();
    }

    public function updateJmlh()
    {
        $validatedData = $this->validate([
            'jmlhSis' => ['required', 'numeric'],
            'guru' => ['required', 'numeric'],
            'kelas' => ['required', 'numeric'],
            'jurusan' => ['required', 'numeric'],
        ]);
        // JmlhPsrtDidik::updated($validatedData);
        JmlhPsrtDidik::find($this->id_jmlh)->update($this->modelDataJmlh());
        session()->flash('msgUpdateJumlah', 'Jumlah successfully updated.');
        return redirect()->to('/');
        // $this->validate();
        // JmlhPsrtDidik::find($this->id_jmlh)->updateJmlh($this->modelDataJmlh());
        // session()->flash('msgUpdateJumlah', 'Jumlah successfully updated.');
        // return redirect()->to('/');
    }

    /**
     * show Edit Identitas Modal
     *
     * @return void
     */

    public function loadData($id)
    {
        $this->id_identitas = $id;
        $data = IdentitasSekolah::find($id)->first();
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
    
    public function loadDataJmlh($idj)
    {
        $this->id_jmlh = $idj;
        $dataa = JmlhPsrtDidik::find($idj)->first();
        $this->jmlhSis = $dataa->jmlhSis;
        $this->guru = $dataa->guru;
        $this->kelas = $dataa->kelas;
        $this->jurusan = $dataa->jurusan;
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

    public function modelDataJmlh()
    {
        return [
            'jmlhSis' => $this->jmlhSis,
            'guru' => $this->guru,
            'kelas' => $this->kelas,
            'jurusan' => $this->jurusan,
        ];
    }

    /**
     * viewnya
     *
     * @return void
     */
    // 'data' => $this->read(),
    public function render()
    {
        return view('livewire.landingpage' , [
            'data'=> $this->read(),
            'dataa'=> $this->readJmlh(),
        ])->layout('layouts.landingpage', [
            'data'=> $this->read(),
        ]);
    }
}
