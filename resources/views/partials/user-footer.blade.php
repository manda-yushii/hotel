<footer id="footer" class="footer accent-background">

    <div class="container footer-top">

        <div class="row gy-4">

            <div class="col-lg-4 col-md-6">

                <h4>SurveiHotel</h4>

                <p>
                    Website Survei Pemesanan Hotel yang membantu pelanggan
                    memberikan penilaian terhadap pelayanan hotel secara
                    mudah, cepat, dan transparan.
                </p>

            </div>

            <div class="col-lg-2 col-6">

                <h4>Menu</h4>

                <ul class="list-unstyled">

                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="#">Hotel</a></li>
                    <li><a href="#">Survei</a></li>
                    <li><a href="#">Tentang</a></li>

                </ul>

            </div>

            <div class="col-lg-3 col-6">

                <h4>Kontak</h4>

                <p>Jl. Contoh No.123</p>
                <p>Indonesia</p>
                <p>+62 812-3456-7890</p>
                <p>info@surveihotel.com</p>

            </div>

            <div class="col-lg-3">

                <h4>Ikuti Kami</h4>

                <div class="social-links d-flex gap-3">

                    <a href="#"><i class="bi bi-facebook"></i></a>

                    <a href="#"><i class="bi bi-instagram"></i></a>

                    <a href="#"><i class="bi bi-twitter-x"></i></a>

                    <a href="#"><i class="bi bi-youtube"></i></a>

                </div>

            </div>

        </div>

    </div>

    <div class="container copyright text-center mt-4">

        <p>
            © {{ date('Y') }}
            <strong>SurveiHotel</strong>.
            All Rights Reserved.
        </p>

        <small>
            Dibuat menggunakan Laravel & Bootstrap Impact.
        </small>

    </div>

</footer>