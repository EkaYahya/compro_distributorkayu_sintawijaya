<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>@yield('title')</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="/asset/img/apple-touch-icon.png" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css?_v=20230327195509" />
    <link href="{{ asset('asset/vendor/aos/aos.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset/vendor/remixicon/remixicon.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet" />
    
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<!-- CSS here -->
    <link href="{{ asset('asset/css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset/css/magnific-popup.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset/css/dripicons.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset/css/slick.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset/css/meanmenu.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset/css/default.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset/css/responsive.css') }}" rel="stylesheet" />

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" style="background-color:white; padding-top: 0px; padding-right: 10px; padding-bottom: 0px; padding-left: 10px;" >
    <div class="tw-head" style="background-color:white; padding-top: 0px; padding-right: 10px; padding-bottom: 0px; padding-left: 10px;">
        <div class="container" style="background-color:white; padding-top: 0px; padding-right: 10px; padding-bottom: 0px; padding-left: 10px;" >
            <nav class="navbar navbar-right" style="background-color:white; padding-top: 0px; padding-right: 10px; padding-bottom: 0px; padding-left: 10px;" >
                <a class="navbar-brand tw-nav-brand" href="/" style="padding-top: 0px; padding-right: 10px; padding-bottom: 0px; padding-left: 10px;">
                    <img src="{{ asset('/asset/img/logohmn.png') }}" width="200" height="100" alt="CV">
                </a>

                <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="{{ route('beranda') }}" style="color: black; font-family: 'Poppins', sans-serif; font-weight: 700; text-transform: uppercase;">Beranda</a></li>
                    <hr>
                    <li><a class="nav-link scrollto" href="{{ route('tentang.kami') }}" style="color: black; font-family: 'Poppins', sans-serif; font-weight: 700; text-transform: uppercase;">Tentang Kami</a></li>
                    <hr>
                    <li><a class="nav-link scrollto" href="{{ route('produk-kami') }}" style="color: black; font-family: 'Poppins', sans-serif; font-weight: 700; text-transform: uppercase;">Produk Kami</a></li>
                    <hr>
                    <li><a href="{{ route('show-blog') }}" style="color: black; font-family: 'Poppins', sans-serif; font-weight: 700; text-transform: uppercase;">Blog</a></li>
                    <hr>
                    <li><a class="nav-link scrollto" href="{{ route('kontak') }}" style="color: black; font-family: 'Poppins', sans-serif; font-weight: 700; text-transform: uppercase;">Kontak</a></li>
                </ul>
                    <!-- Tombol hamburger untuk mobile -->
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
            </nav>
        </div>
    </div>

    <!-- Tombol WhatsApp -->
    <a href="https://api.whatsapp.com/send?phone=6282268866677&text=Halo%20saya%20membutuhkan%20informasi%20harga%20kayu%20dari%20website%20www.sintawijaya.co.id.%20Mohon%20informasi%20lebih%20lanjut%2C%20terimakasih."
       target="_blank" class="float" 
       style="position: fixed; bottom: 20px; right: 20px; background-color: #25d366; color: white; padding: 15px 20px; border-radius: 50px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2); text-align: center; font-size: 18px; z-index: 1000;">
       Hubungi Kami
    </a>
</header>


    <!-- End Header -->
    <div class="content">
        @yield('content')
    </div>

        <!-- footer -->
        <footer class="footer-bg footer-p pt-90" style="background: #00173c;">
  
            <div class="footer-top pb-70">
                <div class="container">
                    <div class="row justify-content-between">
                        
                        <div class="col-xl-4 col-lg-4 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                    <h2>Tentang Kami</h2>
                                </div>
                                <div class="footer-link">
                                    <p>Tujuan utama kami adalah menyediakan kayu dan produk yang berkualitas tinggi dan lengkap, sehingga memudahkan pelanggan kami untuk memenuhi berbagai kebutuhan kayu mereka.</p>
                                    <a href = "https://goo.gl/maps/aEtqNe14FoRLbNPM9" >Alamat: Jl Pelabuhan Kalibaru, RT.002/RW.006, No.19, Kel. Kalibaru, Kec. Cilincingm Jakarta Utara - 14110</a>
                                </div>
                            </div>
                        </div>
						
                        <div class="col-xl-3 col-lg-3 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                    <h2>Produk</h2>
                                </div>
                                <div class="footer-link">
                                    <ul>
                                        <li><a href="#">Jual Kayu Kaso</a></li>
                                        <li><a href="#">Jual Kayu Balok</a></li>
                                        <li><a href="#">Jual Kayu Papan</a></li>
                                        <li><a href="#">Jual Kayu Meranti</a></li>
                                        <li><a href="#">Jual Kayu Bekisting</a></li>
                                        <li><a href="#">Jual Kayu Borneo</a></li>
                                        <li><a href="#">Jual Kayu Kamper</a></li>
                                        <li><a href="#">Jual Kayu Bengkirai</a></li>
                                        <li><a href="#">Jual Kayu Ulin</a></li>
                                        <li><a href="#">Jual Triplek & Dolken</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>  
                        <div class="col-xl-3 col-lg-3 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                    <h2>Hubungi Kami</h2>
                                </div>
                                <div class="footer-link">
                                    <ul>                                        
                                        <li><a href="#"> WA: 0822 6886 6677</a></li>
                                        <li><a href="#"> Web: www.sintawijaya.co.id</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">          
                            <div class="copy-text text-center">
                                 Copyright &copy;CV Permata Sinta Jaya. All rights reserved.       
                            </div>
                                
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('asset/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('asset/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('asset/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('asset/js/main.js') }}"></script>
    @stack('style')
    @stack('js')
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js?_v=20230327195509"></script>
	<script src="https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js?_v=20230327195509"></script>
	<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12?_v=20230327195509"></script>
    
	<script src="{{ asset('asset/js/app.min.js?_v=20230327195509') }}"></script>
    <script>
        // Menambahkan event listener untuk scroll
        window.onscroll = function() {
            var header = document.getElementById("header");

            // Cek apakah scroll lebih dari 50px
            if (window.scrollY > 50) {
                header.classList.add("scrolled"); // Tambahkan kelas "scrolled" jika scroll lebih dari 50px
            } else {
                header.classList.remove("scrolled"); // Hapus kelas "scrolled" jika scroll kurang dari 50px
            }
        };
    </script>
    <script>
        // Menambahkan event listener untuk toggle menu
        document.querySelector('.mobile-nav-toggle').addEventListener('click', function() {
            // Toggle class 'active' pada navbar
            document.getElementById('navbar').classList.toggle('active');
        });
    </script>

</body>

</html>
