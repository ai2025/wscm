<main id="main">
{{-- <meta charset="UTF-8"> --}}
@foreach ($data as $data)
        {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
            <section id="hero" class="d-flex align-items-center" >
                <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200" >
            <h1>{{ $data->nama }}</h1>
            {{-- <a href="#" class="btn-get-started scrollto">Get Started</a> --}}
        </div>
    </section>

    <!-- ======= Team Section ======= -->
    <section id="organisasiKrkulum" class="team section-bg">
            <div class="container">
    
                <div class="row">
                    <div class="col-lg-4">
                        <div class="section-title" data-aos="fade-right">
                            <h2 id="isi-team">Organisasi Kurikulum</h2>
                            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem.</p>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                                    <div class="pic"><img src="/tpl/img/team/team-1.jpg" class="img-fluid" alt=""></div>
                                    <div class="member-info">
                                        <h4>Walter White</h4>
                                        <span>Chief Executive Officer</span>
                                        {{-- <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                                        <div class="social">
                                            <a href=""><i class="ri-twitter-fill"></i></a>
                                            <a href=""><i class="ri-facebook-fill"></i></a>
                                            <a href=""><i class="ri-instagram-fill"></i></a>
                                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-lg-6 mt-4 mt-lg-0">
                                <div class="member" data-aos="zoom-in" data-aos-delay="200">
                                    <div class="pic"><img src="/tpl/img/team/team-2.jpg" class="img-fluid" alt="" ></div>
                                    <div class="member-info">
                                        <h4>Sarah Jhonson</h4>
                                        <span>Product Manager</span>
                                        {{-- <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                                        <div class="social">
                                            <a href=""><i class="ri-twitter-fill"></i></a>
                                            <a href=""><i class="ri-facebook-fill"></i></a>
                                            <a href=""><i class="ri-instagram-fill"></i></a>
                                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-lg-6 mt-4">
                                <div class="member" data-aos="zoom-in" data-aos-delay="300">
                                    <div class="pic"><img src="/tpl/img/team/team-3.jpg" class="img-fluid" alt=""></div>
                                    <div class="member-info">
                                        <h4>William Anderson</h4>
                                        <span>CTO</span>
                                        {{-- <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                                        <div class="social">
                                            <a href=""><i class="ri-twitter-fill"></i></a>
                                            <a href=""><i class="ri-facebook-fill"></i></a>
                                            <a href=""><i class="ri-instagram-fill"></i></a>
                                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-lg-6 mt-4">
                                <div class="member" data-aos="zoom-in" data-aos-delay="400">
                                    <div class="pic"><img src="/tpl/img/team/team-4.jpg" class="img-fluid" alt=""></div>
                                    <div class="member-info">
                                        <h4>Amanda Jepson</h4>
                                        <span>Accountant</span>
                                        {{-- <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                                        <div class="social">
                                            <a href=""><i class="ri-twitter-fill"></i></a>
                                            <a href=""><i class="ri-facebook-fill"></i></a>
                                            <a href=""><i class="ri-instagram-fill"></i></a>
                                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            
                        </div>
    
                    </div>
                </div>
    
            </div>
        </section>
        <!-- End Team Section -->
        @endforeach
    </main>