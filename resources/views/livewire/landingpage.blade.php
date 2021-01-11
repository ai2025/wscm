<main id="main">

    <!-- ======= Team Section ======= -->
    <section id="jurusan" class="jurusan">
        <div class="container">

            <div class="row">
                <div class="col-lg-4">
                    <div class="section-title" data-aos="fade-right">
                        <h2>Paket Keahlian</h2>
                        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem.</p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="member" data-aos="zoom-in" data-aos-delay="100">
                                <div class="pic"><img src="{{ asset('tpl/img/team/team-1.jpg') }}" class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>Agribisnis Pengolahan Hasil Pertanian</h4>
                                    <span>Chief Executive Officer</span>
                                    <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                                    <div class="social">
                                    <a href="agbsnsTani" class="btn btn-primary"> Pertanian</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-4 mt-lg-0">
                            <div class="member" data-aos="zoom-in" data-aos-delay="200">
                                <div class="pic"><img src="{{ asset('tpl/img/team/team-2.jpg') }}" class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>Agribisnis Pengolahan Hasil Perikanan</h4>
                                    <span>Product Manager</span>
                                    <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                                    <div class="social">
                                    <a href="agsbnsIkan" class="btn btn-primary"> Perikanan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                @auth
                    <h1>AUTHORIZE</h1>
                @else
                    <h1>NO</h1>
                @endauth
            </div>

        </div>
    </section>
    <!-- End Team Section -->


</main><!-- End #main -->