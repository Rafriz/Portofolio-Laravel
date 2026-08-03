@extends('layouts.app')

@section('title', 'Portfolio')

@section('content')

<section class="portfolio-page">

    <div class="section-title" data-aos="fade-down">
        <h1>My Portfolio</h1>
        <p>Beberapa project yang pernah saya kerjakan.</p>
    </div>

    <div class="portfolio-container">

        <!-- Project 1 -->
        <div class="project-card" data-aos="fade-up">

            <div class="project-image">
                🥊
            </div>

            <div class="project-content">

                <h2>RingKita</h2>

                <p>
                    Aplikasi manajemen sasana boxing berbasis Digital.
                    Memiliki fitur paket latihan, absensi member,
                    jadwal latihan, dan dashboard admin.
                </p>

                <div class="tech">

                    <span>Laravel</span>
                    <span>PHP</span>
                    <span>MySQL</span>

                </div>

                <div class="project-button">

                    <a href="#" class="btn-project">
                        Demo
                    </a>

                    <a href="https://github.com/Rafriz"
                       target="_blank"
                       class="btn-github">
                        GitHub
                    </a>

                </div>

            </div>

        </div>

        <!-- Project 2 -->
        <div class="project-card" data-aos="fade-up" data-aos-delay="200">

            <div class="project-image">
                📦
            </div>

            <div class="project-content">

                <h2>Inventory App</h2>

                <p>
                    Sistem inventaris berbasis Laravel
                    dengan fitur CRUD produk,
                    kategori, stok, dan laporan.
                </p>

                <div class="tech">

                    <span>Laravel</span>
                    <span>MySQL</span>
                    <span>Bootstrap</span>

                </div>

                <div class="project-button">

                    <a href="#" class="btn-project">
                        Demo
                    </a>

                    <a href="https://github.com/Rafriz"
                       target="_blank"
                       class="btn-github">
                        GitHub
                    </a>

                </div>

            </div>

        </div>

        <!-- Project 3 -->
        <div class="project-card" data-aos="fade-up" data-aos-delay="400">

            <div class="project-image">
                📊
            </div>

            <div class="project-content">

                <h2>Admin Dashboard</h2>

                <p>
                    Dashboard modern lengkap dengan
                    autentikasi login,
                    CRUD data,
                    statistik,
                    dan manajemen pengguna.
                </p>

                <div class="tech">

                    <span>Laravel</span>
                    <span>JavaScript</span>
                    <span>MySQL</span>

                </div>

                <div class="project-button">

                    <a href="#" class="btn-project">
                        Demo
                    </a>

                    <a href="https://github.com/Rafriz"
                       target="_blank"
                       class="btn-github">
                        GitHub
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection