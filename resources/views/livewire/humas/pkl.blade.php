@foreach ($data as $data)
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
<div class="carousel-inner" style="background-color: rgb(58, 141, 60)">
    <div class="carousel-item active">
        <img class="d-block w-auto mx-auto d-block" style="height: 512px;" src="/tpl/img/hero-bg.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block w-auto" style="background-color: rgba(76, 175, 80, 0.8)">
        <h4>SLIDE 1</h4>
        <p>Ini gambar</p>
        </div>
    </div>
    <div class="carousel-item">
        <img class="d-block w-auto mx-auto d-block" style="height: 512px;" src="/tpl/img/hero-bg.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block" style="background-color: rgba(76, 175, 80, 0.8)">
        <h4>SLIDE 2</h4>
        <p>Ini gambar</p>
        </div>
    </div>
    <div class="carousel-item">
        <img class="d-block w-auto mx-auto d-block" style="height: 512px;" src="/tpl/img/hero-bg.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block" style="background-color: rgba(76, 175, 80, 0.8)">
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


<main id="main">

<!-- ======= Identitas Sekolah Section ======= -->
<section id="pkl" class="portfolio">
    <div class="container">
        <div class="section-title" data-aos="fade-left">
            <h2>PKL</h2>
        </div>
                    {{-- TABEL --}}
                {{-- <div id="uk-tabel"> --}}
                    <div class="entry-content-page">
                            <div class="table-responsive">
                                <table border="1">
                                    <thead>
                                        <tr>
                                            <th width="40px">No.</th>
                                            <th width="300px">Paket Keahlian</th>
                                            <th width="300px">Nama Institusi</th>
                                            <th width="400px">Alamat</th>
                                            <th width="200px">Jumlah Siswa</th>
                                        <!-- <th width="10.1%">Action</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Lalala</td>
                                            <td>lalala</td>
                                            <td>lalala</td>
                                            <td>lalala</td>
                                        <!-- <th width="10.1%">Action</th> -->
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    {{-- </div> --}}
            </div>
            
        {{-- </div> --}}

    </div>
</section>
<!-- End visiMisiTujuan Section -->
</main>
@endforeach
