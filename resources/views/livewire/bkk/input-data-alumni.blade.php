<main id="main">
    <!-- {{-- Hero section --}} -->
    @if ($dataHero->count())
    @foreach ($dataHero as $i)
    <section id="heroo" class="d-flex align-items-center position-relative w-100"
        style="background: url({{ asset('storage/'.$i->imgIden) }}) center center !important; background-size: cover !important; position: relative !important;">
        <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200" style="
        height: 200px;">
            @if ($data->count())
            @foreach ($data as $data)
            <h1>{{ $data->nama }}</h1>
            @endforeach
            @else
            <h1>Nama sekolah belum tersedia</h1>
            @endif
        </div>
    </section>
    @endforeach
    @else
    <section id="hero" class="d-flex align-items-center">
        <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200" style="height: 200px;">
            @if ($data->count())
            @foreach ($data as $data)
            <h1>{{ $data->nama }}</h1>
            @endforeach
            @else
            <h1>Nama sekolah belum tersedia</h1>
            @endif
        </div>
    </section>
    @endif
    
    <!-- End Hero -->

    <!-- ======= inputDataAlumni Section ======= -->
    @auth
    <section id="pkl" class="portfolio">
        <div class="container">
            <div class="section-title">
                @if (session()->has('msgAlumni'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Yay!</strong> {{ session('msgAlumni') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <h2>Input Data Alumni</h2>
            </div>
            <div class="mb-4">
                @if ($dataKode->count() > 0)
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#aksesMDL" data-msg=""
                    wire:click="loadKodeAkses()">
                    Update Kode Akses
                </button>
                @else
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#aksesMDL" data-msg="">
                    Tambah Kode Akses
                </button>
                @endif
            </div>


            @if ($dataa->count() > 0)
            {{-- TABEL --}}
            <div class="entry-content-page">
                <div class="table-responsive">

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Alumni</th>
                                <th scope="col">NIS</th>
                                <th scope="col">Tahun Lulus</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataa as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <td>{{ $item->namaAlumni }}</td>
                                <td>{{ $item->nisAlumni }}</td>
                                <td>{{ $item->thnLulus }}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        wire:click="loadDataAlumni({{ $item->id }})" data-target="#detailAlumniMDL">
                                        Detail Data
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                            {{-- <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr> --}}
                        </tbody>
                    </table>

                    {{-- <table border="1">
                        <thead>
                            <tr>
                                <th width="300px">Nama Alumni</th>
                                <th width="200px">NIS</th>
                                <th width="200px">Tahun Lulus</th>
                                <th width="200px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($dataa->count())
                            @foreach ($dataa as $d)
                            <tr class="odd gradeX">
                                <td>{{ $d->namaAlumni }}</td>
                    <td>{{ $d->nisAlumni }}</td>
                    <td>{{ $d->thnLulus }}</td>
                    <td colspan="2">
                        <!-- Button Detail  -->
                        <div>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                wire:click="loadDataAlumni({{ $d->id }})" data-target="#detailAlumniMDL">
                                Detail Data
                            </button>
                        </div>
                    </td>
                    </tr>
                    @endforeach
                    @else
                    <h1>Data belum tersedia</h1>
                    @endif
                    </tbody>
                    </table> --}}
                </div>
            </div>
            @else
            <h4>Data belum ada</h4>
            <div>
                @if ($dataKode->count() > 0)
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#aksesMDL" data-msg=""
                    wire:click="loadKodeAkses()">
                    Update Kode Akses
                </button>
                @else
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#aksesMDL" data-msg="">
                    Tambah Kode Akses
                </button>
                @endif
            </div>
    </section>
    @endif

    </div>
    </section>
    @else
    <section id="contact" class="contact">
        <div class="container">
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
                    @if ($kdAkses)
                    <div id="kdAkses">
                        <div class="alert alert-warning" role="alert">
                            <h4 class="alert-heading">Halo!</h4>
                            <p>Apakah Anda alumni dan belum memiliki kode akses?</p>
                            <hr>
                            <p class="mb-0">Untuk meminta kode akses, silakan <a href="#" class="alert-link"
                                    wire:click="toggleAcc(1)">KLIK DISINI</a>.</p>
                        </div>

                        @if ($tes)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Kode Anda salah!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif

                        <div>
                            Kode Akses : <br>
                            <input wire:model="kodeAksesIn" type="text" name="kodeAksesIn"
                                class="form-control col-lg-8 float-left" id="kodeAksesIn" placeholder="Kode Akses" />
                            <button type="button" class="btn btn-success ml-3" wire:click="toggleAcc(3)">Akses
                                Form</button>

                        </div>
                    </div>
                    @elseif ($ask)
                    @foreach ($dataKode as $item)
                    <div id="ask">
                        <div>
                            Nama Alumni : <br>
                            <input wire:model="namaAlumni" type="text" name="namaAlumni" class="form-control"
                                id="namaAlumni" placeholder="Nama Alumni" autofocus />
                        </div>
                        <div class="mt-3">
                            NIS : <br>
                            <input wire:model="nisAlumni" type="text" class="form-control" name="nisAlumni"
                                id="nisAlumni" placeholder="NIS" />
                        </div>
                        <div class="mt-2">
                            <button type="button" class="btn btn-warning" wire:click="toggleAcc(2)">Kembali</button>
                            <a href="https://api.whatsapp.com/send?phone=+62{{ $item->noWaAdm }}&text=Halo%2C%0ANama%20saya%20{{ $namaAlumni }}%0ANIS%20saya%20{{ $nisAlumni }}%0ASaya%20ingin%20meminta%20kode%20akses%0ATerima%20kasih"
                                target="_blank">
                                <button class="btn btn-success float-right">
                                    <img src="https://web.whatsapp.com/img/favicon/1x/favicon.png"> Whatsapp Kami
                                </button>
                            </a>
                        </div>
                    </div>
                    @endforeach

                    @elseif ($formAl)

                    <form wire:submit.prevent="submit" class="php-email-form">
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                Nama Alumni : <br>
                                <input wire:model="namaAlumni" type="text" name="namaAlumni" class="form-control"
                                    id="namaAlumni" placeholder="Nama Alumni" />
                                @error('namaAlumni') <span class="text-danger">{{ $message }}</span> @enderror

                            </div>
                            <div class="col-md-6 form-group">
                                NIS : <br>
                                <input wire:model="nisAlumni" type="text" class="form-control" name="nisAlumni"
                                    id="nisAlumni" placeholder="NIS" />
                                @error('nisAlumni') <span class="text-danger">{{ $message }}</span> @enderror

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                Tempat Lahir : <br>
                                <input wire:model="tmptLahir" type="text" name="tmptLahir" class="form-control"
                                    id="tmptLahir" placeholder="Tempat Lahir" />
                                @error('tmptLahir') <span class="text-danger">{{ $message }}</span> @enderror

                            </div>
                            <div class="col-md-6 form-group">
                                Tanggal Lahir : <br>
                                <input wire:model="tglLahir" type="date" class="form-control" name="tglLahir"
                                    id="tglLahir" placeholder="Tanggal Lahir" />
                                @error('tglLahir') <span class="text-danger">{{ $message }}</span> @enderror

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                No.HP : <br>
                                <input wire:model="telpAlumni" type="text" name="telpAlumni" class="form-control"
                                    id="telpAlumni" placeholder="No. HP" />
                                @error('telpAlumni') <span class="text-danger">{{ $message }}</span> @enderror

                            </div>
                            <div class="col-md-6 form-group">
                                Email : <br>
                                <input wire:model="emailAlumni" type="email" class="form-control" name="emailAlumni"
                                    id="emailAlumni" placeholder="Email" />
                                @error('emailAlumni') <span class="text-danger">{{ $message }}</span> @enderror

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                Jenis Kelamin : <br>
                                <select wire:model="gender" name="gender" class="form-control" name="gender"
                                    id="gender">
                                    <option value="">--Jenis Kelamin--</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                @error('gender') <span class="text-danger">{{ $message }}</span> @enderror

                            </div>
                            <div class="col-md-6 form-group">
                                Paket Keahlian : <br>
                                <input wire:model="jurusanAlumni" type="text" class="form-control" name="jurusanAlumni"
                                    id="jurusanAlumni" placeholder="Paket Keahlian" />
                                @error('jurusanAlumni') <span class="text-danger">{{ $message }}</span> @enderror

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                Tahun Lulus : <br>
                                <input wire:model="thnLulus" type="text" name="thnLulus" class="form-control"
                                    id="thnLulus" placeholder="Tahun Lulus" />
                                @error('thnLulus') <span class="text-danger">{{ $message }}</span> @enderror

                            </div>
                            <div class="col-md-6 form-group">
                                PKL : <br>
                                <input wire:model="pkl" type="text" class="form-control" name="pkl" id="pkl"
                                    placeholder="PKL" />
                                @error('pkl') <span class="text-danger">{{ $message }}</span> @enderror

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                Pengalaman Kerja : <br>
                                <input wire:model="pengalamanKrj" type="text" name="pengalamanKrj" class="form-control"
                                    id="pengalamanKrj" placeholder="Pengalaman Kerja" />
                                @error('pengalamanKrj') <span class="text-danger">{{ $message }}</span> @enderror

                            </div>
                            <div class="col-md-6 form-group">
                                Status Pekerjaan : <br>
                                <select wire:model="statusPkrjaan" name="statusPkrjaan" class="form-control"
                                    name="statusPkrjaan" id="statusPkrjaan">
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
                                <input wire:model="tmptKerKul" type="text" class="form-control" name="tmptKerKul"
                                    id="tmptKerKul" placeholder="Tempat Bekerja / Kuliah" />
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

                    @endif
                </div>
            </div>
        </div>
    </section>
    @endauth
    <!-- End InputDataAlumni Section -->

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="detailAlumniMDL" data-backdrop="static" data-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Detail Data {{ $namaAlumni }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    {{-- @foreach ($listAlumni as $key => $value) --}}
                    {{-- {{ $value }} = {{  }} --}}
                    {{-- <hr> --}}
                    {{-- @endforeach --}}
                    {{-- @foreach($judulAlumni as $kode => $i)
                @foreach ($dat as $d)
                {{ $i }} = {{ $d }} <br>
                    @endforeach
                    @endforeach --}}

                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <p class="mb-1">Nama Alumni : <span>{{ $namaAlumni}}</span></p>
                                <hr class="mt-0">
                                <p class="mb-1">NIS Alumni : <span>{{ $nisAlumni}}</span></p>
                                <hr class="mt-0">
                                <p class="mb-1">Tempat Lahir : <span>{{ $tmptLahir}}</span></p>
                                <hr class="mt-0">
                                <p class="mb-1">Tanggal Lahir : <span>{{ $tglLahir}}</span></p>
                                <hr class="mt-0">
                                <p class="mb-1">No. HP : <span>{{ $telpAlumni}}</span></p>
                                <hr class="mt-0">
                                <p class="mb-1">Email : <span>{{ $emailAlumni}}</span></p>
                                <hr class="mt-0">
                                <p class="mb-1">Jenis Kelamin : <span>{{ $gender}}</span></p>
                                <hr class="mt-0">
                            </div>
                            <div class="col-sm">
                                <p class="mb-1">Jurusan : <span>{{ $jurusanAlumni}}</span></p>
                                <hr class="mt-0">
                                <p class="mb-1">Tahun Lulus : <span>{{ $thnLulus}}</span></p>
                                <hr class="mt-0">
                                <p class="mb-1">PKL : <span>{{ $pkl}}</span></p>
                                <hr class="mt-0">
                                <p class="mb-1">Pengalaman Kerja : <span>{{ $pengalamanKrj}}</span></p>
                                <hr class="mt-0">
                                <p class="mb-1">Status Pekerjaan : <span>{{ $statusPkrjaan}}</span></p>
                                <hr class="mt-0">
                                <p class="mb-1">Tempat Kerja / Kuliah : <span>{{ $tmptKerKul}}</span></p>
                                <hr class="mt-0">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                <button type="button" class="btn btn-danger" wire:click="deleteImg">Yakin</button> --}}
                </div>
            </div>
        </div>
    </div>
    {{-- @endforeach --}}

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="aksesMDL" data-backdrop="static" data-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="color: black" class="modal-title" id="staticBackdropLabel">
                    @if ($id_kode)
                    Update Kode Akses
                    @else
                    Create Kode Akses
                    @endif
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="submit" class="php-email-form">
                    {{-- @foreach($judulJmlh as $kode => $i) --}}
                    <div class="form-group">
                        <label for="kodeAkses" style="color: black">Kode Akses</label>
                        <input type="text" class="form-control" name="kodeAkses" id="kodeAkses"
                            wire:model.debounce.800ms="kodeAkses" />
                        @error('kodeAkses')
                        <span id="error-msg">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="noWaAdm" style="color: black">No. WhatsApp Admin</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">+62</div>
                            </div>
                            <input type="text" class="form-control" name="noWaAdm" id="noWaAdm"
                                wire:model.debounce.800ms="noWaAdm" />
                        </div>

                        @error('noWaAdm')
                        <span id="error-msg">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- @endforeach --}}
                    <div class="modal-footer">
                        <input type="hidden" name="id_kode" wire:model="id_kode">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        @if ($id_kode)
                        <button type="button" class="btn btn-primary"
                            wire:click="updateKode">Update</button>
                        @else
                        <button type="button" class="btn btn-primary"
                            wire:click="createKode">Create</button>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</main>
