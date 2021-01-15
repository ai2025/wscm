<main id="main">
    <!-- {{-- Hero section --}} -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200" style="
        height: 200px;">
            <h1>SMK NEGERI 1 GRUJUGAN</h1>
            <h2>(JARGONNYA BIAR MANTAP)</h2>
            {{-- <a href="#" class="btn-get-started scrollto">Get Started</a> --}}
        </div>
    </section><!-- End Hero -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container">
        <!-- <h3 style = "padding-left :415px; margin-top:-60; margin-bottom :80px; padding-top: 90px;">Jumlah Peserta Didik</h3> -->
        <h2 id="header-count">SMK Negeri 1 Grujugan</h2>
            <div class="row counters">

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">490</span>
                    <p>Jumlah Siswa</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">70</span>
                    <p>Guru</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">50</span>
                    <p>Kelas</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">2</span>
                    <p>Jurusan</p>
                </div>

            </div>

        </div>
    </section>
    <!-- End Counts Section -->

    <section id="identitasSekolah" class="identitasSekolah" style="
    padding-top: 0px;">
    <div class="container">
            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <div class="section-title">
                        <h2 style="top: 90px; width: 400px;">Identitas Sekolah</h2>
                    </div>
                        
                        <div class="entry-content-page" style="padding-top: 70px;">
                            <div class="table-responsive">
                                <table style="width:70%; " class="easy-table easy-table-default" border="0">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>:</th>
                                            <th>SMKN 1 Grujugan</th>
                                            <!-- <th width="10.1%">Action</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td  style="padding-top: 10px;">Nama</td>
                                            <td  style="padding-top: 10px;">:</td>
                                            <td  style="padding-top: 10px;">SMKN 1 Grujugan</td>
                                            <!-- <th width="10.1%">Action</th> -->
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
                
            </div>

        </div>
    </section>

    <!-- ======= Team Section ======= -->
    <section id="jurusan" class="services section-bg">
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
                      <div class="col-md-6 d-flex align-items-stretch">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                          <div class="icon"><i class="bx bxl-dribbble"></i></div>
                          <h4><a href="/agbsnsTani">Pertanian</a></h4>
                          <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                        </div>
                      </div>
        
                      <div class="col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                          <div class="icon"><i class="bx bx-file"></i></div>
                          <h4><a href="/agbsnsIkan">Perikanan</a></h4>
                          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                        </div>
                      </div>
        
                      <div class="col-md-6 d-flex align-items-stretch mt-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                          <div class="icon"><i class="bx bx-tachometer"></i></div>
                          <h4><a href="">Magni Dolores</a></h4>
                          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                        </div>
                      </div>
        
                      <div class="col-md-6 d-flex align-items-stretch mt-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
                          <div class="icon"><i class="bx bx-world"></i></div>
                          <h4><a href="">Nemo Enim</a></h4>
                          <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
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