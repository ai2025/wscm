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
<!-- ======= Visi Misi Tujuan Section ======= -->
<section id="vmt" class="portfolio">
    <div class="container">

      <div class="section-title" data-aos="fade-left">
        <h2>Visi, Misi dan Tujuan</h2>
        <h3>Visi</h3>
        <p>"isi visi "</p>
        <br>
        <h3>Misi</h3>
        <p>"isi Misi "</p>
        <br>
        <h3>Tujuan</h3>
        <ul>
            <li> Ullamco laboris nisi ut aliquip ex ea commodo consequa</li>
            <li> Duis aute irure dolor in reprehenderit in voluptate velit</li>
            <li> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</li>
        </ul>

    </div>
            
            {{-- @auth
                <h1>AUTHORIZE</h1>
            @else
                <h1>NO</h1>
            @endauth --}}
    @endforeach
</section><!-- End visiMisiTujuan Section -->
</main>