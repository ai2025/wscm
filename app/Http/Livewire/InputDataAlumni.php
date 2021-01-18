<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\IdentitasSekolah;
use App\Models\DataAlumni;

class InputDataAlumni extends Component
{
    public $nama, $nis, $alamat, $kab, $provinsi, $negara, $email, $web, $telp, $pos, $id_identitas,
    $namaAlumni, $nisAlumni, $tmptLahir, $tglLahir, $telpAlumni, $emailAlumni, $gender, 
    $jurusanAlumni, $thnLulus, $pkl, 
    $pengalamanKrj, $statusPkrjaan, $tmptKerKul, $id_alumni;

    public $judulAlumni = [
        'namaAlumni' => 'Nama Alumni',
        'nisAlumni' => 'NIS',
        'tmptLahir' => 'Tempat Lahir',
        'tglLahir' => 'Tanggal Lahir',
        'telpAlumni' => 'No.HP Alumni',
        'emailAlumni' => 'Email Alumni',
        'gender' => 'Gender',
        'jurusanAlumni' => 'Paket Keahlian',
        'thnLulus' => 'Tahun Lulus',
        'pkl' => 'PKL',
        'pengalamanKrj' => 'Pengalaman Kerja',
        'statusPkrjaan' => 'Status Pekerjaan',
        'tmptKerKul' => 'Tempat Kerja /  Kuliah',
    ];

    public function rules()
    {
        return 
            [
                'namaAlumni' => 'required',
                'nisAlumni' => 'required|numeric',
                'tmptLahir' => 'required',
                'tglLahir' => 'required',
                'telpAlumni' => 'required| numeric',
                'emailAlumni' => 'required|email',
                'gender' => 'required',
                'jurusanAlumni' => 'required',
                'thnLulus' => 'required|numeric',
                'pkl' => 'required',
                'pengalamanKrj' => 'required',
                'statusPkrjaan' => 'required',
                'tmptKerKul' => 'required',
            ];
    }


    public function read()
    {
        return IdentitasSekolah::orderBy('created_at', 'DESC')->get();
    }

    public function readAlumni()
    {
        return DataAlumni::orderBy('created_at', 'DESC')->get();
    }

    public function loadDataAlumni($ida)
    {
        $this->id_alumni = $ida;
        $dataa = IdentitasSekolah::find($ida)->first();
        $this->namaAlumni = $dataa->namaAlumni;
        $this->nisAlumni = $dataa->nisAlumni;
        $this->tmptLahir = $dataa->tmptLahir;
        $this->tglLahir = $dataa->tglLahir;
        $this->telpAlumni = $dataa->telpAlumni;
        $this->emailAlumni = $dataa->emailAlumni;
        $this->gender = $dataa->gender;
        $this->jurusanAlumni = $dataa->jurusanAlumni;
        $this->thnLulus = $dataa->thnLulus;
        $this->pkl = $dataa->pkl;
        $this->pengalamanKrj = $dataa->pengalamanKrj;
        $this->statusPkrjaan = $dataa->statusPkrjaan;
        $this->tmptKerKul = $dataa->tmptKerKul;
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

    public function simpan(){
        // dd($this->modelDataAlumni());
        $this->validate();
        DataAlumni::create($this->modelDataAlumni());
        $this->reset();
        // session()->flash('msgUpdateAlumni', 'Data Alumni successfully added.');
        return redirect()->to('/');
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

    public function render()
    {
        return view('livewire.bkk.input-data-alumni', [
            'data'=> $this->read(),
            'dataa'=> $this->readAlumni(),
        ])->layout('layouts.landingpage', [
            'data'=> $this->read(),
        ]);
    }
}
