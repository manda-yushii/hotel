@extends('layouts.user')

@section('title', 'Tentang')

@section('content')

<section class="page-title section">

    <div class="container text-center">

        <h1>Tentang Website</h1>

        <p>
            Mengenal lebih dekat Website Survei Pemesanan Hotel.
        </p>

    </div>

</section>

<section class="section">

    <div class="container">

        <div class="row align-items-center gy-5">

            <div class="col-lg-6">

                <img
                    src="{{ asset('user/assets/img/about.jpg') }}"
                    class="img-fluid rounded shadow"
                    alt="Tentang Website">

            </div>

            <div class="col-lg-6">

                <h2>Survei Pemesanan Hotel</h2>

                <p class="mt-3">
                    Website ini dibuat untuk membantu pelanggan memberikan
                    penilaian terhadap pelayanan hotel secara mudah, cepat,
                    dan transparan.
                </p>

                <p>
                    Melalui survei ini, pihak hotel dapat mengetahui tingkat
                    kepuasan pelanggan dan meningkatkan kualitas pelayanan
                    di masa mendatang.
                </p>

                <div class="row mt-4">

                    <div class="col-6">

                        <h3>10+</h3>

                        <p>Hotel Terdaftar</p>

                    </div>

                    <div class="col-6">

                        <h3>1000+</h3>

                        <p>Responden</p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection