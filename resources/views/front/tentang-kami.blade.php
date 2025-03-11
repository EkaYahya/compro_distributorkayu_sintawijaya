@extends('partials.front')
@section('title', 'Tentang Kami')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs" style="margin-top: 40px; padding-top: 90px; background-color: #00173c;">
            <div class="container">
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Tentang Kami</li>
                </ol>
                <h2 style="color:white;">Tentang Kami</h2>
            </div>
        </section>
        <!-- End Breadcrumbs -->

        <!-- ======= About Section ======= -->
        <section id="tentang-kami"
         class="about-area about-p pt-120 pb-200 p-relative fix"
         style="background: url('{{ asset('asset/img/about-bg.png') }}') no-repeat center center; 
                background-size: cover;">
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-center align-items-center">
        <!-- Kolom Kiri (Teks) -->
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div 
            class="about-content2 s-about-content wow fadeInRight animated"
            data-animation="fadeInRight"
            data-delay=".4s"
          >
            <div class="about-title second-title pb-25" data-aos="fade-up">
              <h2>CV Permata Sinta Jaya</h2>
            </div>
            <p>
              Tujuan utama kami adalah menyediakan kayu dan produk yang berkualitas tinggi 
              dan lengkap, sehingga memudahkan pelanggan kami untuk memenuhi berbagai kebutuhan 
              kayu mereka.
            </p>
            <ul class="mb-30">
              <li>
                <div class="icon"></div>
                <div class="text">
                  Dibuat sesuai minat Anda.
                </div>
              </li>
              <li>
                <div class="icon"></div>
                <div class="text">
                  Kayu dijamin awet.
                </div>
              </li>
              <li>
                <div class="icon"></div>
                <div class="text">
                  Kualitas terbaik, harga terjangkau.
                </div>
              </li>
            </ul>
            <div class="experience-text">
              <div class="exp-no">
                <span>98 <sub>%</sub></span>
                <p>Pelanggan Puas</p>
              </div>
              <div class="exp-text">
                <br />
                Konsultasikan kebutuhan bangunan Anda dengan kami sekarang juga.
                (WA : 0821 1111 0911)
              </div>
            </div>
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
        <!-- End About Section -->

    </main><!-- End #main -->
@endsection
