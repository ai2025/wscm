<main id="main">
{{-- <meta charset="UTF-8"> --}}
@foreach ($data as $data)
        {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
            <section id="hero" class="d-flex align-items-center">
                <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
            <h1>{{ $data->nama }}</h1>
            {{-- <a href="#" class="btn-get-started scrollto">Get Started</a> --}}
        </div>
    </section>

    <!-- ======= fasSek Section ======= -->
    <section id="prgrmKrjHum" class="portfolio">
        <div class="container">
  
          <div class="section-title" data-aos="fade-left">
            <h2>Program Kerja Humas</h2>
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
          @endforeach
</main>