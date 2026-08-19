<section id="hero" class="hero section accent-background">

    <div class="container">

        <div class="row gy-4 align-items-center">

            <div class="col-lg-6 d-flex flex-column justify-content-center">

                <h1>
                    Selamat Datang di
                    <span>Survei Pemesanan Hotel</span>
                </h1>

                <p>
                    Berikan penilaian terhadap pelayanan hotel yang telah Anda
                    pesan dengan mudah, cepat, dan terpercaya.
                </p>

                <div class="d-flex">

                    <a href="#about" class="btn-get-started">
                        Mulai Sekarang
                    </a>

                    <a href="{{ url('/login') }}" class="btn-watch-video d-flex align-items-center">

                        <i class="bi bi-box-arrow-in-right"></i>

                        <span>Login</span>

                    </a>

                </div>

            </div>

            <div class="col-lg-6 hero-img">

                <img src="{{ asset('user/assets/img/hero-img.svg') }}" class="img-fluid" alt="Hero">

            </div>

        </div>

    </div>

</section>
