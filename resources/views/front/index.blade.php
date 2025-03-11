@extends('partials.front')
@section('title', 'CV Permata Sinta Jaya')
@section('content')
<style>
    /* Reset dasar */
    * {
      margin: 0; 
      padding: 0; 
      box-sizing: border-box;
    }
    body {
      font-family: Arial, sans-serif;
      background-color: #fff; /* Latar belakang putih */
      color: #333; /* Warna teks default */
    }

    /* Section Wrapper */
    section#tentang-kami {
      background-color: #fff; /* Putih, sesuai permintaan */
      padding-top: 120px;     /* pt-120 */
      padding-bottom: 200px;  /* pb-200 */
      position: relative;
    }

    /* Container, jika tidak pakai Bootstrap */
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }

    /* Row styling manual (jika tidak pakai col bootstrap) */
    .row {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      gap: 2rem; /* Jarak horizontal dan vertikal antara kolom */
    }

    /* Kolom */
    .col-lg-6, .col-md-12, .col-sm-12 {
      flex: 1 1 0;
      min-width: 300px;
    }

    /* Konten Teks */
    .about-content2 {
      /* Animasi diatur oleh WOW.js/AOS jika diaktifkan */
    }

    .about-title h2 {
      font-size: 50px;
      margin-bottom: 1rem;
      color: #195577; /* Sesuaikan dengan tampilan di gambar (biru gelap) */
    }

    .about-content2 p {
      margin-bottom: 1rem;
      line-height: 1.6;
      font-size: 1rem;
      color: #444; /* Abu-abu gelap */
    }

    /* List Benefit */
    ul.mb-30 {
      margin-bottom: 30px;
      list-style: none;
    }
    ul.mb-30 li {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
    }
    .icon {
      width: 24px;
      height: 24px;
      border-radius: 50%;
      background-color: #195577; /* Bulatan kecil berwarna biru */
      margin-right: 10px;
    }
    .text {
      font-size: 1rem;
      color: #444;
    }

    /* Experience Text (98% Pelanggan Puas) */
    .experience-text {
      display: flex;
      align-items: flex-start;
      gap: 1rem;
    }
    .exp-no {
      font-size: 1.5rem;
      font-weight: bold;
      color: #195577;
      text-align: center;
    }
    .exp-no span {
      font-size: 2rem; 
    }
    .exp-no sub {
      font-size: 1rem;
      vertical-align: baseline;
      color: #f39c12; /* Warna oranye */
    }
    .exp-no p {
      margin-top: 0.25rem;
      font-size: 1rem;
      color: #333;
    }
    .exp-text {
      flex: 1;
      font-size: 1rem;
      line-height: 1.6;
      color: #444;
    }

    /* Kolom Gambar */
    .s-about-img img {
      max-width: 100%;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      display: block;
    }

    /* Responsif */
    @media (max-width: 768px) {
      section#tentang-kami {
        padding-top: 80px;
        padding-bottom: 120px;
      }
      .about-title h2 {
        font-size: 36px;
      }
      .experience-text {
        flex-direction: column;
        align-items: flex-start;
      }
    }
  </style>
<style>
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
    }
    </style>
<main id="main">
    <!-- ======= Hero Section ======= -->
    <section id="heroCarousel" class="carousel slide" data-bs-ride="carousel" style ="padding-top: 60px; padding-right: 10px; padding-bottom: 0px; padding-left: 10px;">
    <!-- Indikator (bulatan) - opsional -->
    <div class="carousel-indicators">
        <button
        type="button"
        data-bs-target="#heroCarousel"
        data-bs-slide-to="0"
        class="active"
        aria-current="true"
        aria-label="Slide 1"
        ></button>
        <button
        type="button"
        data-bs-target="#heroCarousel"
        data-bs-slide-to="1"
        aria-label="Slide 2"
        ></button>
    </div>

    <!-- Carousel Inner -->
    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
        <img
            src="{{ asset('asset/img/1.jpg') }}"
            class="d-block w-100"
            alt="Image 1"
        />
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item">
        <img
            src="{{ asset('asset/img/2.jpg') }}"
            class="d-block w-100"
            alt="Image 2"
        />
        </div>
    </div>
    <!-- End Carousel Inner -->

    <!-- Tombol Prev -->
    <button
        class="carousel-control-prev"
        style="background:none"
        type="button"
        data-bs-target="#heroCarousel"
        data-bs-slide="prev"
    >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>

    <!-- Tombol Next -->
    <button
        class="carousel-control-next"
        style="background:none"
        type="button"
        data-bs-target="#heroCarousel"
        data-bs-slide="next"
    >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </section>
    <!-- ======= About Section ======= -->
    <body>
  <!-- ====== About Section ====== -->
  <section id="tentang-kami" class="about-area about-p pt-5 pb-5 p-relative fix" style="background-color:#f1f3f2">
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-center align-items-center">
        <!-- Kolom Kiri (Teks) -->
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div 
            class="about-content2 s-about-content wow fadeInRight animated"
            data-animation="fadeInRight"
            data-delay=".4s"
          >
            <div class="about-title second-title pb-25">
                <h2 class="text-center" style="color:#195577">Selamat Datang di Website Kami</h2>
            </div>
            <p>
            CV Permata Sinta Jaya bergerak di bidang penyediaan kayu industri berkualitas tinggi untuk berbagai kebutuhan, mulai dari proyek konstruksi, manufaktur, hingga industri kreatif. Dengan pengalaman bertahun-tahun di industri kayu, kami memahami betul pentingnya bahan baku yang kuat, tahan lama, dan sesuai dengan standar mutu tertinggi.
            </p>
            <p>
            Kami berkomitmen untuk memberikan solusi kayu yang terbaik, baik untuk skala besar maupun kecil, dengan beragam jenis kayu yang sesuai dengan kebutuhan spesifik setiap pelanggan.
            </p>
            <button style="background-color:#00173c; color:white">
                Hubungi Kami
            </button>
          </div>
        </div>
        <!-- Kolom Kanan (Gambar) -->
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div 
            class="s-about-img p-relative wow fadeInLeft animated"
            data-animation="fadeInLeft" 
            data-delay=".4s"
          >
            <img 
              src="{{ asset('asset/img/about_img02.png') }}" 
              alt="Tentang Kami"
            />
          </div>
        </div>
      </div>
    </div>
  </section>
        <!-- End Portfolio Section -->
    <section id="team" class="team" style="background-color:white">
            <div class="container" data-aos="fade-up" style="color:white">
                <header class="section-header">
                    <div class="about-title second-title pb-25">
                        <h2 class="text-center" style="color:#195577">LIST PRODUK</h2>
                    </div>
                </header>

                <div class="swiper stories-slider">
				<!-- Additional required wrapper -->
                    <div class="swiper-wrapper"style= " width: 30%; height: 30%;object-fit: cover;">
                        <!-- Slides -->
                        <div class="swiper-slide stories-slide">
                            <div class="stories-slide__img">
                                <picture><source srcset="{{ asset('asset/img/galery/mc-lokal.jpg') }}" type="image/webp"><img src="{{ asset('asset/img/galery/mc-lokal.jpg') }}" 
                                alt="MC Lokal"></picture>
                            </div>
                            <div class="stories-slide__text">MC Lokal</div>
                        </div>
                        <div class="swiper-slide stories-slide">
                            <div class="stories-slide__img">
                                <picture><source srcset="{{ asset('asset/img/galery/mc-sumatera.jpg') }}" type="image/webp"><img src="{{ asset('asset/img/galery/mc-sumatera.jpg') }}" 
                                alt="MC Sumatera"></picture>
                            </div>
                            <div class="stories-slide__text">MC Sumatera</div>
                        </div>
                        <div class="swiper-slide stories-slide">
                            <div class="stories-slide__img">
                            <picture><source srcset="{{ asset('asset/img/galery/dolken-gelam.jpg') }}" type="image/webp"><img src="{{ asset('asset/img/galery/dolken-gelam.jpg') }}" 
                            alt="Dolken Gelam"></picture>
                            </div>
                            <div class="stories-slide__text">Dolken Gelam</div>
                        </div>

                        <div class="swiper-slide stories-slide">
                            <div class="stories-slide__img">
                            <picture><source srcset="{{ asset('asset/img/galery/kayu-ulin.jpg') }}" type="image/webp"><img src="{{ asset('asset/img/galery/kayu-ulin.jpg') }}" 
                            alt="Kayu Ulin"></picture>
                            </div>
                            <div class="stories-slide__text">Kayu Ulin</div>
                        </div>

                        <div class="swiper-slide stories-slide">
                            <div class="stories-slide__img">
                            <picture><source srcset="{{ asset('asset/img/galery/kayu-meranti.jpg') }}" type="image/webp"><img src="{{ asset('asset/img/galery/kayu-meranti.jpg') }}" 
                            alt="Kayu Meranti"></picture>
                            </div>
                            <div class="stories-slide__text">Kayu Meranti</div>
                        </div>

                        <div class="swiper-slide stories-slide">
                            <div class="stories-slide__img">
                            <picture><source srcset="{{ asset('asset/img/galery/kayu-bengkirai.jpg') }}" type="image/webp"><img src="{{ asset('asset/img/galery/kayu-bengkirai.jpg') }}" 
                            alt="Kayu Bengkirai"></picture>
                            </div>
                            <div class="stories-slide__text">Kayu Bengkirai</div>
                        </div>

                        <div class="swiper-slide stories-slide">
                            <div class="stories-slide__img">
                                <picture><source srcset="{{ asset('asset/img/galery/racuk-sumatera.jpg') }}" type="image/webp"><img src="{{ asset('asset/img/galery/racuk-sumatera.jpg') }}" 
                                alt="Racuk Sumatera"></picture>
                            </div>
                            <div class="stories-slide__text">Racuk Sumatera</div>
                        </div>
                        <div class="swiper-slide stories-slide">
                            <div class="stories-slide__img">
                                <picture><source srcset="{{ asset('asset/img/galery/triplek.jpg') }}" type="image/webp"><img src="{{ asset('asset/img/galery/triplek.jpg') }}" 
                                alt="Triplek"></picture>
                            </div>
                            <div class="stories-slide__text">Triplek</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Team Section -->
        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio" style="background-color:#f1f3f2">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <div class="about-title second-title pb-25">
                        <h2 class="text-center" style="color:#195577">DAFTAR PRODUK</h2>
                    </div>
                    <br>
                    <br> <br>

                    <div class="portfolio">
                        <div class="portfolio-item">
                            <img src="{{ asset('asset/img/galery/mc-lokal.jpg') }}" alt="MC Lokal" />
                            <p>MC Lokal</p>
                            <a href="#" class="whatsapp-link" data-item="MC Lokal">Beli Sekarang</a>
                        </div>
                        <div class="portfolio-item">
                            <img src="{{ asset('asset/img/galery/mc-sumatera.jpg') }}" alt="Mc Sumatera" />
                            <p>MC Sumatera</p>
                            <a href="#" class="whatsapp-link" data-item="MC Sumatera">Beli Sekarang</a>
                        </div>
                        <div class="portfolio-item">
                            <img src="{{ asset('asset/img/galery/dolken-gelam.jpg') }}" alt="Dolken Gelam" />
                            <p>Dolken Gelam</p>
                            <a href="#" class="whatsapp-link" data-item="Dolken Gelam">Beli Sekarang</a>
                        </div>
                        <div class="portfolio-item">
                            <img src="{{ asset('asset/img/galery/kayu-ulin.jpg') }}" alt="Kayu Ulin" />
                            <p>Kayu Ulin</p>
                            <a href="#" class="whatsapp-link" data-item="Kayu Ulin">Beli Sekarang</a>
                        </div>
                        <div class="portfolio-item">
                            <img src="{{ asset('asset/img/galery/kayu-meranti.jpg') }}" alt="Kayu Meranti" />
                            <p>Kayu Meranti</p>
                            <a href="#" class="whatsapp-link" data-item="Kayu Meranti">Beli Sekarang</a>
                        </div>
                        <div class="portfolio-item">
                            <img src="{{ asset('asset/img/galery/kayu-bengkirai.jpg') }}" alt="Kayu Bengkirai" />
                            <p>Kayu Bengkirai</p>
                            <a href="#" class="whatsapp-link" data-item="Kayu Bengkirai">Beli Sekarang</a>
                        </div>
                        <div class="portfolio-item">
                            <img src="{{ asset('asset/img/galery/racuk-sumatera.jpg') }}" alt="Racuk Sumatera" />
                            <p>Racuk Sumatera</p>
                            <a href="#" class="whatsapp-link" data-item="Racuk Sumatera">Beli Sekarang</a>
                        </div>
                        <div class="portfolio-item">
                            <img src="{{ asset('asset/img/galery/triplek.jpg') }}" alt="Triplek" />
                            <p>Triplek</p>
                            <a href="#" class="whatsapp-link" data-item="Triplek">Beli Sekarang</a>
                        </div>
                        <!-- Add more portfolio items as needed -->
                    </div>

                    <!-- Popup Form -->
                    <div id="popup-form" class="modal">
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <h2>Selamat datang</h2>
                            <p>Tolong isi nama anda</p>
                            <form id="whatsappForm">
                                <input type="text" id="userName" name="userName" placeholder="Nama Anda" required />
                                <button type="submit">Submit</button>
                            </form>
                        </div>
                    </div>

                    <!-- Thank You Popup -->
                    <div id="thank-you-popup" class="modal">
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <p id="thankYouMessage">Terima kasih!</p>
                        </div>
                    </div>


            </div>
        </section>
        <!-- ======= About Section ======= -->
  <!-- ====== About Section ====== -->
        <section id="tentang-kami" class="about-area about-p pt-5 pb-5 p-relative fix" style="background-color:white">
            <div class="container" data-aos="fade-up">
            <div class="row justify-content-center align-items-center">
                <!-- Kolom Kiri (Teks) -->
                <div class="col-lg-6 col-md-12 col-sm-12">
                <div 
                    class="about-content2 s-about-content wow fadeInRight animated"
                    data-animation="fadeInRight"
                    data-delay=".4s"
                >
                    <div class="about-title second-title pb-25">
                        <h2 class="text-center" style="color:#195577">Mengapa Harus Memilih Kami ?</h2>
                    </div>
                    <p>
                    Kami adalah pilihan utama untuk kebutuhan kayu industri Anda karena kami menawarkan kualitas terjamin dan berbagai pilihan produk yang dapat disesuaikan dengan spesifikasi proyek Anda. Kami memberikan harga kompetitif yang memberikan nilai terbaik tanpa mengorbankan kualitas. Kami juga mengutamakan pengiriman tepat waktu, memastikan bahwa kayu yang Anda pesan tiba sesuai jadwal.Hubungi kami hari ini untuk informasi lebih lanjut atau untuk melakukan pemesanan.
                    </p>
                    <button style="background-color:#00173c; color:white">
                        Hubungi Kami
                    </button>
                </div>
                </div>
                <!-- Kolom Kanan (Gambar) -->
                <div class="col-lg-6 col-md-12 col-sm-12">
                <div 
                    class="s-about-img p-relative wow fadeInLeft animated"
                    data-animation="fadeInLeft" 
                    data-delay=".4s"
                >
                    <img 
                    src="{{ asset('asset/img/about_img03.png') }}" 
                    alt="Tentang Kami"
                    />
                </div>
                </div>
            </div>
            </div>
        </section>
        <!-- End Portfolio Section -->

        <style>
            .skills-content p {
                font-size: 18px; /* Ukuran font yang sesuai */
                line-height: 1.6; /* Jarak antar baris agar teks lebih mudah dibaca */
                color: #fff; /* Warna teks putih agar kontras dengan latar belakang */
                text-align: justify; /* Agar teks berada di tengah */
                margin: 20px 0; /* Memberikan jarak atas dan bawah */
                max-width: 90%; Menjaga teks agar tidak melebar terlalu lebar
                margin-left: auto; /* Rata kiri otomatis */
                margin-right: auto; /* Rata kanan otomatis */
            }

            .skills-content p strong {
                font-weight: bold; /* Menambah ketebalan jika ada teks yang perlu ditebalkan */
            }
        </style>
        <section id="garansi" class="skill-area pt-90 pb-90 fix" style="background: #00173c;">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="skills-content s-about-content">
                            <div class="skills-title">
                                <h2 style="font-size: 50px;" >Garansi <b style="color : #ff5e15">100%</b></h2>
                                <h3 style="font-size: 70px; color: white" >Berkualitas</h2>
                            </div>
                            <p>Target kami sebagai salah satu perusahaan berfokus pada industri perkayuan yang dapat memenuhi keinginan dan memberikan solusi terbaik dari kebutuhan Pelanggan kami.</p>
                            <div class="skills-content s-about-content mt-20">
                                <div class="skills">
                                    <div class="skill mb-30">
                                        <div class="skill-name">Bisa Custom Request</div>
                                        <div class="skill-bar">
                                            <div class="skill-per" id="95"></div>
                                        </div>
                                    </div>
                                    <div class="skill mb-30">
                                        <div class="skill-name">Kualitas Kayu 100% Murni</div>
                                        <div class="skill-bar">
                                            <div class="skill-per" id="97"></div>
                                        </div>
                                    </div>
                                    <div class="skill mb-30">
                                        <div class="skill-name">Pengiriman Super Cepat</div>
                                        <div class="skill-bar">
                                            <div class="skill-per" id="96"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 pr-30" style = "display: flex; justify-content: right; align-items: right; height: 100%;" >
                        <div class="video-container">
                            <video class="img" controls>
                                <source src="{{ asset('asset/img/pengiriman.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="blog" class="pt-90 pb-120 p-relative">
    <div class="container">
        <div class="row">
            <!-- Judul Section -->
            <div class="col-12">
                <div class="about-title second-title pb-25">
                    <h2 class="text-center">BLOG & ARTIKEL</h2>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <!-- Gambar Blog -->
                    <img 
                        src="{{ asset('images/blog/' . $blog->file) }}" 
                        class="card-img-top" 
                        alt="{{ $blog->judul }}"
                        style="height: 200px; object-fit: cover;"
                    >
                    
                    <div class="card-body">
                        <!-- Judul dan Meta -->
                        <h5 class="card-title">
                            {{ $blog->judul }}
                        </h5>
                        <small class="text-muted">
                            by {{ $blog->penulis }} | 
                            {{ \Carbon\Carbon::parse($blog->tanggal)->format('M d, Y') }} |
                            Uncategorized
                        </small>

                        <!-- Konten singkat -->
                        <p class="card-text mt-2">
                            {!! \Illuminate\Support\Str::limit($blog->konten, 100, '...') !!}
                        </p>

                        <!-- Tombol Read More -->
                        <a 
                            href="{{ route('read-blog', Str::slug($blog->judul)) }}" 
                            class="btn btn-primary"
                        >
                            Read More
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

        <!-- skill-area -->
        <style>

        /* Video container tetap disesuaikan dengan lebar row */
        .video-container {
            width: 80%; /* Bisa disesuaikan, pastikan video tidak terlalu besar */
            height: 0;
            padding-top: 56.25%; /* Rasio 16:9 */
            position: relative;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Atur ukuran dan tampilan video di dalam container */
        .video-container video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover; /* Memastikan video menutupi seluruh area kontainer */
        }


        </style>
        <!-- skill-area-end -->

               <!-- blog-area -->
               <section id="artikel" class="blog-area p-relative fix pt-90 pb-90" style="background: #00173c;">
                <div class="container">
                    <div class="row align-items-center"> 
                        <div class="col-lg-12">
                            <div class="section-title center-align mb-50 text-center wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                                <h2 style="font-size: 50px; color: white;">
                                 Lokasi Workshop
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                       <div style="text-align: center;" class="col-lg-12">

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.194043276375!2d106.91796181744384!3d-6.104552899999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a21986c4070a1%3A0x12eef34951ac1979!2sPD%20Permata%20Jaya%20-%20Distributor%20Kayu!5e0!3m2!1sid!2sid!4v1667540244614!5m2!1sid!2sid" width="600" height="450" style="border:0; border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <br><br>
                        <a href="https://goo.gl/maps/aEtqNe14FoRLbNPM9" class="btn ss-btn mt-10">LIHAT DI GOOGLE MAPS</a>

                        </div>
                    </div>
                </div>
            </section>
            <!-- blog-area-end -->
        
        <!-- End Contact Section -->
    </main>
    <!-- End #main -->
    <script>
        // Fungsi untuk memulai animasi skill bar
        window.onload = function() {
            // Menentukan skill bar berdasarkan ID
            var skillBars = document.querySelectorAll('.skill-per');
            
            // Setel lebar skill bar sesuai dengan data persentase
            skillBars.forEach(function(bar) {
                var value = bar.getAttribute('id');  // Mengambil ID (misalnya "95", "97", "96")
                bar.style.width = value + '%';  // Mengubah lebar berdasarkan ID (persentase)
            });
        };
    </script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const whatsappLinks = document.querySelectorAll('.whatsapp-link');
    const popupForm = document.getElementById('popup-form');
    const thankYouPopup = document.getElementById('thank-you-popup');
    const thankYouMessage = document.getElementById('thankYouMessage');
    const form = document.getElementById('whatsappForm');
    let selectedItem = '';

    // Function to open modal
    function openModal(modal) {
        modal.style.display = 'block';
    }

    // Function to close modal
    function closeModal(modal) {
        modal.style.display = 'none';
    }

    // When the user clicks on <span> (x), close the modal
    document.querySelectorAll('.close').forEach(function(elem) {
        elem.onclick = function() {
            closeModal(this.closest('.modal'));
        }
    });

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target.classList.contains('modal')) {
            closeModal(event.target);
        }
    }

    // Add click event to all WhatsApp links
    whatsappLinks.forEach(function(link) {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            selectedItem = this.getAttribute('data-item');
            openModal(popupForm);
        });
    });

    // Handle form submission
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        const userName = document.getElementById('userName').value.trim();
        if (userName === '') {
            alert('Silakan isi nama Anda.');
            return;
        }

        // Replace with your WhatsApp number
        const whatsappNumber = '1234567890'; // Contoh: '6281234567890'

        // Construct the message
        const message = `Halo, saya ingin membeli "${selectedItem}", bagaimana cara memesannya?\n\nNama : ${userName}`;

        // Encode the message
        const encodedMessage = encodeURIComponent(message);

        // Create WhatsApp link
        const whatsappLink = `https://wa.me/${whatsappNumber}?text=${encodedMessage}`;

        // Close the form modal
        closeModal(popupForm);

        // Show thank you message
        thankYouMessage.textContent = `Terima kasih, ${userName}! Pesan Anda telah dikirim.`;
        openModal(thankYouPopup);

        // Redirect to WhatsApp after a short delay
        setTimeout(function() {
            window.open(whatsappLink, '_blank');
            closeModal(thankYouPopup);
        }, 2000); // 2 detik
    });
});
</script>

@endsection
