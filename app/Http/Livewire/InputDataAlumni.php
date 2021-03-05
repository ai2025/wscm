<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Validation\Rule;
use App\Models\IdentitasSekolah;
use App\Models\DataAlumni;
use App\Models\ImgCarIdenSekolah;
use App\Models\KodeAkses;

class InputDataAlumni extends Component
{
    public $namaAlumni, $nisAlumni, $tmptLahir, $tglLahir, $telpAlumni, $emailAlumni, $gender;
    public $jurusanAlumni, $thnLulus, $pkl, $pengalamanKrj, $statusPkrjaan, $tmptKerKul, $id_alumni;
    public $id_kode, $kodeAksesIn, $kodeAkses, $noWaAdm, $cek;
    public $kdAkses = true, $ask = false, $tes = false, $formAl = false;
    // public $dat = [];

    // public $listAlumni = [
    //     'namaAlumni' => 'Nama Alumni',
    //     'nisAlumni' => 'NIS',
    //     'tmptLahir' => 'Tempat Lahir',
    //     'tglLahir' => 'Tanggal Lahir',
    //     'telpAlumni' => 'No.HP Alumni',
    //     'emailAlumni' => 'Email Alumni',
    //     'gender' => 'Gender',
    //     'jurusanAlumni' => 'Paket Keahlian',
    //     'thnLulus' => 'Tahun Lulus',
    //     'pkl' => 'PKL',
    //     'pengalamanKrj' => 'Pengalaman Kerja',
    //     'statusPkrjaan' => 'Status Pekerjaan',
    //     'tmptKerKul' => 'Tempat Kerja /  Kuliah',
    // ];

    public function rules()
    {
        return
            [
                'namaAlumni' => 'required',
                'nisAlumni' => ['required', 'numeric', Rule::unique('data_alumnis', 'nisAlumni')],
                'tmptLahir' => 'required',
                'tglLahir' => 'required',
                'telpAlumni' => ['required', 'numeric', Rule::unique('data_alumnis', 'telpAlumni')],
                'emailAlumni' => ['required', 'email', Rule::unique('data_alumnis', 'emailAlumni')],
                'gender' => 'required',
                'jurusanAlumni' => 'required',
                'thnLulus' => ['required', 'numeric'],
                'pkl' => 'required',
                'pengalamanKrj' => 'required',
                'statusPkrjaan' => 'required',
                'tmptKerKul' => 'required',
            ];
    }


    public function read()
    {
        return IdentitasSekolah::select('*')->get();
    }

    public function readAlumni()
    {
        return DataAlumni::select('*')->get();
    }

    public function simpan()
    {
        // dd($this->modelDataAlumni());
        $this->validate();
        DataAlumni::create($this->modelDataAlumni());
        $this->reset();
        session()->flash('msgAlumni', 'Data Alumni berhasil ditambahkan.');
        return redirect()->to('/bkk/inputDataAlumni');
    }

    public function loadDataAlumni($ida)
    {
        $this->id_alumni = $ida;
        $dat = DataAlumni::find($ida);
        // dd($dget["namaAlumni"]);
        $this->namaAlumni = $dat->namaAlumni;
        $this->nisAlumni = $dat->nisAlumni;
        $this->tmptLahir = $dat->tmptLahir;
        $this->tglLahir = $dat->tglLahir;
        $this->telpAlumni = $dat->telpAlumni;
        $this->emailAlumni = $dat->emailAlumni;
        $this->gender = $dat->gender;
        $this->jurusanAlumni = $dat->jurusanAlumni;
        $this->thnLulus = $dat->thnLulus;
        $this->pkl = $dat->pkl;
        $this->pengalamanKrj = $dat->pengalamanKrj;
        $this->statusPkrjaan = $dat->statusPkrjaan;
        $this->tmptKerKul = $dat->tmptKerKul;
        // $dat = [
        //     $this->namaAlumni, $this->nisAlumni, $this->tmptLahir, $this->tglLahir, $this->telpAlumni,
        //     $this->emailAlumni, $this->gender, $this->jurusanAlumni, $this->thnLulus, $this->pkl,
        //     $this->pengalamanKrj, $this->statusPkrjaan, $this->tmptKerKul
        // ];
    }

    public function modelDataAlumni()
    {
        return [
            'namaAlumni' => $this->namaAlumni,
            'nisAlumni' => $this->nisAlumni,
            'tmptLahir' => $this->tmptLahir,
            'tglLahir' => $this->tglLahir,
            'telpAlumni' => $this->telpAlumni,
            'emailAlumni' => $this->emailAlumni,
            'gender' => $this->gender,
            'jurusanAlumni' => $this->jurusanAlumni,
            'thnLulus' => $this->thnLulus,
            'pkl' => $this->pkl,
            'pengalamanKrj' => $this->pengalamanKrj,
            'statusPkrjaan' => $this->statusPkrjaan,
            'tmptKerKul' => $this->tmptKerKul,
        ];
    }



    // public function store()
    // {
    //     $alumni = new DataAlumni;
    //     $alumni->namaAlumni=$this->namaAlumni;
    //     $alumni->nisAlumni=$this->nisAlumni;
    //     $alumni->tmptLahir=$this->tmptLahir;
    //     $alumni->tglLahir=$this->tglLahir;
    //     $alumni->telpAlumni=$this->telpAlumni;
    //     $alumni->emailAlumni=$this->emailAlumni;
    //     $alumni->gender=$this->gender;
    //     $alumni->jurusanAlumni=$this->jurusanAlumni;
    //     $alumni->thnLulus=$this->thnLulus;
    //     $alumni->pkl=$this->pkl;
    //     $alumni->pengalamanKrj=$this->pengalamanKrj;
    //     $alumni->statusPkrjaan=$this->statusPkrjaan;
    //     $alumni->tmptKerKul=$this->tmptKerKul;
    //     $alumni->save();
    //     return redirect()->to('/');
    // DataAlumni::create([
    //     'namaAlumni' => $this->namaAlumni,
    //     'nisAlumni' => $this->nisAlumni,
    //     'tmptLahir' => $this->tmptLahir,
    //     'tglLahir' => $this->tglLahir,
    //     'telpAlumni' => $this->telpAlumni,
    //     'emailAlumni' => $this->emailAlumni,
    //     'gender' => $this->gender,
    //     'jurusanAlumni' => $this->jurusanAlumni,
    //     'thnLulus' => $this->thnLulus,
    //     'pkl' => $this->pkl,
    //     'pengalamanKrj' => $this->pengalamanKrj,
    //     'statusPkrjaan' => $this->statusPkrjaan,
    //     'tmptKerKul' => $this->tmptKerKul,
    // ]);
    // $this->resetInput();
    // }

    // private function resetInput()
    // {
    //     $this->namaAlumni = null;
    //     $this->nisAlumni = null;
    //     $this->tmptLahir = null;
    //     $this->tglLahir = null;
    //     $this->telpAlumni = null;
    //     $this->emailAlumni = null;
    //     $this->gender = null;
    //     $this->jurusanAlumni = null;
    //     $this->thnLulus = null;
    //     $this->pkl = null;
    //     $this->pengalamanKrj = null;
    //     $this->statusPkrjaan = null;
    //     $this->tmptKerKul = null;
    // }

    public function readHero($tag)
    {
        return ImgCarIdenSekolah::select("*")->where('kategori', $tag)->get();
        // $this->resetPage();
    }

    public function readKodeAkses()
    {
        return KodeAkses::orderBy('created_at', 'DESC')->get();
    }

    public function loadKodeAkses()
    {
        foreach ($this->readKodeAkses() as $kd) {
            $this->id_kode = $kd->id;
            $this->kodeAkses = $kd->kodeAkses;
            $this->noWaAdm = $kd->noWaAdm;
        }
    }

    public function createKode()
    {
        $validatedData = $this->validate([
            'kodeAkses' => ['required', 'min:5'],
            'noWaAdm' => ['required', 'numeric'],
        ]);
        KodeAkses::create($validatedData);
        session()->flash('msgAlumni', ' Jumlah successfully added.');
        return redirect()->to('/bkk/inputDataAlumni');
    }

    public function updateKode()
    {
        $validatedData = $this->validate([
            'kodeAkses' => ['required', 'min:5'],
            'noWaAdm' => ['required', 'numeric'],
        ]);
        KodeAkses::find($this->id_kode)->update($validatedData);
        session()->flash('msgAlumni', ' Jumlah successfully UPDATED.');
        return redirect()->to('/bkk/inputDataAlumni');
    }

    public function cekKode()
    {
        if ($this->readKodeAkses()->count() > 0) {
            $this->loadKodeAkses();
            if ($this->kodeAkses == $this->kodeAksesIn) {
                $this->kdAkses = false;
                $this->ask = false;
                $this->formAl = true;
                $this->tes = false;
            } else {
                $this->ask = false;
                $this->tes = true;
                $this->formAl = false;
            }
        } else {
            session()->flash('msgAlumni', ' KODE BELUM ADA.');
        }
    }

    public function toggleAcc($page)
    {
        if ($page == 1) {
            $this->kdAkses = false;
            $this->ask = true;
            $this->formAl = false;
        } else if ($page == 2) {
            $this->kdAkses = true;
            $this->ask = false;
            $this->formAl = false;
        } else if ($page == 3) {
            $this->cekKode();
        } else {
        }
    }


    public function render()
    {
        return view('livewire.bkk.input-data-alumni', [
            'data' => $this->read(),
            'dataa' => $this->readAlumni(),
            'dataHero' => $this->readHero('header'),
            'dataKode' => $this->readKodeAkses(),
        ])->layout('layouts.landingpage', [
            'data' => $this->read(),
        ]);
    }
}
