<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | AneDayz</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins',sans-serif;
            scroll-behavior:smooth;
        }

        body{
            background:#0f172a;
            color:white;
        }

        nav{
            position:fixed;
            top:0;
            width:100%;
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:20px 80px;
            background:rgba(15,23,42,.9);
            backdrop-filter:blur(10px);
            z-index:999;
        }

        .logo{
            font-size:28px;
            font-weight:700;
            color:#38bdf8;
        }

        nav ul{
            display:flex;
            list-style:none;
            gap:35px;
        }

        nav a{
            color:white;
            text-decoration:none;
            transition:.3s;
        }

        nav a:hover{
            color:#38bdf8;
        }

        .hero{
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            text-align:center;
            padding:20px;
        }

        .hero h3{
            color:#38bdf8;
            font-size:22px;
        }

        .hero h1{
            font-size:65px;
            margin:15px 0;
        }

        .hero span{
            color:#38bdf8;
        }

        .hero p{
            max-width:700px;
            margin:25px auto;
            line-height:1.8;
            color:#cbd5e1;
        }

        .btn{
            display:inline-block;
            margin:10px;
            padding:14px 32px;
            border-radius:8px;
            text-decoration:none;
            font-weight:600;
            transition:.3s;
        }

        .btn-primary{
            background:#2563eb;
            color:white;
        }

        .btn-primary:hover{
            background:#1d4ed8;
        }

        .btn-outline{
            border:2px solid #38bdf8;
            color:#38bdf8;
        }

        .btn-outline:hover{
            background:#38bdf8;
            color:#0f172a;
        }

        section{
            padding:100px 80px;
        }

        .title{
            text-align:center;
            font-size:40px;
            margin-bottom:50px;
            color:#38bdf8;
        }

        .about{
            max-width:850px;
            margin:auto;
            text-align:center;
            line-height:2;
            color:#cbd5e1;
        }

        .skills{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(180px,1fr));
            gap:20px;
        }

        .skill{
            background:#1e293b;
            padding:25px;
            border-radius:10px;
            text-align:center;
            transition:.3s;
        }

        .skill:hover{
            transform:translateY(-8px);
            background:#2563eb;
        }

        .portfolio{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
            gap:30px;
        }

        .card{
            background:#1e293b;
            padding:30px;
            border-radius:15px;
            transition:.3s;
        }

        .card:hover{
            transform:translateY(-10px);
        }

        .card h3{
            color:#38bdf8;
            margin-bottom:15px;
        }

        .contact{
            text-align:center;
            line-height:2;
        }

        footer{
            text-align:center;
            padding:30px;
            background:#020617;
            color:#94a3b8;
        }

        @media(max-width:768px){

            nav{
                padding:20px;
            }

            nav ul{
                display:none;
            }

            .hero h1{
                font-size:45px;
            }

            section{
                padding:70px 20px;
            }

        }

    </style>

</head>
<body>

<nav>

    <div class="logo">Rafi Rizki </div>

    <ul>
        <li><a href="#about">Tentang</a></li>
        <li><a href="#skills">Skill</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#contact">Kontak</a></li>
    </ul>

</nav>

<div class="hero">

    <div>

        <h3 data-aos="fade-down">Halo, Saya</h3>

        <h1 data-aos="zoom-in">
            <span>Rafi Rizki</span>
        </h1>

        <h2 data-aos="fade-up">
            <span id="typing"></span>
        </h2>

        <p data-aos="fade-up" data-aos-delay="200">
            Saya adalah siswa SMK jurusan Rekayasa Perangkat Lunak yang memiliki
            minat dalam pengembangan website menggunakan Laravel, PHP, MySQL,
            HTML, CSS, JavaScript, dan GitHub.
        </p>

        <a href="#portfolio"
            class="btn btn-primary"
            data-aos="zoom-in"
            data-aos-delay="400">
            Lihat Portfolio
        </a>

        <a href="#contact"
            class="btn btn-outline"
            data-aos="zoom-in"
            data-aos-delay="600">
            Hubungi Saya
        </a>

    </div>

</div>

<section id="about">

    <h2 class="title">Tentang Saya</h2>

    <div class="about">

        Saya adalah seorang siswa SMK jurusan Rekayasa Perangkat Lunak (RPL) yang memiliki minat besar di bidang Web Development. 
        Saya senang mempelajari dan mengembangkan website yang tidak hanya memiliki tampilan modern dan responsif, tetapi juga mudah digunakan oleh pengguna. 
        Bagi saya, sebuah website yang baik bukan hanya menarik secara visual, tetapi juga memiliki performa yang cepat, struktur kode yang rapi, 
        serta pengalaman pengguna (User Experience) yang nyaman.

    </div>

</section>

<section id="skills">

    <h2 class="title">Skill</h2>

    <div class="skills">

        <div class="skill">HTML</div>
        <div class="skill">CSS</div>
        <div class="skill">JavaScript</div>
        <div class="skill">PHP</div>
        <div class="skill">Laravel</div>
        <div class="skill">MySQL</div>
        <div class="skill">Git</div>
        <div class="skill">GitHub</div>

    </div>

</section>

<section id="portfolio">

    <h2 class="title">Portfolio</h2>

    <div class="portfolio">

        <div class="card">
            <h3>RingKita</h3>
            <p>Aplikasi absensi member berbasis Laravel dengan sistem paket latihan.</p>
        </div>

        <div class="card">
            <h3>Inventory App</h3>
            <p>Sistem manajemen inventaris menggunakan Laravel dan MySQL.</p>
        </div>

        <div class="card">
            <h3>Admin Dashboard</h3>
            <p>Dashboard modern dengan fitur CRUD dan autentikasi pengguna.</p>
        </div>

    </div>

</section>

<section id="contact">

    <h2 class="title">Kontak</h2>

    <div class="contact">

        <p>📧 rafireskypratama@email.com</p>
        <p>💻 github.com/rafzky</p>
        <p>📱 Instagram : @rafrzkyprtm_</p>

    </div>

</section>

<footer>

    © 2026 AneDayz • Built with Laravel

</footer>

</body>
</html>