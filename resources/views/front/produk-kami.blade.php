@extends('partials.front')
@section('title', 'Produk Kami')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs" style="margin-top: 40px; padding-top: 90px; background-color: #00173c;">
        <div class="container">
            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Produk Kami</li>
            </ol>
            <h2 style="color:white;">Produk Kami</h2>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Team Section (List Produk) ======= -->
    <section id="team" class="team" style="background-color:white;">
        <div class="container" data-aos="fade-up" style="color:white">
            <header class="section-header">
                <div class="about-title second-title pb-25">
                    <h2 class="text-center" style="color: #195577; font-size:48px;">LIST PRODUK</h2>
                </div>
            </header>

            <div class="swiper stories-slider">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper" style="width: 30%; height: 30%; object-fit: cover;">
                    <!-- Slides -->
                    <div class="swiper-slide stories-slide">
                        <div class="stories-slide__img">
                            <picture>
                                <source srcset="{{ asset('asset/img/galery/mc-lokal.jpg') }}" type="image/webp">
                                <img src="{{ asset('asset/img/galery/mc-lokal.jpg') }}" alt="MC Lokal">
                            </picture>
                        </div>
                        <div class="stories-slide__text">MC Lokal</div>
                    </div>

                    <div class="swiper-slide stories-slide">
                        <div class="stories-slide__img">
                            <picture>
                                <source srcset="{{ asset('asset/img/galery/mc-sumatera.jpg') }}" type="image/webp">
                                <img src="{{ asset('asset/img/galery/mc-sumatera.jpg') }}" alt="MC Sumatera">
                            </picture>
                        </div>
                        <div class="stories-slide__text">MC Sumatera</div>
                    </div>

                    <div class="swiper-slide stories-slide">
                        <div class="stories-slide__img">
                            <picture>
                                <source srcset="{{ asset('asset/img/galery/dolken-gelam.jpg') }}" type="image/webp">
                                <img src="{{ asset('asset/img/galery/dolken-gelam.jpg') }}" alt="Dolken Gelam">
                            </picture>
                        </div>
                        <div class="stories-slide__text">Dolken Gelam</div>
                    </div>

                    <div class="swiper-slide stories-slide">
                        <div class="stories-slide__img">
                            <picture>
                                <source srcset="{{ asset('asset/img/galery/kayu-ulin.jpg') }}" type="image/webp">
                                <img src="{{ asset('asset/img/galery/kayu-ulin.jpg') }}" alt="Kayu Ulin">
                            </picture>
                        </div>
                        <div class="stories-slide__text">Kayu Ulin</div>
                    </div>

                    <div class="swiper-slide stories-slide">
                        <div class="stories-slide__img">
                            <picture>
                                <source srcset="{{ asset('asset/img/galery/kayu-meranti.jpg') }}" type="image/webp">
                                <img src="{{ asset('asset/img/galery/kayu-meranti.jpg') }}" alt="Kayu Meranti">
                            </picture>
                        </div>
                        <div class="stories-slide__text">Kayu Meranti</div>
                    </div>

                    <div class="swiper-slide stories-slide">
                        <div class="stories-slide__img">
                            <picture>
                                <source srcset="{{ asset('asset/img/galery/kayu-bengkirai.jpg') }}" type="image/webp">
                                <img src="{{ asset('asset/img/galery/kayu-bengkirai.jpg') }}" alt="Kayu Bengkirai">
                            </picture>
                        </div>
                        <div class="stories-slide__text">Kayu Bengkirai</div>
                    </div>

                    <div class="swiper-slide stories-slide">
                        <div class="stories-slide__img">
                            <picture>
                                <source srcset="{{ asset('asset/img/galery/racuk-sumatera.jpg') }}" type="image/webp">
                                <img src="{{ asset('asset/img/galery/racuk-sumatera.jpg') }}" alt="Racuk Sumatera">
                            </picture>
                        </div>
                        <div class="stories-slide__text">Racuk Sumatera</div>
                    </div>

                    <div class="swiper-slide stories-slide">
                        <div class="stories-slide__img">
                            <picture>
                                <source srcset="{{ asset('asset/img/galery/triplek.jpg') }}" type="image/webp">
                                <img src="{{ asset('asset/img/galery/triplek.jpg') }}" alt="Triplek">
                            </picture>
                        </div>
                        <div class="stories-slide__text">Triplek</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio" style="background-color:#f1f3f2;">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <div class="about-title second-title pb-25">
                    <h2 class="text-center" style="color:#195577;font-size:48px;">DAFTAR PRODUK</h2>
                </div>
            </header>
            <br><br><br>

            <div class="portfolio">
                <div class="portfolio-item">
                    <img src="{{ asset('asset/img/galery/mc-lokal.jpg') }}" alt="MC Lokal" />
                    <p>MC Lokal</p>
                    <a href="#" class="whatsapp-link" data-item="MC Lokal">Beli Sekarang</a>
                </div>
                <div class="portfolio-item">
                    <img src="{{ asset('asset/img/galery/mc-sumatera.jpg') }}" alt="MC Sumatera" />
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
                <!-- Tambahkan item lain sesuai kebutuhan -->
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
    <!-- End Portfolio Section -->

</main>
@endsection
