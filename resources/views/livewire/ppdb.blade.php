<main id="main">
    {{-- <meta charset="UTF-8"> --}}
        @foreach ($data as $data)
        @if ($dataImg->count()<=0)
        <section id="hero" class="d-flex align-items-center" >
        @else
        @foreach ($dataImg as $dim)
            <section id="hero" class="d-flex align-items-center" style = "background: {{ asset('storage/'.$dim->imgIden) }} ">
                <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200" >
                    @if ($dim->kategori=='header')
                        <div>
                            <div class="text-center">
                                <h1>{{ $data->nama }}</h1>
                                <img src="{{ asset('storage/'.$dim->imgIden) }}" alt="yah belum bisa"
                                class="gambar" >
                            </div>
                        </div>
                    @endif
                </div>
            </section>
        @endforeach
        @endif
        </section>
            @auth
            <div class="portfolio-description">
                <div id=btn-update>
                    <hr>
                    @if (session()->has('msgUpdateGambar'))
                    {{-- <p class="mb-0">{{ session('msgUpdateIdentitas') }}</p> --}}
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Yay!</strong> {{ session('msgUpdateGambar') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                    @endif
                    @if ($dataImg->count())
                        <button type="button" class="btn btn-warning" data-toggle="modal"
                            data-target="#imgModal" wire:click="loadDataImg({{ $dim->id }})">
                            Update Gambar
                        </button>
                                    {{-- <button type="button" class="btn btn-outline-danger" data-toggle="modal"
                                        data-target="#deleteConfirm" wire:click="loadDataImg({{ $dim->id }})">
                                        Delete
                                    </button> --}}
                               
                    @else
                    <br>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#imgModal"
                        data-msg="">
                        Tambah Gambar
                    </button>
                    @endif
                </div>
                <section id="ppdb" class="portfolio">
                    <div class="container">
                        <div class="section-title" data-aos="fade-left">
                            <h2>PPDB</h2>
                            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.
                            Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque 
                            laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi 
                            architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas 
                            sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione 
                            voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, 
                            amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, 
                            ut labore et dolore magnam aliquam quaerat voluptatem.
                            </p>
                        </div>
                    </div>
                </section>
            </div>
            @else
            <section id="ppdb" class="portfolio">
                <div class="container">
                    <div class="section-title" data-aos="fade-left">
                        <h2>PPDB</h2>
                        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.
                            Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque 
                            laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi 
                            architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas 
                            sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione 
                            voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, 
                            amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, 
                            ut labore et dolore magnam aliquam quaerat voluptatem.
                        </p>
                    </div>
                </div>
            </section>
            @endauth
            <!-- Modal -->
            <div wire:ignore.self class="modal fade" id="imgModal" data-backdrop="static" data-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">
                                @if ($id_img)
                                Update Gambar {{ $id_img }}
                                @else
                                Tambah Gambar
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
            {{-- Modal --}}
        @endforeach
    </main>