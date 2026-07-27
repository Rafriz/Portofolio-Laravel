@extends('layouts.app')

@section('title', 'Kontak')

@section('content')

<section class="contact-page">

    <div class="section-title" data-aos="fade-down">
        <h1>Hubungi Saya</h1>
        <p>Silakan hubungi saya jika ingin berdiskusi atau bekerja sama.</p>
    </div>

    <div class="contact-container">

        <!-- Informasi -->
        <div class="contact-info" data-aos="fade-right">

            <h2>Mari Terhubung 👋</h2>

            <p>
                Saya terbuka untuk diskusi, kerja sama, maupun
                kesempatan magang dan pengembangan website.
            </p>

            <div class="info-item">
                <span>📧</span>
                <p>rafireskypratama@email.com</p>
            </div>

            <div class="info-item">
                <span>📱</span>
                <p>@rafrzkyprtm_</p>
            </div>

            <div class="info-item">
                <span>💻</span>
                <p>github.com/Rafriz</p>
            </div>

            <div class="info-item">
                <span>📍</span>
                <p>Makassar, Indonesia</p>
            </div>

        </div>

        <!-- Form -->
        <div class="contact-form" data-aos="fade-left">

            <form>

                <input type="text"
                       placeholder="Nama Lengkap"
                       required>

                <input type="email"
                       placeholder="Email"
                       required>

                <input type="text"
                       placeholder="Subjek">

                <textarea rows="6"
                          placeholder="Tulis pesan..."
                          required></textarea>

                <button type="submit">
                    Kirim Pesan
                </button>

            </form>

        </div>

    </div>

</section>

@endsection