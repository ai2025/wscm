    <main id="main">
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">
                <div class="portfolio-details-container">
                    <div class="owl-carousel portfolio-details-carousel" id="owcar">
                        @if ($dataImg->count())
                        @foreach ($dataImg as $dim)
                        @if ($dim->kategori=='identitas')
                        <div>
                            <div class="text-center" style="background-color:#d3d3d3">
                                {{-- <img src="{{ asset('storage/'.$dim->imgIden) }}" alt="yah belum bisa"
                                style="height: 500px; margin-top: 100px; width: auto"> --}}
                                <img src="{{ asset('storage/'.$dim->imgIden) }}" alt="yah belum bisa"
                                    class="w-auto mx-auto" style="margin-top: 120px; height: 450px;">
                            </div>

                            <div class="portfolio-info">
                                <p>
                                    {{ $dim->keterangan }}
                                </p>
                                {{-- <h3>Project information</h3>
                                    <ul>
                                        <li><strong>Category</strong>: Web design</li>
                                        <li><strong>Client</strong>: ASU Company</li>
                                        <li><strong>Project date</strong>: 01 March, 2020</li>
                                        <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
                                    </ul> --}}
                            </div>
                        </div>
                        @endif
                        @endforeach
                        @else
                        @for ($i = 0; $i < 3; $i++) <div>
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
                                {{-- <h3>Project information</h3>
                                    <ul>
                                        <li><strong>Category</strong>: Web design</li>
                                        <li><strong>Client</strong>: ASU Company</li>
                                        <li><strong>Project date</strong>: 01 March, 2020</li>
                                        <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
                                    </ul> --}}
                            </div>
                    </div>
                    @endfor
                    @endif
                </div>
            </div>

            @auth
            <div class="portfolio-description">
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
                            @if ($dim->kategori=='identitas')
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
        <section class="services section-bg">
            <div class="container">
                <!-- ======= Identitas Sekolah Section ======= -->
                @auth
                <div class="row">
                    <div class="col-lg-12">
                        <div class="entry-content-page">
                            <div class="alert alert-warning mt-4" role="alert">
                                <h4 class="alert-heading">Selamat Datang, Admin!</h4>
                                <p>
                                    Agar update berjalan dengan baik, mohon isi data-data dengan baik dan benar.
                                    Terimakasih.
                                </p>
                                <hr>
                                <p class="mb-0">Cek kembali data pada kolom input sebelum melakukan update.</p>
                            </div>

                            @if (session()->has('msgUpdateIdentitas'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Yay!</strong> {{ session('msgUpdateIdentitas') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                @endauth
                @if ($data->count())
                @foreach ($data as $isi)
                <div class="d-block align-items-stretch">
                    <div class="icon-box">
                        <div class="section-title">
                            <h4 class="mt-4"><a style="cursor: context-menu;">Identitas Sekolah</a></h4>
                        </div>
                        <ul class="list-group list-group-flush text-left mt-3 pr-5 pl-5 pb-3">
                            @php
                            $count = 0;
                            $co = 0;
                            @endphp
                            <div class="row">
                                <div class="col list-group-flush">
                                    @foreach($judul as $code => $item)
                                    @if ($count < 5) <li class="list-group-item border-bottom">
                                        <p>
                                            {{ __($item) }} &ensp; : &ensp; {{ $isi->$code }}
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
                                    @if ($co < 5) @php $co++; @endphp @else <li class="list-group-item border-bottom">
                                        <p>
                                            {{ __($item) }} &ensp; : &ensp; {{ $isi->$code }}
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

                        @auth
                        <div>
                            <button type="button" class="btn btn-outline-success" data-toggle="modal"
                                wire:click="loadData({{ $isi->id }})" data-target="#updateIdentitasMDL">
                                Update Data
                            </button>
                        </div>
                        @endauth
                    </div>
                </div>
                @endforeach
                @else
                <h1>Data Belum Tersedia</h1>
                @auth
                <div>
                    <button type="button" class="btn btn-outline-success" data-toggle="modal"
                        data-target="#updateIdentitasMDL">
                        Tambah Data
                    </button>
                </div>
                @endauth
                @endif
                <!-- End visiMisiTujuan Section -->

                <!-- Modal -->
                <div wire:ignore.self class="modal fade" id="updateIdentitasMDL" data-backdrop="static"
                    data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">
                                    @if ($id_identitas)
                                    Update Identitas Sekolah
                                    @else
                                    Create Identitas Sekolah
                                    @endif

                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                    wire:click="reloadPage">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form wire:submit.prevent="submit" class="php-email-form">
                                    @foreach($judul as $code => $item)
                                    @if ($code == 'alamat')
                                    <label for="{{ __($code) }}">{{ __($item) }}</label>
                                    <div class="form-group">
                                        <textarea class="form-control" name="{{ __($code) }}" rows="2"
                                            wire:model.debounce.800ms="{{ __($code) }}"></textarea>
                                        @error($code)
                                        <span id="error-msg">{{ $message }}</span>
                                        @enderror
                                        {{-- <div class="validate"></div> --}}
                                    </div>
                                    @else
                                    <div class="form-group">
                                        <label for="{{ __($code) }}">{{ __($item) }}</label>
                                        <input type="text" class="form-control" name="{{ __($code) }}"
                                            id="{{ __($code) }}" wire:model.debounce.800ms="{{ __($code) }}" />
                                        @error($code)
                                        <span id="error-msg">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    @endif
                                    @endforeach
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" name="id_identitas" wire:model="id_identitas">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                    wire:click="reloadPage">Close</button>
                                @if ($id_identitas)
                                <button type="button" class="btn btn-primary" wire:click="update">Update</button>
                                @else
                                <button type="button" class="btn btn-primary" wire:click="create">Create</button>
                                @endif
                            </div>
                            </form>
                        </div>
                    </div>
                </div>


                <!-- Modal -->
                <div wire:ignore.self class="modal fade" id="imgModal" data-backdrop="static" data-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">
                                    @if ($id_img)
                                    Update Gambar Slider
                                    @else
                                    Tambah Gambar Slider
                                    @endif
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                    wire:click="reloadPage">
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
                                </div>
                            <div class="modal-footer">
                                {{-- <input type="hidden" name="id_img" wire:model="id_img"> --}}
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                    wire:click="reloadPage">Close</button>
                                @if ($id_img)
                                <button type="button" class="btn btn-primary" wire:click="updateImg">Update</button>
                                @else
                                <button type="button" class="btn btn-primary" wire:click="createImgIden">Create</button>
                                @endif
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div wire:ignore.self class="modal fade" id="deleteConfirm" data-backdrop="static" data-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Delete Confirmation</h5>
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
    {{-- <script>
        $(document).ready(function () {
            // var owl = $("#owcar");

            $('.btn').click(function () {
                // owl.trigger('owl.play', 2200);
                $(".portfolio-details-carousel").owlCarousel({
                    autoplay: true,
                    dots: true,
                    loop: true,
                    items: 1
                });
            });

            // $('#updateIdentitasMDL').on('hidden.bs.modal', function () {
            //     owl.trigger('owl.play', 2200);
            //     // owl.trigger('owl.play', 2200);
            // });

            // $('#updateIdentitasMDL').on('show.bs.modal', function () {
            //     owl.trigger('owl.stop');
            // });

            // $('#updateIdentitasMDL').on('hidden.bs.modal', function () {
            //     owl.trigger('owl.next');
            // });
            // $('#imgModal').on('hidden.bs.modal', function () {
            //     owl.trigger('owl.play', 2200);
        });

    </script> --}}
