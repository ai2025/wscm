<main id="main">
    @foreach ($data as $data)
         <!-- {{-- Hero section --}} -->
         @if ($dataHero->count())
         @foreach ($dataHero as $i)
         <section id="heroo" class="d-flex align-items-center position-relative w-100"
             style="background: url({{ asset('storage/'.$i->imgIden) }}) center center !important; background-size: cover !important; position: relative !important;">
             @endforeach
             @else
             <section id="hero" class="d-flex align-items-center">
                 @endif
                 <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200" style="
             height: 200px;">
                     <h1>{{ $data->nama }}</h1>                
                 </div>
                 @if ($dataHero->count())
             </section>
             @else
         </section>
         @endif
    <!-- End Hero -->
    <!-- End Hero -->

    <!-- ======= fasSek Section ======= -->
    <section id="perikanan" class="portfolio">
        <div class="container">
            <div class="section-title" >
                @if ($togglePage && $id_blog)
                <h2>Update Agribisnis Pengolahan Hasil Perikanan</h2>
                @elseif ($togglePage)
                <h2>Create Agribisnis Pengolahan Hasil Perikanan</h2>
                @else
                <h2>Agribisnis Pengolahan Hasil Perikanan</h2>
                @endif                

                @if (session()->has('msg'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Yay!</strong> {{ session('msg') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @elseif (session()->has('msgErr'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>ERROR!</strong> {{ session('msgErr') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @elseif (session()->has('msgWar'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Warning!</strong> {{ session('msgWar') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                @if (!$togglePage)
                @if ($blog->count())
                @foreach ($blog as $item)
                {!! $item->trixRichText->first()->content !!}
                @endforeach
                @auth
                <button type="button" class="btn btn-outline-success mt-5" wire:click="loadID({{ $item->id }})">
                    Update Agribisnis Pengolahan Hasil Perikanan
                </button>
                @endauth
                @else
                <h4>Data Belum tersedia</h4>
                @auth
                <button type="button" class="btn btn-outline-success mt-5" wire:click="$toggle('togglePage')">
                    Tambah Agribisnis Pengolahan Hasil Perikanan
                </button>
                @endauth
                @endif
                @else
                @if ($id_blog)
                {{-- <h1>UPDATE</h1> --}}
                <form method="POST" action="/paketKeahlian/agbsnsIkan/{{ $id_blog }}" class="php-email-form" wire:ignore>
                    @method('patch')
                    @else
                    {{-- <h1>CREATE</h1> --}}
                    <form method="POST" action="/paketKeahlian/agbsnsIkan" class="php-email-form" wire:ignore>
                        @endif
                        @csrf
                        <div class="form-group">
                            <input type="hidden" name="tag" value="perikanan" required />
                            <input type="hidden" name="title" value="Agribisnis Pengolahan Hasil Perikanan" required />
                        </div>
                        <div class="form-group">
                            <label for="blog-trixFields">Konten:</label>
                            <div class="alert alert-warning" role="alert">
                                <h4 class="alert-heading">PERHATIAN!</h4>
                                <p>
                                    Mohon untuk MEMBACA dan MENGIKUTI instruksi dibawah ini.
                                </p>
                                <hr>
                                <p class="mb-0">
                                    Agar konten dapat tersimpan dengan baik, mohon untuk: 
                                    <ul>
                                        <li>Mengisi kolom konten dibawah ini sebelum menekan tombol "SUBMIT".</li>
                                        <li>File yang dapat diterima oleh sistem hanya berupa GAMBAR.</li>
                                        <li>Mohon untuk memberikan caption pada gambar (jika mengupload gambar).</li>
                                    </ul>
                                </p>
                            </div>
                            <div wire:ignore>
                            @if ($id_blog)
                            @foreach ($blog as $post)
                            {!! $post->trix('content') !!}
                            @endforeach
                            @else
                            @trix(\App\Models\Blog::class, 'content')
                            @endif
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary float-right" />
                        <button type="button" class="btn btn-secondary" wire:click="delete_pending()">
                            Close
                        </button>
                        @endif
            </div>
        </div>
    </section>
    @endforeach
</main>