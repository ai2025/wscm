<main id="main">
    {{-- <div> --}}
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <div class="portfolio-details-container">
                <div class="owl-carousel portfolio-details-carousel" id="owcar">
                    @if ($dataImg->count())
                    @foreach ($dataImg as $dim)
                    @if ($dim->kategori=='pkl')
                    <div>
                        <div class="text-center" style="background-color:#d3d3d3">
                            <img src="{{ asset('storage/'.$dim->imgIden) }}" alt="yah belum bisa"
                                class="w-auto mx-auto" style="margin-top: 120px; height: 450px;">
                        </div>
                        <div class="portfolio-info">
                            <p>
                                {{ $dim->keterangan }}
                            </p>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    @else
                    @for ($i = 0; $i < 3; $i++) 
                    <div>
                        <div class="text-center" style="background-color:#d3d3d3">
                            {{-- <img src="{{ asset('storage/'.$dim->imgIden) }}" alt="yah belum bisa"
                            style="height: 500px; margin-top: 100px; width: auto"> --}}
                            <img src="https://dummyimage.com/600x400/5c595c/ffffff" alt="yah belum bisa"
                                class="w-auto mx-auto" style="margin-top: 120px; height: 450px;">
                        </div>

                        <div class="portfolio-info">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus quod explicabo,
                                consectetur maiores totam sapiente temporibus quasi suscipit quis.
                            </p>
                        </div>
                    </div>
                    @endfor
                    @endif
                </div>
            </div>

            @auth
            <div class="portfolio-description">
                @if (session()->has('msgUpdateIdentitas'))
                    {{-- <p class="mb-0">{{ session('msgUpdateIdentitas') }}</p> --}}
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Yay!</strong> {{ session('msgUpdateIdentitas') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                    @endif
                <div>
                    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#imgModal"
                        data-msg="">
                        Tambah Gambar
                    </button>
                    <hr>
                    @if ($dataImg->count())
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tampil</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataImg as $dim)
                            @if ($dim->kategori=='pkl')
                            <tr>
                                <th scope="row">{{ $dim->id }}</th>
                                {{-- <td>{{ $dim->sequence }}</td> --}}
                                <td>{{ $dim->is_showing }}</td>
                                <td><img src="{{ asset('storage/'.$dim->imgIden) }}" alt="yah belum bisa"
                                        style="max-width: 100px"></td>
                                <td>{{ $dim->keterangan }}</td>
                                <td>
                                    <button type="button" class="btn btn-outline-warning" data-toggle="modal"
                                        data-target="#imgModal" wire:click="loadDataImg({{ $dim->id }})">
                                        Update
                                    </button>
                                    <button type="button" class="btn btn-outline-danger" data-toggle="modal"
                                        data-target="#deleteConfirm" wire:click="loadDataImg({{ $dim->id }})">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                    @else
                        <h3>Data Gambar Belum Ada</h3>
                    @endif
                </div>
            </div>
            @endauth
        </div>
    </section><!-- End Portfolio Details Section -->
    {{-- PKL --}}
    @auth
    <section class="services section-bg">
        <div class="container">
            <div class="section-title" data-aos="fade-left">
                <h2>PKL</h2>
            </div>
            {{-- TABEL --}}
            {{-- <div id="uk-tabel"> --}}
            <div class="entry-content-page">
                <div class="table-responsive">
                    @if (session()->has('msgUpdatePkl'))
                    {{-- <p class="mb-0">{{ session('msgUpdateIdentitas') }}</p> --}}
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Yay!</strong> {{ session('msgUpdatePkl') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                    @endif
                    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#updatePklMDL"
                    data-msg="">
                    Tambah Data PKL
                    </button>
                    <hr>
                    @if ($dataPkl->count())
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th width="40px">No.</th>
                                <th width="300px">Nama Instansi</th>
                                <th width="400px">Alamat Instansi</th>
                                <th width="200px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $no=1; @endphp
                        @foreach ($dataPkl as $dataPkl)
                            <tr>
                                <td>{{  $no++ }}</td>
                                <td>{{  $dataPkl->namaInstansi }}</td>
                                <td>{{  $dataPkl->alamatInstansi }}</td>
                                <td> 
                                    <button type="button" class="btn btn-outline-warning" data-toggle="modal"
                                    data-target="#updatePklMDL" wire:click="loadDataPkl({{ $dataPkl->id }})">
                                    Update
                                    </button>
                                    <button type="button" class="btn btn-outline-danger" data-toggle="modal"
                                    data-target="#deletePkl" wire:click="loadDataPkl({{ $dataPkl->id }})">
                                    Delete
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @else
                        <h1>Data PKL Belum Ada</h1>
                    @endif
                </div>
            </div>
        </div>
    </section>
    @else 
    <section class="services section-bg">
        <div class="container">
            <div class="section-title" data-aos="fade-left">
                <h2>PKL</h2>
            </div>
            {{-- TABEL --}}
            {{-- <div id="uk-tabel"> --}}
            <div class="entry-content-page">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th width="40px">No.</th>
                                <th width="300px">Nama Instansi</th>
                                <th width="400px">Alamat Instansi</th>
                                <!-- <th width="10.1%">Action</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            @php $no=1; @endphp
                        @foreach ($dataPkl as $dataPkl)
                            <tr>
                                <td>{{  $no++ }}</td>
                                <td>{{  $dataPkl->namaInstansi }}</td>
                                <td>{{  $dataPkl->alamatInstansi }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    @endauth
    {{-- Modal PKL --}}
    <div wire:ignore.self class="modal fade" id="updatePklMDL" data-backdrop="static" data-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 style = "color: black" class="modal-title" id="staticBackdropLabel">
                        @if ($id_pkl)
                        Update Data PKL
                        @else
                        Create Data PKL
                         @endif
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="reloadPage">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="submit" class="php-email-form">
                        @foreach($judul as $kode => $i)
                        @if ($kode == 'alamatInstansi')
                        <label for="{{ __($kode) }}">{{ __($i) }}</label>
                        <div class="form-group">
                            <textarea class="form-control" name="{{ __($kode) }}" rows="2"
                                wire:model.debounce.800ms="{{ __($kode) }}"></textarea>
                            @error($kode)
                            <span id="error-msg">{{ $message }}</span>
                            @enderror
                            {{-- <div class="validate"></div> --}}
                        </div>
                        @else
                        <div class="form-group">
                            <label for="{{ __($kode) }}" style="color: black"> {{ __($i) }}</label>
                            <input type="text" class="form-control" name="{{ __($kode) }}" id="{{ __($kode) }}"
                                wire:model.debounce.800ms="{{ __($kode) }}" />
                            @error($kode)
                            <span id="error-msg">{{ $message }}</span>
                            @enderror
                        </div>
                        @endif
                        @endforeach
                        <div class="modal-footer">
                            <input type="hidden" name="id_pkl" wire:model="id_pkl">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" wire:click="reloadPage">Close</button>
                                @if ($id_pkl)
                                <button type="button" class="btn btn-primary" wire:click="updatePkl">Update</button>
                                @else
                                <button type="button" class="btn btn-primary" wire:click="createPkl">Create</button>
                                @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="deletePkl" data-backdrop="static" data-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Delete Confirmation{{ $id_pkl }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        wire:click="reloadPage">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus Data Pkl ini?
                    {{ $namaInstansi }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                        wire:click="reloadPage">Tidak</button>
                    <button type="button" class="btn btn-danger" wire:click="deletePkl">Yakin</button>
                </div>
            </div>
        </div>
    </div>

        <!-- End visiMisiTujuan Section -->

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="imgModal" data-backdrop="static" data-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">
                        @if ($id_img)
                        Update Gambar Slider {{ $id_img }}
                        @else
                        Tambah Gambar Slider
                        @endif
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="reloadPage">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="submit" class="php-email-form">
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea class="form-control" name="keterangan" rows="2"
                                wire:model.debounce.800ms="keterangan"></textarea>
                            @error('keterangan')
                            <span id="error-msg">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="is_showing"
                                wire:model.debounce.800ms="is_showing">
                            <label class="form-check-label" for="is_showing">Is Showing</label>
                        </div>
                        <div class="form-group">
                            <div x-data="{ isUploading: false, progress: 0 }"
                                x-on:livewire-upload-start="isUploading = true"
                                x-on:livewire-upload-finish="isUploading = false"
                                x-on:livewire-upload-error="isUploading = false"
                                x-on:livewire-upload-progress="progress = $event.detail.progress">
                                @if (!$id_img)
                                @if ($imgIdent)
                                Photo Preview:
                                <br>
                                <img src="{{ $imgIdent->temporaryUrl() }}"
                                    style="max-width:100px;max-height:100px">
                                <br>
                                @endif
                                @else
                                @if ($tempImg)
                                Photo Preview:
                                <br>
                                <img src="{{ $tempImg->temporaryUrl() }}"
                                    style="max-width:100px;max-height:100px">
                                <br>
                                @endif
                                @endif
                                    {{-- @if ($imgIdent)
                                            Photo Preview:
                                            <img src="{{ $imgIdent->temporaryUrl() }}">
                                    <br>
                                    @endif --}}
                                <label for="imgIdent">Gambar Slider {{ $imgIdent }}</label>
                                    {{-- <br> --}}
                                    {{-- <label>{{ $imgIdent }}</label> --}}
                                @if ($id_img)
                                <input type="file" class="form-control" name="tempImg" id="tempImg"
                                    wire:model.debounce.800ms="tempImg" />
                                @else
                                <input type="file" class="form-control" name="imgIdent" id="imgIdent"
                                    wire:model.debounce.800ms="imgIdent" />
                                @endif
                                    {{-- <div wire:loading wire:target="imgIdent">Uploading...</div> --}}
                                <div x-show="isUploading">
                                    <progress max="100" x-bind:value="progress"></progress>
                                </div>
                            </div>
                            @error('imgIdent')
                            <span id="error-msg">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="modal-footer">
                        {{-- <input type="hidden" name="id_img" wire:model="id_img"> --}}
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                wire:click="reloadPage">Close</button>
                            @if ($id_img)
                            <button type="button" class="btn btn-primary" wire:click="updateImg">Update</button>
                            @else
                            <button type="button" class="btn btn-primary" wire:click="createImg">Create</button>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

        <!-- Modal -->
        <div wire:ignore.self class="modal fade" id="deleteConfirm" data-backdrop="static" data-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Delete Confirmation{{ $id_img }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            wire:click="reloadPage">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Apakah Anda yakin ingin menghapus Data Gambar ini?
                        {{ $keterangan }}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                            wire:click="reloadPage">Tidak</button>
                        <button type="button" class="btn btn-danger" wire:click="deleteImg">Yakin</button>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>
    {{-- </div> --}}
</main>

