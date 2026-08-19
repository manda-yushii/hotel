<section id="hotel" class="section">

    <div class="container section-title" data-aos="fade-up">

        <h2>Hotel Pilihan</h2>

        <p>
            Beberapa hotel yang tersedia untuk diberikan penilaian.
        </p>

    </div>

    <div class="container">

        <div class="row gy-4">

            @include('components.hotel-card')

            @include('components.hotel-card')

            @include('components.hotel-card')

        </div>

        <div class="text-center mt-5">

            <a href="{{ route('user.hotel') }}" class="btn btn-primary rounded-pill">

                Lihat Semua Hotel

            </a>

        </div>

    </div>

</section>
