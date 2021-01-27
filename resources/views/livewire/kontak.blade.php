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
            </div>
            @if ($dataHero->count())
        </section>
        @else
    </section>
    @endif
    <!-- End Hero -->

    
    <section id="kontak" class="contact mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
                <div class="section-title">
                    <h2 id="isi-kontak">Kontak Kami</h2>
                    {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
                </div>
            </div>

            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                <div id="peta">
                    <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.156461638868!2d113.79144141432856!3d-7.98277258180706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6c25faf2a77d5%3A0xeb3bbc29cec7fcfb!2sSMK%20Negeri%201%20Grujugan!5e0!3m2!1sid!2sid!4v1609817210723!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
                        <div class="info mt-4">
                            <i class="icofont-google-map"></i>
                            <h4>Lokasi:</h4>
                            <p>{{ $data->alamat }}, {{ $data->kab }}, {{ $data->provinsi }} {{ $data->pos }}</p>
                        </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mt-4">
                        <div class="info">
                            <i class="icofont-envelope"></i>
                            <h4>Email:</h4>
                            <p>{{ $data->email }}</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="info w-100 mt-4">
                            <i class="icofont-phone"></i>
                            <h4>Call:</h4>
                            <p>{{ $data->telp }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach
</main>