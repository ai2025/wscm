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
                                {{-- <h1>{{ $data->nama }}</h1> --}}
                                <img src="{{ asset('storage/'.$dim->imgIden) }}" alt="yah belum bisa" title="{{ $data->nama }}"
                                class="mx-auto d-block" >
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
        </div>
    </section>
</main>
