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
            <div class="section-title">
                <h2 class="mt-3">Visi, Misi dan Tujuan Sekolah</h2>

                @if (!$togglePage)
                <div class="row">

                    @if ($dataVMT->count())
                    <div class="col-md-6">
                        {{-- Visi --}}
                        <h3>Visi</h3>
                        <p>"isi visi "</p>
                        @auth
                        <button type="button" class="btn btn-success" wire:click="toggleEd(1)">Update Visi</button>
                        @endauth

                        {{-- Misi --}}
                        <h3>Misi</h3>
                        <p>"isi Misi "</p>
                        @auth
                        <button type="button" class="btn btn-success" wire:click="toggleEd(2)">Update Misi</button>
                        @endauth
                    </div>
                    <div class="col-md-6">
                        {{-- Tujuan --}}
                        <h3>Tujuan</h3>
                        <p>"isi tujuan "</p>
                        @auth
                        <button type="button" class="btn btn-success" wire:click="toggleEd(3)">Update Tujuan</button>
                        @endauth
                    </div>
                    @else
                    <div class="col-md-6">
                        {{-- Visi --}}
                        <h3>Visi (Belum ada dalam database)</h3>
                        <p>(Belum ada dalam database. Silahkan tambahkan data)</p>
                        @auth
                        <button type="button" class="btn btn-success" wire:click="toggleEd(1)">Tambah Visi</button>
                        @endauth

                        {{-- Misi --}}
                        <h3 class="mt-5">Misi (Belum ada dalam database)</h3>
                        <p>(Belum ada dalam database. Silahkan tambahkan data)</p>
                        @auth
                        <button type="button" class="btn btn-success" wire:click="toggleEd(2)">Tambah Misi</button>
                        @endauth
                    </div>
                    <div class="col-md-6">
                        {{-- Tujuan --}}
                        <h3>Tujuan (Belum ada dalam database)</h3>
                        <p>(Belum ada dalam database. Silahkan tambahkan data)</p>
                        @auth
                        <button type="button" class="btn btn-success" wire:click="toggleEd(3)">Tambah Tujuan</button>
                        @endauth
                    </div>
                    @endif

                </div>

                @else
                <div>
                    <form wire:submit.prevent="submit" class="php-email-form">
                        @if ($tev)
                        <div class="form-group">
                            <label for="title">Judul Konten untuk Visi :</label>
                            <input wire:model.debounce.800ms="title" type="text" name="title" class="form-control"
                                id="title" placeholder="Contoh: Visi Sekolah atau Visi, dll" />
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                            <label for="content" class="mt-3">Konten untuk Visi :</label>
                            @trix(\App\Blog::class, 'content')
                        </div>
                        <button type="button" class="btn btn-secondary" wire:click="toggleBack(1)">Close</button>
                        <button type="button" class="btn btn-primary float-right" wire:click="simpan(1)">Simpan</button>

                        @elseif($tem)
                        <div class="form-group">
                            <label for="title">Judul Konten untuk Misi :</label>
                            <input wire:model.debounce.800ms="title" type="text" name="title" class="form-control"
                                id="title" placeholder="Contoh: Misi Sekolah atau Misi, dll" />
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                            <label for="content" class="mt-3">Konten untuk Misi :</label>
                            @trix(\App\Blog::class, 'content')
                        </div>
                        <button type="button" class="btn btn-secondary" wire:click="toggleBack(2)">Close</button>
                        <button type="button" class="btn btn-primary float-right" wire:click="simpan(2)">Simpan</button>

                        @elseif($tedt)
                        <div class="form-group">
                            <label for="title">Judul Konten untuk Tujuan :</label>
                            <input wire:model.debounce.800ms="title" type="text" name="title" class="form-control"
                                id="title" placeholder="Contoh: Tujuan Sekolah atau Tujuan, dll" />
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                            <label for="content" class="mt-3">Konten untuk Tujuan :</label>
                            @trix(\App\Blog::class, 'content')
                        </div>
                        <button type="button" class="btn btn-secondary" wire:click="toggleBack(3)">Close</button>
                        <button type="button" class="btn btn-primary float-right" wire:click="simpan(3)">Simpan</button>

                        @endif

                        {{-- </div> --}}
                    </form>
                </div>

                @endif

            </div>

    </section>
    <!-- End visiMisiTujuan Section -->
</main>
