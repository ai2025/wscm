<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Validation\Rule;
use App\Models\IdentitasSekolah;
use App\Models\DataAlumni;

class InputDataAlumni extends Component
{
    public $namaAlumni, $nisAlumni, $tmptLahir, $tglLahir, $telpAlumni, $emailAlumni, $gender;
    public $jurusanAlumni, $thnLulus, $pkl, $pengalamanKrj, $statusPkrjaan, $tmptKerKul, $id_alumni;
    // public $dat = [];

    // public $judulAlumni = [
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

    public function render()
    {
        return view('livewire.bkk.input-data-alumni', [
            'data' => $this->read(),
            'dataa' => $this->readAlumni(),
        ])->layout('layouts.landingpage', [
            'data' => $this->read(),
        ]);
    }
}
