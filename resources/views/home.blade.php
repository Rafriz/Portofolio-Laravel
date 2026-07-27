@extends('layouts.app')

@section('title', 'Home')

@section('content')

<section class="hero">

    <div id="particles-js"></div>

    <div class="hero-content" data-aos="fade-up">

        <h3>👋 Halo, Saya</h3>

        <h1>
            <span>Rafi Rizki</span>
        </h1>

        <h2>
            <span id="typing"></span>
        </h2>

        <p>
            Saya adalah siswa SMK jurusan Rekayasa Perangkat Lunak (RPL)
            yang memiliki minat besar dalam pengembangan website modern.
            Saya senang membangun aplikasi yang cepat, responsif,
            mudah digunakan, dan memiliki tampilan profesional
            menggunakan Laravel, PHP, MySQL, HTML, CSS, dan JavaScript.
        </p>

        <div class="hero-button">

            <a href="{{ route('portfolio') }}" class="btn btn-primary">
                Lihat Portfolio
            </a>

            <a href="{{ route('contact') }}" class="btn btn-outline">
                Hubungi Saya
            </a>

        </div>

    </div>

</section>

<section class="preview">

    <div class="preview-card" data-aos="zoom-in">

        <h1>💻</h1>

        <h2>Web Developer</h2>

        <p>
            Membuat website modern menggunakan Laravel dan PHP.
        </p>

    </div>

    <div class="preview-card" data-aos="zoom-in" data-aos-delay="200">

        <h1>⚙️</h1>

        <h2>Backend</h2>

        <p>
            Mengembangkan REST API, CRUD, Authentication,
            dan Database MySQL.
        </p>

    </div>

    <div class="preview-card" data-aos="zoom-in" data-aos-delay="400">

        <h1>🎨</h1>

        <h2>Frontend</h2>

        <p>
            Mendesain tampilan website yang modern,
            responsif, dan nyaman digunakan.
        </p>

    </div>

</section>

<section class="cta" data-aos="fade-up">

    <h2>
        Siap Membangun Website Modern Bersama Saya?
    </h2>

    <p>
        Saya selalu berusaha meningkatkan kemampuan dalam dunia Web Development
        dan siap mengembangkan proyek baru dengan teknologi terkini.
    </p>

    <a href="{{ route('portfolio') }}" class="btn btn-primary">
        Lihat Semua Project
    </a>

</section>

@endsection