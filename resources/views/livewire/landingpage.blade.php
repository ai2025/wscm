<main id="main">
    @foreach ($data as $data)
    
    <!-- {{-- Hero section --}} -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200" style="
        height: 200px;">
        
            <h1>{{ $data->nama }}</h1>
            
            {{-- <a href="#" class="btn-get-started scrollto">Get Started</a> --}}
        </div>
    </section><!-- End Hero -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container">
            @if (session()->has('msgUpdateJumlah'))
                    {{-- <p class="mb-0">{{ session('msgUpdateIdentitas') }}</p> --}}
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Yay!</strong> {{ session('msgUpdateJumlah') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
            @endif
            @if ($dataa->count())
            @foreach ($dataa as $dataa)
                {{-- @foreach ($data as $dataa) --}}
                <h2 id="header-count">SMK Negeri 1 Grujugan</h2>
                    <div class="row counters">
                        <div class="col-lg-3 col-6 text-center">
                            <span data-toggle="counter-up">{{ $dataa->jmlhSis }}</span>
                            <p>Jumlah Siswa</p>
                        </div>

                        <div class="col-lg-3 col-6 text-center">
                            <span data-toggle="counter-up">{{ $dataa->guru }}</span>
                            <p>Guru</p>
                        </div>

                        <div class="col-lg-3 col-6 text-center">
                            <span data-toggle="counter-up">{{ $dataa->kelas }}</span>
                            <p>Kelas</p>
                        </div>

                        <div class="col-lg-3 col-6 text-center">
                            <span data-toggle="counter-up">{{ $dataa->jurusan }}</span>
                            <p>Jurusan</p>
                        </div>
                    </div>
                    {{-- @endforeach --}}
                @auth
                {{-- @foreach ($data as $dataa) --}}
                <div>
                    <button type="button" class="btn btn-light" data-toggle="modal"
                        wire:click="loadDataJmlh({{ $dataa->id }})" data-target="#updateJumlahMDL">
                        Update Data
                    </button>
                </div>
                {{-- @endforeach --}}

                @endauth
                @endforeach
            @else
                <h1>Data Belum Tersedia</h1>
                @auth
                <div>
                    <button type="button" class="btn btn-light" data-toggle="modal"
                        data-target="#updateJumlahMDL" data-msg="">
                        Tambah Data
                    </button>
                </div>
                
                @endauth
                @endif
        </div>
            <!-- Modal -->
            <div wire:ignore.self class="modal fade" id="updateJumlahMDL" data-backdrop="static" data-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 style = "color: black" class="modal-title" id="staticBackdropLabel">
                            @if ($id_jmlh)
                            Update Jumlah
                            @else
                            Create Jumlah
                            @endif
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form wire:submit.prevent="submit" class="php-email-form">
                            @foreach($judulJmlh as $kode => $i)
                            {{-- @if ($code == 'alamat')
                            <label for="{{ __($code) }}">{{ __($item) }}</label>
                            <div class="form-group">
                                <textarea class="form-control" name="{{ __($code) }}" rows="2"
                                    wire:model.debounce.800ms="{{ __($code) }}"></textarea>
                                @error($code)
                                <span id="error-msg">{{ $message }}</span>
                                @enderror
                                <div class="validate"></div>
                            </div>
                            @else --}}
                            <div class="form-group">
                                <label for="{{ __($kode) }}" style="color: black"> {{ __($i) }}</label>
                                <input type="text" class="form-control" name="{{ __($kode) }}" id="{{ __($kode) }}"
                                    wire:model.debounce.800ms="{{ __($kode) }}" />
                                @error($kode)
                                <span id="error-msg">{{ $message }}</span>
                                @enderror

                            </div>
                            @endforeach
                        <div class="modal-footer">
                            <input type="hidden" name="id_jmlh" wire:model="id_jmlh">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            @if ($id_jmlh)
                            <button type="button" class="btn btn-primary" wire:click="updateJmlh">Update</button>
                            @else
                            <button type="button" class="btn btn-primary" wire:click="createJmlh">Create</button>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Counts Section -->

    <!-- Identitas Sekolah Section -->
    <section id="identitasSekolah" class="portfolio">
        <div class="container">
            <div class="section-title" data-aos="fade-left">
                <h2>Identitas Sekolah</h2>
            </div>
                        
            <div class="entry-content-page">
                <div class="table-responsive">
                    @if($data)
                    <table cellpadding="9">
                        <tbody>
                            <tr>
                                <th width="200px">Nama</th>
                                <th width="40px">:</th>
                                <th width="300px">{{ $data->nama }}</th>
                                            <!-- <th width="10.1%">Action</th> -->
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <th>Alamat</th>
                                <th>:</th>
                                <th>{{ $data->alamat }}</th>
                                            <!-- <th width="10.1%">Action</th> -->
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <th>Kabupaten</th>
                                <th>:</th>
                                <th>{{ $data->kab }}</th>
                                            <!-- <th width="10.1%">Action</th> -->
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <th>Website</th>
                                <th>:</th>
                                <th>{{ $data->web }}</th>
                                            <!-- <th width="10.1%">Action</th> -->
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <th>Telp.</th>
                                <th>:</th>
                                <th>{{ $data->telp }}</th>
                                            <!-- <th width="10.1%">Action</th> -->
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <th>Kode Pos</th>
                                <th>:</th>
                                <th>{{ $data->pos }}</th>
                                            <!-- <th width="10.1%">Action</th> -->
                            </tr>
                        </tbody>
                    @endif 
                    </table>
                            </div>
                        </div>
                {{-- </div> --}}
                
            {{-- </div> --}}

        </div>
    </section>

    <!-- ======= Team Section ======= -->
    <section id="jurusan" class="services section-bg">
        <div class="container">

            <div class="row">
                <div class="col-lg-4">
                    <div class="section-title" data-aos="fade-right">
                        <h2>Paket Keahlian</h2>
                        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem.</p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                      <div class="col-md-6 d-flex align-items-stretch">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                          <div class="icon"><i class="bx bxl-dribbble"></i></div>
                          <h4><a href="/agbsnsTani">Pertanian</a></h4>
                          <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                        </div>
                      </div>
        
                      <div class="col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                          <div class="icon"><i class="bx bx-file"></i></div>
                          <h4><a href="/agbsnsIkan">Perikanan</a></h4>
                          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                        </div>
                      </div>
        
                      <div class="col-md-6 d-flex align-items-stretch mt-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                          <div class="icon"><i class="bx bx-tachometer"></i></div>
                          <h4><a href="">Magni Dolores</a></h4>
                          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                        </div>
                      </div>
        
                      <div class="col-md-6 d-flex align-items-stretch mt-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
                          <div class="icon"><i class="bx bx-world"></i></div>
                          <h4><a href="">Nemo Enim</a></h4>
                          <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                        </div>
                      </div>
        
                    </div>
                  </div>

                @auth
                    <h1>AUTHORIZE</h1>
                @else
                    <h1>NO</h1>
                @endauth
            </div>

        </div>
    </section>
    <!-- End Team Section -->
    
    @endforeach
</main><!-- End #main -->