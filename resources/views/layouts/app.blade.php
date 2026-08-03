<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Rafi Rizki</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">

    <!-- Font Awesome -->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<!-- Background Particle -->
<div id="particles-js"></div>

<!-- ================= NAVBAR ================= -->

<nav class="navbar">

    <a href="{{ route('home') }}" class="logo">
        Rafi<span>Rizki</span>
    </a>

    <ul class="nav-menu">

        <li><a href="{{ route('home') }}">Home</a></li>

        <li><a href="{{ route('about') }}">Tentang</a></li>

        <li><a href="{{ route('skills') }}">Skills</a></li>

        <li><a href="{{ route('portfolio') }}">Portfolio</a></li>

        <li><a href="{{ route('contact') }}">Kontak</a></li>

        <li><a href="{{ route('certificate') }}">Sertifikat</a>
     
    </ul>

</nav>

<!-- ================= CONTENT ================= -->

<main>

    @yield('content')

</main>

<!-- ================= FOOTER ================= -->

<footer>

    <h2>Rafi Rizki</h2>

    <p>
        Laravel Developer • Web Developer • Frontend Developer
    </p>

    <div class="social">

        <a href="https://github.com/Rafriz" target="_blank">
            <i class="fab fa-github"></i>
        </a>

        <a href="https://instagram.com/rafrzkyprtm_" target="_blank">
            <i class="fab fa-instagram"></i>
        </a>

        <a href="#">
            <i class="fab fa-linkedin"></i>
        </a>

    </div>

    <small>
        © {{ date('Y') }} Rafi Rizki. All Rights Reserved.
    </small>

</footer>

<!-- ================= SCRIPT ================= -->

<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

<script src="https://cdn.jsdelivr.net/npm/particles.js"></script>

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script src="{{ asset('js/main.js') }}"></script>

<script>
AOS.init({
    duration:1000,
    once:true
});

particlesJS("particles-js", {
    particles:{
        number:{value:70},
        color:{value:"#38bdf8"},
        shape:{type:"circle"},
        opacity:{value:0.5},
        size:{value:3},
        line_linked:{
            enable:true,
            color:"#38bdf8",
            opacity:0.3
        },
        move:{
            enable:true,
            speed:2
        }
    }
});
</script>

</body>
</html>

