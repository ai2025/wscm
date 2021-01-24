<main id="main">
    @foreach ($data as $data)
    <section id="hero" class="d-flex align-items-center">
        <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
            <h1>{{ $data->nama }}</h1>
        </div>
    </section>
    @endforeach

    <!-- ======= Visi Misi Tujuan Section ======= -->
    <section id="vmt" class="portfolio">
        <div class="container">
            @if (session()->has('msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Yay!</strong> {{ session('msg') }}
                <button type="button" class="Back" data-dismiss="alert" aria-label="Back">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            <div class="section-title">
                <h2 class="mt-3">Visi, Misi dan Tujuan Sekolah</h2>

                <div>
                    {{-- <form wire:submit.prevent="submit" class="php-email-form"> --}}
                    {{-- @if ($id_blog)
                    {{ $id_blog }} EDIT
                    <form method="POST" action="/profil/visiMisiTujuan" class="php-email-form" wire:ignore>
                        @method('patch')
                        @else --}}
                        <form method="POST" action="/profil/visiMisiTujuan" class="php-email-form">
                            {{-- @endif --}}
                            @csrf
                            @if ($tev)
                            {{-- @foreach ($dataV as $i) --}}
                            <div class="form-group">
                                <input type="hidden" name="tag" value="visi" required />
                                {{-- <input type="hidden" name="id_blog" value="{{ $id_blog }}" required /> --}}
                                {{-- @error('tag') <p class="text-danger">{{ $message }}</p> @enderror --}}
                            </div>
                            @if ($id_blog)
                            @foreach ($findID as $post)
                            <div class="form-group">
                                <label for="title">Judul Konten untuk Visi :</label>
                                <input type="text" name="title" class="form-control" id="title"
                                    placeholder="Contoh: Visi Sekolah atau Visi, dll" value="{{ $post->title }}"
                                    required />
                                {{-- @error('title') <p class="text-danger">{{ $message }}</p> @enderror --}}
                            </div>
                            <div class="form-group">
                                <label for="blog-trixFields" class="mt-3">Konten untuk Visi :</label>
                                <div wire:ignore>
                                    {!! $post->trix('content') !!}
                                </div>
                            </div>
                            @endforeach
                            @else
                            <div class="form-group">
                                <label for="title">Judul Konten untuk Visi :</label>
                                <input type="text" name="title" class="form-control" id="title"
                                    placeholder="Contoh: Visi Sekolah atau Visi, dll" required />
                                {{-- @error('title') <p class="text-danger">{{ $message }}</p> @enderror --}}
                            </div>
                            <div class="form-group">
                                <label for="blog-trixFields" class="mt-3">Konten untuk Visi :</label>
                                <div wire:ignore>
                                    @trix(\App\Models\Blog::class, 'content')
                                </div>
                            </div>
                            @endif
                            {{-- <button type="button" class="btn btn-primary" wire:click="simpan">Simpan</button> --}}
                            <input type="submit" class="btn btn-primary float-right" />
                            <a href="/profil/visiMisiTujuan"><button type="button" class="btn btn-secondary">Back</button></a>
                            {{-- @endforeach --}}

                            @elseif($tem)
                            <div class="form-group">
                                <input type="hidden" name="tag" value="misi" required />
                                @error('tag') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="form-group">
                                <label for="title">Judul Konten untuk Misi :</label>
                                <input type="text" name="title" class="form-control" id="title"
                                    placeholder="Contoh: Misi Sekolah atau Misi, dll" required />
                                @error('title') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="form-group">
                                <label for="blog-trixFields" class="mt-3">Konten untuk Misi :</label>
                                <div wire:ignore>
                                    @trix(\App\Models\Blog::class, 'content')
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary float-right" />
                            <a href="/profil/visiMisiTujuan"><button type="button" class="btn btn-secondary">Back</button></a>

                            @elseif($tedt)
                            <div class="form-group">
                                <input type="hidden" name="tag" value="tujuan" required />
                                @error('tag') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="form-group">
                                <label for="title">Judul Konten untuk Tujuan :</label>
                                <input type="text" name="title" class="form-control" id="title"
                                    placeholder="Contoh: Tujuan Sekolah atau Tujuan, dll" required />
                                @error('title') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="form-group">
                                <label for="blog-trixFields" class="mt-3">Konten untuk Tujuan :</label>
                                <div wire:ignore>
                                    @trix(\App\Models\Blog::class, 'content')
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary float-right" />
                            <a href="/profil/visiMisiTujuan"><button type="button" class="btn btn-secondary">Back</button></a>
                            @endif
                        </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End visiMisiTujuan Section -->
</main>
{{-- @push('scripts')
<script>
    var content = document.querySelector("trix-editor")
    var file = document.querySelector("input[type=file]").file
    // element.editor.insertFile(file)
    var document = content.editor.getDocument()
    console.log(document.toString());

</script>
<script type="text/javascript" src="{{ asset('js/attachments.js') }}"></script>
@endpush --}}
