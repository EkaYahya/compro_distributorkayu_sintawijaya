@extends('partials.front')
@section('title', 'Kontak')
@section('content')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs" style="margin-top: 60px; padding-top: 120px; background-color: #00173c;">
        <div class="container">
            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Kontak</li>
            </ol>
            <h2 style="color:white;">Kontak</h2>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Lokasi Workshop Section ======= -->
    <section id="artikel" class="blog-area p-relative fix pt-90 pb-90" style="background: white;">
        <div class="container">
            <div class="row align-items-center"> 
                <div class="col-lg-12">
                    <div class="section-title center-align mb-50 text-center wow fadeInDown animated"
                         data-animation="fadeInDown" data-delay=".4s">
                        <h2 style="font-size: 50px; color: #00173c;">
                            Lokasi Workshop
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div style="text-align: center;" class="col-lg-12">
                    <!-- Google Maps Embed -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.194043276375!2d106.91796181744384!3d-6.104552899999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a21986c4070a1%3A0x12eef34951ac1979!2sPD%20Permata%20Jaya%20-%20Distributor%20Kayu!5e0!3m2!1sid!2sid!4v1667540244614!5m2!1sid!2sid"
                            width="600"
                            height="450"
                            style="border:0; border-radius: 10px;"
                            allowfullscreen
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                    <br><br>
                    <!-- Tombol Link ke Google Maps -->
                    <a href="https://goo.gl/maps/aEtqNe14FoRLbNPM9" class="btn ss-btn mt-10"style="background:#00173c; color:white;">
                        LIHAT DI GOOGLE MAPS
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Lokasi Workshop Section -->

</main>
@endsection
