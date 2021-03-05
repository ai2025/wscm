<main id="main">
    @foreach ($data as $data)

    <!-- {{-- Hero section --}} -->
    @if ($dataHero->count())
    @foreach ($dataHero as $i)
    <section id="heroo" class="d-flex align-items-center position-relative w-100"
        style="background: url({{ 'storage/'.$i->imgIden }}) center center !important; background-size: cover !important; position: relative !important;">
        @endforeach
        @else
        <section id="hero" class="d-flex align-items-center">
            @endif
            <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200" style="
        height: 200px;">
                <h1>{{ $data->nama }}</h1>
                @auth
                @if ($dataHero->count())
                @foreach ($dataHero as $dh)
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#heroMDL"
                    wire:click="loadDataHero({{ $dh->id }})">
                    Update Background
                </button>
                @endforeach
                @else
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#heroMDL">
                    Tambah Background
                </button>
                @endif
                @endauth
            </div>
            @if ($dataHero->count())
        </section>
        @else
    </section>
    @endif
    <!-- End Hero -->

    <!-- ======= Counts Section ======= -->
    {{-- <section id="counts" class="counts">
        <div class="container">
            @if (session()->has('msgUpdateJumlah')) --}}
            {{-- <p class="mb-0">{{ session('msgUpdateIdentitas') }}</p> --}}
            {{-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Yay!</strong> {{ session('msgUpdateJumlah') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            @if ($dataa->count())
            @foreach ($dataa as $dataa) --}}
            {{-- @foreach ($data as $dataa) --}}
            {{-- <h2 class="mx-auto text-center">SMK Negeri 1 Grujugan</h2>
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

            @auth
            <div class="mx-auto text-center">
                <button type="button" class="btn btn-light" data-toggle="modal"
                    wire:click="loadDataJmlh({{ $dataa->id }})" data-target="#updateJumlahMDL">
                    Update Data
                </button>
            </div>
            @endauth

            @endforeach
            @else
            <h1>Data Belum Tersedia</h1>
            @auth
            <div class="mx-auto text-center">
                <button type="button" class="btn btn-light" data-toggle="modal" data-target="#updateJumlahMDL"
                    data-msg="">
                    Tambah Data
                </button>
            </div>

            @endauth
            @endif
        </div> --}}
        <!-- Modal -->
        {{-- <div wire:ignore.self class="modal fade" id="updateJumlahMDL" data-backdrop="static" data-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 style="color: black" class="modal-title" id="staticBackdropLabel">
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
        </div>
    </section> --}}
    <!-- End Counts Section -->

    <!-- Identitas Sekolah Section -->
    <section class="services section-bg" style="background-color: rgb(247, 247, 247) !important;">
        <div class="container">
            <div class="section-title" data-aos="fade-left">
                <h2>Identitas Sekolah</h2>
            </div>

            <div class="d-block align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box">
                    <ul class="list-group list-group-flush text-left mt-3 pr-5 pl-5 pb-3">
                        @php
                        $count = 0;
                        $co = 0;
                        @endphp
                        <div class="row">
                            <div class="col list-group-flush">
                                @foreach($judul as $code => $item)
                                @if ($count < 3) <li class="list-group-item border-bottom">
                                    <p>
                                        {{ __($item) }} &ensp; : &ensp; {{ $data->$code }}
                                    </p>
                                    </li>
                                    @php
                                    $count++;
                                    @endphp
                                    @endif
                                    @endforeach
                            </div>
                            <div class="col list-group-flush">
                                @foreach($judul as $code => $item)
                                @if ($co < 3) @php $co++; @endphp @else <li class="list-group-item border-bottom">
                                    <p>
                                        {{ __($item) }} &ensp; : &ensp; {{ $data->$code }}
                                    </p>
                                    </li>
                                    @php
                                    $co++;
                                    @endphp
                                    @endif
                                    @endforeach
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= Team Section ======= -->
    <section id="jurusan" class="services section-bg" style="background-color: rgb(243, 243, 243) !important;">
        <div class="container">

            <div class="row">
                <div class="col-lg-4">
                    <div class="section-title" data-aos="fade-right">
                        <h2>Paket Keahlian</h2>
                        {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem.</p> --}}
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                                <div class="icon"><i class="bx bx-spa"></i></div>
                                <h4><a href="{{ url('/paketKeahlian/agbsnsTani') }}">Agribisnis Pengolahan Hasil Pertanian</a></h4>
                                {{-- <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> --}}
                            </div>
                        </div>

                        <div class="col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                                <div class="icon"><i class="bx bx-water"></i></div>
                                <h4><a href="{{ url('/paketKeahlian/agbsnsIkan') }}">Agribisnis Pengolahan Hasil Perikanan</a></h4>
                                {{-- <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p> --}}
                            </div>
                        </div>

                        {{-- <div class="col-md-6 d-flex align-items-stretch mt-4">
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
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Section -->
    @endforeach

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="heroMDL" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 style="color: black" class="modal-title" id="staticBackdropLabel">
                        @if ($id_hero)
                        Update Gambar Background {{ $id_hero }}
                        @else
                        Create Gambar Background
                        @endif
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="submit" class="php-email-form">
                        <div class="form-group">
                            <div x-data="{ isUploading: false, progress: 0 }"
                                x-on:livewire-upload-start="isUploading = true"
                                x-on:livewire-upload-finish="isUploading = false"
                                x-on:livewire-upload-error="isUploading = false"
                                x-on:livewire-upload-progress="progress = $event.detail.progress">
                                @if (!$id_hero)
                                @if ($imgIden)
                                Photo Preview:
                                <br>
                                <img src="{{ $imgIden->temporaryUrl() }}" style="max-width:100px;max-height:100px">
                                <br>
                                @endif
                                @else
                                @if ($tempImg)
                                Photo Preview:
                                <br>
                                <img src="{{ $tempImg->temporaryUrl() }}" style="max-width:100px;max-height:100px">
                                <br>
                                @endif
                                @endif
                                {{-- @if ($imgIdent)
                                    Photo Preview:
                                    <img src="{{ $imgIdent->temporaryUrl() }}">
                                <br>
                                @endif --}}
                                <label for="imgIden">Gambar Slider {{ $imgIden }}</label>
                                {{-- <br> --}}
                                {{-- <label>{{ $imgIdent }}</label> --}}
                                @if ($id_hero)
                                <input type="file" class="form-control" name="tempImg" id="tempImg"
                                    wire:model.debounce.800ms="tempImg" />
                                @else
                                <input type="file" class="form-control" name="imgIden" id="imgIden"
                                    wire:model.debounce.800ms="imgIden" />
                                @endif
                                {{-- <div wire:loading wire:target="imgIdent">Uploading...</div> --}}
                                <div x-show="isUploading">
                                    <progress max="100" x-bind:value="progress"></progress>
                                </div>
                            </div>
                            @error('imgIden')
                            <span id="error-msg">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            @if ($id_hero)
                            <button type="button" class="btn btn-primary" wire:click="updateHero">Update</button>
                            @else
                            <button type="button" class="btn btn-primary" wire:click="createHero">Create</button>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</main><!-- End #main -->
