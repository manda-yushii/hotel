@extends('layouts.user')

@section('title', 'Daftar Hotel')

@section('content')

    <!-- Judul Halaman -->
    <section class="page-title section light-background">

        <div class="container text-center">

            <h1>Daftar Hotel</h1>

            <p>
                Temukan hotel yang tersedia untuk diberikan penilaian melalui survei.
            </p>

        </div>

    </section>

    <!-- Daftar Hotel -->
    <section class="section">

        <div class="container">

            <div class="row gy-4">

                <div class="row gy-4">

                    @include('components.hotel-card')

                </div>

            </div>
        </div>

    </section>

@endsection
