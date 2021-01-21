<meta charset="UTF-8">
@foreach ($data as $data)
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <section id="hero" class="d-flex align-items-center">
                <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
            <h1>{{ $data->nama }}</h1>
            {{-- <a href="#" class="btn-get-started scrollto">Get Started</a> --}}
        </div>
    </section>
    <main id="main">
    <!-- ======= Team Section ======= -->
    <section id="Struktur Organisasi" class="portfolio">
        <div class="container">
  
          <div class="section-title" data-aos="fade-left">
            <h2>Struktur Organisasi</h2>
                            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem.</p> <br>
                            <img src="/tpl/img/bagan.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Team Section -->
    @endforeach    
</main>