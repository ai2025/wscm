<main id="main">
    @foreach ($data as $data)
    <section id="hero" class="d-flex align-items-center">
        <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
            <h1>{{ $data->nama }}</h1>
            {{-- <a href="#" class="btn-get-started scrollto">Get Started</a> --}}
        </div>
    </section>
    @endforeach

    <!-- ======= Visi Misi Tujuan Section ======= -->
    <section id="vmt" class="portfolio">
        <div class="container">
            @if (session()->has('msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Yay!</strong> {{ session('msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <div class="section-title">
                <h2 class="mt-3">Visi, Misi dan Tujuan Sekolah</h2>

                @if (!$togglePage)
                <div class="row">

                    <div class="col-md-6">
                        {{-- Visi --}}
                        @if ($dataV->count())
                        @foreach ($dataV as $i)
                        <h3>{{ $i->title }}</h3>
                        {!! $i->trixRichText->first()->content !!}
                        @auth
                        <button type="button" class="btn btn-success mb-5 mt-2" wire:click="loadData({{ $i->id }}, 1)">
                            Update Visi</button>
                        @endauth
                        @endforeach
                        @else
                        <h3>Visi (Belum ada dalam database)</h3>
                        <p>(Belum ada dalam database. Silahkan tambahkan data)</p>
                        @auth
                        <button type="button" class="btn btn-success" wire:click="toggleEd(1)">Tambah Visi</button>
                        @endauth
                        @endif

                        {{-- Misi --}}
                        @if ($dataM->count())
                        @foreach ($dataM as $i)
                        <h3>{{ $i->title }}</h3>
                        {!! $i->trixRichText->first()->content !!}
                        @auth
                        <button type="button" class="btn btn-success mb-5 mt-2" wire:click="loadData({{ $i->id }}, 2)">
                            Update Misi</button>
                        @endauth
                        @endforeach
                        @else
                        <h3>Misi (Belum ada dalam database)</h3>
                        <p>(Belum ada dalam database. Silahkan tambahkan data)</p>
                        @auth
                        <button type="button" class="btn btn-success" wire:click="toggleEd(2)">Tambah Misi</button>
                        @endauth
                        @endif
                    </div>

                    <div class="col-md-6">
                        {{-- Tujuan --}}
                        @if ($dataT->count())
                        @foreach ($dataT as $i)
                        <h3>{{ $i->title }}</h3>
                        {!! $i->trixRichText->first()->content !!}
                        @auth
                        <button type="button" class="btn btn-success mb-5 mt-2" wire:click="loadData({{ $i->id }}, 3)">
                            Update Tujuan</button>
                        @endauth
                        @endforeach
                        @else
                        <h3>Tujuan (Belum ada dalam database)</h3>
                        <p>(Belum ada dalam database. Silahkan tambahkan data)</p>
                        @auth
                        <button type="button" class="btn btn-success" wire:click="toggleEd(3)">Tambah Tujuan</button>
                        @endauth
                        @endif
                    </div>
                </div>

                @else
                <div>
                    {{-- <form wire:submit.prevent="submit" class="php-email-form"> --}}
                    @if ($id_blog)
                    {{ $id_blog }} EDIT
                    <form method="POST" action="/profil/visiMisiTujuan/{{ $id_blog }}" class="php-email-form" wire:ignore>
                        @method('patch')
                    @else
                    <form method="POST" action="/profil/visiMisiTujuan" class="php-email-form" wire:ignore>                    
                    @endif
                        @csrf
                        @if ($tev)                        
                        {{-- @foreach ($dataV as $i) --}}
                        <div class="form-group">
                            <input type="hidden" name="tag" value="visi" wire:model.debounce.800ms="tag" required/>
                            @foreach ($dataV as $post)
                            <input name="id_blog" value="{{ $post->id }}" wire:model.debounce.800ms="id_blog" required/>
                            @endforeach
                            @error('tag') <p class="text-danger">{{ $message }}</p> @enderror
                        </div>
                        <div class="form-group">
                            <label for="title">Judul Konten untuk Visi :</label>
                            <input type="text" name="title" class="form-control" id="title" value="{{ $title }}"
                                placeholder="Contoh: Visi Sekolah atau Visi, dll" wire:model.debounce.800ms="title" required />
                            @error('title') <p class="text-danger">{{ $message }}</p> @enderror
                        </div>
                        <div class="form-group">
                            <label for="blog-trixFields" class="mt-3">Konten untuk Visi :</label>
                            {{-- <textarea id="blog-trixFields" cols="30" rows="10"></textarea> --}}
                            <div wire:ignore>
                                @if ($id_blog)
                                @foreach ($dataV as $post)
                                {!! $post->trix('content') !!}
                                @endforeach
                                @else
                                    @trix(\App\Models\Blog::class, 'content')
                                    @error('content') <p class="text-danger">{{ $message }}</p> @enderror
                                @endif
                            </div>
                        </div>
                        {{-- <button type="button" class="btn btn-primary float-right" wire:click="create">Simpan</button> --}}
                        <input type="submit" class="btn btn-primary float-right" />
                        <button type="button" class="btn btn-secondary" wire:click="toggleBack(1)">Close</button>
                        {{-- @endforeach --}}

                        @elseif($tem)
                        {{-- <div class="form-group">
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
                        <input type="submit" class="btn btn-primary float-right" /> --}}
                        <button type="button" class="btn btn-secondary" wire:click="toggleBack(2)">Close</button>

                        @elseif($tedt)
                        {{-- <div class="form-group">
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
                        <input type="submit" class="btn btn-primary float-right" /> --}}
                        <button type="button" class="btn btn-secondary" wire:click="toggleBack(3)">Close</button>
                        @endif
                    </form>
                </div>
                @endif

            </div>
        </div>

    </section>
    <!-- End visiMisiTujuan Section -->
</main>
{{-- @push('scripts')
<script>
    // Your JS here.
    var editor = new MediumEditor('.editable');
    // editor.subscribe('blur', function (event, editable) {
    //     @this.set('content.about.description', editor.getContent());
    // });

</script>
@endpush --}}
