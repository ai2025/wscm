<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>SMK Negeri 1 Grujugan</title>

        <!-- Favicons -->
        <link href="{{ asset('tpl/img/favicon.png') }}" rel="icon">
        <link href="{{ asset('tpl/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

        
        <!-- Fonts -->
        <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> --}} -->
        
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{ asset('tpl/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('tpl/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
        <link href="{{ asset('tpl/vendor/icofont/icofont/icofont.min.css') }}" rel="stylesheet">
        <link href="{{ asset('tpl/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('tpl/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
        <link href="{{ asset('tpl/vendor/venobox/venobox.css') }}" rel="stylesheet">
        <link href="{{ asset('tpl/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('tpl/vendor/aos/aos.css') }}" rel="stylesheet">

        <!-- {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> --}}
        {{-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> --}}
        {{-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> --}}
        {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet"> --}} -->
        

        <!-- Template Main CSS File -->
        <link href="{{ asset('tpl/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

        {{-- trix --}}
        {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/trix.css') }}">
        <script type="text/javascript" src="{{ asset('js/trix.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/attachments.js') }}"></script> --}}

        {{-- medium --}}
        {{-- <link rel="stylesheet" href="{{ asset('medist/css/medium-editor.css') }}"> <!-- Core -->
        <link rel="stylesheet" href="{{ asset('medist/css/themes/default.css') }}"> <!-- or any other theme --> --}}

        <!-- Boxicons CSS -->
        <!-- {{-- <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'> --}} -->

        <!-- {{-- remixicon --}} -->
        <!-- {{-- <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet"> --}} -->

        <!-- {{-- <script src="https://use.fontawesome.com/1234e569d5.js"></script> --}} -->
        <!-- Styles -->
        <!-- {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}} -->

        @trixassets

        {{-- @cloudinaryJS --}}

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">

            <!-- ======= Header ======= -->
            <header id="header" class="fixed-top d-flex align-items-center">
                <div class="container">
                    <div class="header-container d-flex align-items-center" style="margin-top: 20px;">
                        <div class="logo">
                            {{-- <h1 class="text-light"><a href="index.html"><span>SKAGU</span></a></h1> --}}
                            <!-- Uncomment below if you prefer to use an image logo -->
                            <a href="/"><img src="{{ asset('tpl/img/logosekolah.png') }}" alt="" class="img-fluid"></a>
                        </div>

                        <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li> <a href="/">Home</a></li>
                    <li class="drop-down"><a style="cursor: context-menu;">Profil</a>
                        <ul>
                            <li><a href="{{ url('/profil/visiMisiTujuan') }}">Visi, Misi dan Tujuan</a></li>
                            <li><a href="{{ url('/profil/identitasSekolah') }}">Identitas Sekolah</a></li>
                            <li><a href="{{ url('/profil/strukturOrg') }}">Struktur Organisasi</a></li>
                        </ul>
                    </li>
                    <li class="drop-down"><a style="cursor: context-menu;">Paket Keahlian</a>
                        <ul>
                            <li><a href="{{ url('/paketKeahlian/agbsnsTani') }}">Agribisnis Pengolahan Hasil Pertanian</a></li>
                            <li><a href="{{ url('/paketKeahlian/agbsnsIkan') }}">Agribisnis Pengolahan Hasil Perikanan</a></li>
                        </ul>
                    </li>
                    <li class="drop-down"><a style="cursor: context-menu;">BKK</a>
                        <ul>
                            <li><a href="{{ url('/bkk/tntgBKK') }}">Tentang (BKK)</a></li>
                            <li><a href="{{ url('/bkk/orgnssBKK') }}">Organisasi (BKK)</a></li>
                            <li><a href="{{ url('/bkk/inputDataAlumni') }}">Input Data Alumni</a></li>
                        </ul>
                    </li>
                    
                    <li class="drop-down"><a style="cursor: context-menu;">Kurikulum</a>
                        <ul>
                            <li><a href="{{ url('/kurikulum/tntgKrklm') }}">Tentang Kurikulum</a></li>
                            <li><a href="{{ url('/kurikulum/organisasi') }}">Organisasi Kurikulum</a></li>
                            <li><a href="{{ url('/kurikulum/klndrPmbljaran') }}">Kalender Pembelajaran</a></li>
                            <li><a href="{{ url('/kurikulum/pmbljaran') }}">Pembelajaran</a></li>
                            <li><a href="{{ url('/kurikulum/penilaian') }}">Penilaian</a></li>
                            <li><a href="{{ url('/kurikulum/akreditasi') }}">Akreditasi</a></li>
                        </ul>
                    </li>
                    <li class="drop-down"><a style="cursor: context-menu;">Humas</a>
                        <ul>
                            <li><a href="{{ url('/humas/tntgHum') }}">Tentang (Humas)</a></li>
                            <li><a href="{{ url('/humas/orgnssHum') }}">Organisasi (Humas)</a></li>
                            <li><a href="{{ url('/humas/prgrmkrjHum') }}">Program Kerja (Humas)</a></li>
                            <li><a href="{{ url('/humas/pkl') }}">PKL</a></li>
                        </ul>
                    </li>
                    <li class="drop-down"><a style="cursor: context-menu;">Kesiswaan</a>
                        <ul>
                            <li><a href="{{ url('/kesiswaan/tntgSis') }}">Tentang (Kesiswaan)</a></li>
                            <li><a href="{{ url('/kesiswaan/orgnssSis') }}">Organisasi (Kesiswaan)</a></li>
                            <li><a href="{{ url('/kesiswaan/prgrmkrjSis') }}">Program Kerja (Kesiswaan)</a></li>
                            <li><a href="{{ url('/kesiswaan/ekskul') }}">Ekstrakurikuler</a></li>
                            <li><a href="{{ url('/kesiswaan/kegOsis') }}">Kegiatan OSIS</a></li>
                            <li><a href="{{ url('/kesiswaan/kegPramuka') }}">Kegiatan Pramuka</a></li>
                            <li><a href="{{ url('/kesiswaan/prestasi') }}">Prestasi</a></li>
                        </ul>
                    </li>
                    <li class="drop-down"><a style="cursor: context-menu;">Sarana Prasarana</a>
                        <ul>
                            <li><a href="{{ url('/sarpras/tntgSarpras') }}">Tentang (SarPras)</a></li>
                            <li><a href="{{ url('/sarpras/orgnssSarpras') }}">Organisasi (SarPras)</a></li>
                            <li><a href="{{ url('/sarpras/prgrmkrjSarpras') }}">Program Kerja (SarPras)</a></li>
                            <li><a href="{{ url('/sarpras/fasSekolah') }}">Fasilitas Sekolah</a></li>
                        </ul>
                    </li>
                    <li class="drop-down"><a style="cursor: context-menu;">Perpustakaan</a>
                        <ul>
                            <li><a href="{{ url('/perpus/tntgPerpus') }}">Tentang (Perpustakaan)</a></li>
                            <li><a href="{{ url('/perpus/orgnssPerpus') }}">Organisasi (Perpustakaan)</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/informasi') }}">Informasi</a></li>
                    
                    <li><a href="{{ url('/ppdb') }}">PPDB</a></li>
                    
                    <li><a href="{{ url('/kontak') }}">Kontak</a></li>

                    <!-- <li class="get-started"><a href="#about">Get Started</a></li> -->
                </ul>
                        </nav><!-- .nav-menu -->
                        
                    </div><!-- End Header Container -->
                    <hr style="margin-top: 0px; margin-bottom: 0px;">
                </div>
            </header><!-- End Header -->

            

            {{-- @livewire('navigation-dropdown')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header> --}}

            <!-- Page Content -->
            {{-- {{ $slot }} --}}
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        <!-- ======= Footer ======= -->
        
        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 footer-contact">
                             
                            @foreach ($data as $data)
                        <h3>{{ $data->nama }}</h3>
                        <p>
                            {{ $data->alamat }} <br>
                            {{ $data->kab }}<br>
                            {{ $data->provinsi }}, {{ $data->pos }}, {{ $data->negara }} <br><br>
                                <strong>Phone:</strong> {{ $data->telp }}<br>
                                <strong>Email:</strong> {{ $data->email }}<br>
                            </p>
                            @endforeach 
        
                            
                        </div>
                        
                        <div class="col-lg-2 col-md-6 footer-links">
                            <h4>Useful Links</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Profil</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Paket Keahlian</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="/kontak">Kontak</a></li>
                                
                                
                                <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> -->
                            </ul>
                        </div>

                        <!-- <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Our Services</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-4 col-md-6 footer-newsletter">
                            <h4>Join Our Newsletter</h4>
                            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                            <form action="" method="post">
                                <input type="email" name="email"><input type="submit" value="Subscribe">
                            </form>
                        </div> -->

                    </div>
                </div>
            </div>

            <div class="container d-md-flex py-4">

                <div class="mr-md-auto text-center text-md-left">
                    <div class="copyright">
                        &copy; Copyright <strong><span>SMK NEGERI 1 GRUJUGAN</span></strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/ -->
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>
                <div class="social-links text-center text-md-right pt-3 pt-md-0">
                    @auth
                        {{-- <li><i class="bx bx-chevron-right"></i> <a href="{{ route('logout') }}">Logout</a></li> --}}
                        <!-- Authentication -->
                        
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                                
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                    <i class="icofont-logout"></i>
                                        {{-- {{ __('Logout') }} --}}
                                </a>
                        </form>
                        
                    @else
                        <a href="/login"><i class="icofont-login"></i></a>
                    @endauth
                    
                    {{-- <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> --}}
                </div>
            </div>
        </footer><!-- End Footer -->

        <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{ asset('tpl/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('tpl/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('tpl/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('tpl/vendor/php-email-form/validate.js') }}"></script>
        <script src="{{ asset('tpl/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('tpl/vendor/counterup/counterup.min.js') }}"></script>
        <script src="{{ asset('tpl/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('tpl/vendor/venobox/venobox.min.js') }}"></script>
        <script src="{{ asset('tpl/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('tpl/vendor/aos/aos.js') }}"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('tpl/js/main.js') }}"></script>
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script> --}}

        {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> --}}

        {{-- medium --}}
        {{-- <script src="{{ asset('medist/js/medium-editor.js') }}"></script> --}}

        {{-- trix --}}
        {{-- <script type="text/javascript" src="{{ asset('js/attachments.js') }}"></script> --}}

        @livewireScripts
    </body>
</html>