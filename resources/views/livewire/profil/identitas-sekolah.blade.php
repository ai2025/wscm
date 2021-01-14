    <main id="main">
        <div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" style="background-color: rgb(58, 141, 60)">
                    <div class="carousel-item active">
                        <img class="d-block w-auto mx-auto d-block" style="height: 512px;" src="/tpl/img/hero-bg.jpg"
                            alt="First slide">
                        <div class="carousel-caption d-none d-md-block w-auto"
                            style="background-color: rgba(76, 175, 80, 0.8)">
                            <h4>SLIDE 1</h4>
                            <p>Ini gambar</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-auto mx-auto d-block" style="height: 512px;" src="/tpl/img/hero-bg.jpg"
                            alt="Second slide">
                        <div class="carousel-caption d-none d-md-block"
                            style="background-color: rgba(76, 175, 80, 0.8)">
                            <h4>SLIDE 2</h4>
                            <p>Ini gambar</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-auto mx-auto d-block" style="height: 512px;" src="/tpl/img/hero-bg.jpg"
                            alt="Third slide">
                        <div class="carousel-caption d-none d-md-block"
                            style="background-color: rgba(76, 175, 80, 0.8)">
                            <h4>SLIDE 3</h4>
                            <p>Ini gambar</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- </section> -->


            <!-- ======= Identitas Sekolah Section ======= -->
            <section id="identitasSekolah" class="identitasSekolah" style="padding-top: 0px;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            {{-- <div class="section-title">
                                <h2 class="mt-4">Identitas Sekolah</h2>
                            </div> --}}
                            <div class="entry-content-page">
                                @auth
                                <div class="alert alert-warning mt-4" role="alert">
                                    <h4 class="alert-heading">Selamat Datang, Admin!</h4>
                                    <p>
                                        Agar update berjalan dengan baik, mohon isi data dibawah dengan baik dan benar.
                                        Terimakasih.
                                    </p>
                                    <hr>
                                    <p class="mb-0">Cek kembali data pada kolom input sebelum melakukan update.</p>
                                </div>                                
                                @endauth
                            </div>
                        </div>
                    </div>
                    <section class="services section-bg mt-4">
                        <div class="container">
                            @foreach ($data as $isi)
                            {{-- <div class="row"> --}}
                            {{-- <div class="col-lg-4">
                                <div class="section-title" data-aos="fade-right">
                                    <h2>Paket Keahlian</h2>
                                    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem.</p>
                                </div>
                            </div> --}}
                            {{-- <div class="col-lg-8"> --}}
                            {{-- <div class="row"> --}}
                            <div class="d-block align-items-stretch">
                                <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                                    {{-- <div class="icon"><i class="bx bxl-dribbble"></i></div> --}}
                                    <div class="section-title">
                                        <h4 class="mt-4"><a style="cursor: context-menu;">Identitas Sekolah</a></h4>
                                    </div>
                                    {{-- <h4><a style="cursor: context-menu;">{{ $isi->nama }}</a></h4> --}}
                                    {{-- <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> --}}

                                    <ul class="list-group list-group-flush text-left mt-3 pr-5 pl-5 pb-3">
                                        @php
                                            $count = 0;
                                            $co = 0;
                                        @endphp
                                        <div class="row">
                                            {{-- {{ $count = 0 }} --}}
                                            <div class="col list-group-flush">                                                
                                                @foreach($judul as $code => $item)
                                                {{-- @foreach ($data as $isi) --}}
                                                @if ($count < 5) 
                                                    <li class="list-group-item border-bottom">
                                                        <p>
                                                            {{ __($item) }} &ensp; : &ensp; {{ $isi->$code }}
                                                        </p>
                                                    </li>
                                                    @php
                                                        $count++;
                                                    @endphp
                                                    {{-- {{ $count++ }} --}}
                                                @endif
                                                {{-- @endforeach --}}
                                                @endforeach
                                            </div>

                                            {{-- @php
                                                $co = 0;                                            
                                            @endphp --}}
                                            {{-- {{ $co = 0 }} --}}
                                            <div class="col list-group-flush">
                                                @foreach($judul as $code => $item)
                                                {{-- @foreach ($data as $isi) --}}
                                                @if ($co < 5)
                                                @php
                                                    $co++;
                                                @endphp
                                                {{-- {{ $co++ }} --}}
                                                @else
                                                <li class="list-group-item border-bottom">
                                                    <p>
                                                        {{ __($item) }} &ensp; : &ensp; {{ $isi->$code }}
                                                    </p>
                                                </li>
                                                @php
                                                    $co++;
                                                @endphp
                                                {{-- {{ $co++ }} --}}
                                                @endif
                                                {{-- @endforeach --}}
                                                @endforeach
                                            </div>
                                        </div>
                                    </ul>

                                    @auth
                                    <div>
                                        <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                                            wire:click="updateIdentitas({{ $isi->id }})>" data-target="#updateIdentitasMDL">
                                            Update Data
                                        </button>
                                        {{-- <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalIdentitas">Edit Data</button> --}}
                                        {{-- <button type="button" class="btn btn-outline-primary" wire:click="updateIdentitas">Edit
                                        Data</button> --}}
                                    </div>
                                    @endauth
                                </div>
                            </div>

                            {{-- <div class="col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
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
                                  </div> --}}

                            {{-- </div> --}}
                            {{-- </div> --}}

                            {{-- @auth
                                <h1>AUTHORIZE</h1>
                            @else
                                <h1>NO</h1>
                            @endauth --}}
                        </div>
                        @endforeach
                </div>
            </section>
        </div>
        </section>
        <!-- End visiMisiTujuan Section -->
        <!-- Modal -->
        <div wire:ignore.self class="modal fade" id="updateIdentitasMDL" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{-- <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
                            <div class="form-row">
                              <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                              </div>
                              <div class="col-md-6 form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                              </div>
                            </div>
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                              <div class="validate"></div>
                            </div>
                            <div class="form-group">
                              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                              <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                              <div class="loading">Loading</div>
                              <div class="error-message"></div>
                              <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                          </form> --}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Understood</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
