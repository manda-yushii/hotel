<div class="col-lg-4 col-md-6">

    <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">

        <img src="{{ asset('user/assets/img/hotel/hotel1.jpg') }}" class="card-img-top" alt="Hotel Nusantara"
            style="height:230px; object-fit:cover;">

        <div class="card-body d-flex flex-column">

            <div class="d-flex justify-content-between align-items-center mb-2">

                <h5 class="card-title fw-bold mb-0">
                    Hotel Nusantara
                </h5>

                <span class="badge bg-success">
                    ★ 4.9
                </span>

            </div>

            <p class="text-muted mb-3">
                <i class="bi bi-geo-alt-fill text-danger"></i>
                Jakarta, Indonesia
            </p>

            <p class="card-text text-muted flex-grow-1">
                Hotel bintang 5 dengan fasilitas lengkap, lokasi strategis,
                dan pelayanan yang ramah.
            </p>

            <div class="d-grid">

                <a href="{{ route('user.hotel.detail') }}" class="btn btn-primary rounded-pill">

                    <i class="bi bi-eye me-1"></i>

                    Lihat Detail

                </a>

            </div>

        </div>

    </div>

</div>
