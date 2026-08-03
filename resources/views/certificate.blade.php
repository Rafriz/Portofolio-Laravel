@extends('layouts.app')

@section('title','Sertifikat')

@section('content')

<section class="certificate-section">

    <div class="section-title" data-aos="fade-down">
        <h1>Sertifikat & Project</h1>
        <p>Pencapaian dan project yang pernah saya kerjakan.</p>
    </div>

    <div class="certificate-container">

        <!-- Cisco -->
        <div class="certificate-card" data-aos="zoom-in">

            <img src="{{ asset('images/cisco-js2.png') }}" alt="Cisco">

            <div class="certificate-content">

                <h2>🏆 Cisco JavaScript Essentials 2</h2>

                <p>
                    Berhasil menyelesaikan pelatihan JavaScript Essentials 2
                    yang diselenggarakan oleh Cisco Networking Academy
                    bersama OpenEDG JavaScript Institute.
                </p>

                <span>10 Juni 2026</span>

            </div>

        </div>

        <!-- RingKita -->
        <div class="certificate-card" data-aos="zoom-in" data-aos-delay="200">

            <img src="{{ asset('images/ringkita-project.png') }}" alt="RingKita">

            <div class="certificate-content">

                <h2>🥊 RingKita</h2>

                <p>
                    Aplikasi manajemen sasana boxing berbasis Laravel
                    dengan fitur Login, QR Absensi, Jadwal Latihan,
                    Pembelian Paket, Pembayaran dan Dashboard Admin.
                </p>

                <span>Laravel • PHP • MySQL</span>

            </div>

        </div>

    </div>

</section>

@endsection