<div class="container">
    <div>
        <a href="https://api.whatsapp.com/send?phone=+6282232500026&text=">
            <button style="background:#32C03C;height:36px;border-radius:5px">
                <img src="https://web.whatsapp.com/img/favicon/1x/favicon.png"> Whatsapp Kami
            </button>
        </a>
    </div>
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="section-title">
            <h2 id="isi-Alumni">Input Data Alumni</h2>
            @if (session()->has('msgAlumni'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Yay!</strong> {{ session('msgAlumni') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
        </div>
    </div>

    <div class="col-lg-8">
        {{-- <div id="form"> --}}
        {{-- <div class="row">
            <div class="col-lg-6">
            </div>
        </div> --}}
        <form wire:submit.prevent="submit" class="php-email-form">
            <div class="form-row">
                <div class="col-md-6 form-group">
                    Nama Alumni : <br>
                    <input wire:model="namaAlumni" type="text" name="namaAlumni" class="form-control" id="namaAlumni" placeholder="Nama Alumni" />
                    @error('namaAlumni') <span class="text-danger">{{ $message }}</span> @enderror

                </div>
                <div class="col-md-6 form-group">
                    NIS : <br>
                    <input wire:model="nisAlumni" type="text" class="form-control" name="nisAlumni" id="nisAlumni" placeholder="NIS" />
                    @error('nisAlumni') <span class="text-danger">{{ $message }}</span> @enderror

                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 form-group">
                    Tempat Lahir : <br>
                    <input wire:model="tmptLahir" type="text" name="tmptLahir" class="form-control" id="tmptLahir" placeholder="Tempat Lahir" />
                    @error('tmptLahir') <span class="text-danger">{{ $message }}</span> @enderror

                </div>
                <div class="col-md-6 form-group">
                    Tanggal Lahir : <br>
                    <input wire:model="tglLahir" type="date" class="form-control" name="tglLahir" id="tglLahir" placeholder="Tanggal Lahir" />
                    @error('tglLahir') <span class="text-danger">{{ $message }}</span> @enderror

                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 form-group">
                    No.HP : <br>
                    <input wire:model="telpAlumni" type="text" name="telpAlumni" class="form-control" id="telpAlumni" placeholder="No. HP" />
                    @error('telpAlumni') <span class="text-danger">{{ $message }}</span> @enderror

                </div>
                <div class="col-md-6 form-group">
                    Email : <br>
                    <input wire:model="emailAlumni" type="email" class="form-control" name="emailAlumni" id="emailAlumni" placeholder="Email" />
                    @error('emailAlumni') <span class="text-danger">{{ $message }}</span> @enderror

                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 form-group">
                    Jenis Kelamin : <br>
                    <select wire:model="gender" name="gender" class="form-control" name="gender" id="gender">
                        <option value="">--Jenis Kelamin--</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    @error('gender') <span class="text-danger">{{ $message }}</span> @enderror

                </div>
                <div class="col-md-6 form-group">
                    Paket Keahlian : <br>
                    <input wire:model="jurusanAlumni" type="text" class="form-control" name="jurusanAlumni" id="jurusanAlumni" placeholder="Paket Keahlian" />
                    @error('jurusanAlumni') <span class="text-danger">{{ $message }}</span> @enderror

                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 form-group">
                    Tahun Lulus : <br>
                    <input wire:model="thnLulus" type="text" name="thnLulus" class="form-control" id="thnLulus" placeholder="Tahun Lulus" />
                    @error('thnLulus') <span class="text-danger">{{ $message }}</span> @enderror

                </div>
                <div class="col-md-6 form-group">
                    PKL : <br>
                    <input wire:model="pkl" type="text" class="form-control" name="pkl" id="pkl" placeholder="PKL" />
                    @error('pkl') <span class="text-danger">{{ $message }}</span> @enderror

                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 form-group">
                    Pengalaman Kerja : <br>
                    <input wire:model="pengalamanKrj" type="text" name="pengalamanKrj" class="form-control" id="pengalamanKrj" placeholder="Pengalaman Kerja" />
                    @error('pengalamanKrj') <span class="text-danger">{{ $message }}</span> @enderror

                </div>
                <div class="col-md-6 form-group">
                    Status Pekerjaan : <br>
                    <select wire:model="statusPkrjaan" name="statusPkrjaan" class="form-control" name="statusPkrjaan" id="statusPkrjaan">
                        <option value="">--Status--</option>
                        <option value="Bekerja">Bekerja</option>
                        <option value="Kuliah">Kuliah</option>
                        <option value="Tidak keduanya">Tidak keduanya</option>
                    </select>
                    @error('statusPkrjaan') <span class="text-danger">{{ $message }}</span> @enderror

                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 form-group">
                    Tempat Bekerja / Kuliah : <br>
                    <input wire:model="tmptKerKul" type="text" class="form-control" name="tmptKerKul" id="tmptKerKul" placeholder="Tempat Bekerja / Kuliah" />
                    @error('tmptKerKul') <span class="text-danger">{{ $message }}</span> @enderror

                </div>
            </div>

            <div class="mb-3">
                {{-- <div class="loading">Loading</div> --}}
                {{-- <div class="sent-message">Data anda akan terkirim. Terima kasih!</div> --}}
                <div class="text-center">
                    <button type="button" class="btn btn-success" wire:click="simpan">Kirim</button>
                    {{-- <button type="button" class="btn btn-outline-success" data-toggle="modal"
                wire:click="loadData({{ $isi->id }})" data-target="#updateIdentitasMDL">
                    Update Data
                    </button> --}}
                </div>
            </div>
        </form>
    </div>
</div>