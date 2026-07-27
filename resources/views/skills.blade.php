@extends('layouts.app')

@section('title', 'Skills')

@section('content')

<section class="skills-page">

    <div class="section-title" data-aos="fade-down">
        <h1>My Skills</h1>
        <p>Teknologi yang saya kuasai dan terus saya pelajari.</p>
    </div>

    <div class="skills-container">

        <div class="skill-card" data-aos="zoom-in">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg">
            <h3>HTML5</h3>
            <div class="progress">
                <div class="bar html">95%</div>
            </div>
        </div>

        <div class="skill-card" data-aos="zoom-in" data-aos-delay="100">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg">
            <h3>CSS3</h3>
            <div class="progress">
                <div class="bar css">90%</div>
            </div>
        </div>

        <div class="skill-card" data-aos="zoom-in" data-aos-delay="200">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg">
            <h3>JavaScript</h3>
            <div class="progress">
                <div class="bar js">80%</div>
            </div>
        </div>

        <div class="skill-card" data-aos="zoom-in" data-aos-delay="300">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg">
            <h3>PHP</h3>
            <div class="progress">
                <div class="bar php">90%</div>
            </div>
        </div>

        <div class="skill-card" data-aos="zoom-in" data-aos-delay="400">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg">
            <h3>Laravel</h3>
            <div class="progress">
                <div class="bar laravel">88%</div>
            </div>
        </div>

        <div class="skill-card" data-aos="zoom-in" data-aos-delay="500">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg">
            <h3>MySQL</h3>
            <div class="progress">
                <div class="bar mysql">85%</div>
            </div>
        </div>

        <div class="skill-card" data-aos="zoom-in" data-aos-delay="600">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg">
            <h3>Git</h3>
            <div class="progress">
                <div class="bar git">85%</div>
            </div>
        </div>

        <div class="skill-card" data-aos="zoom-in" data-aos-delay="700">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg">
            <h3>GitHub</h3>
            <div class="progress">
                <div class="bar github">90%</div>
            </div>
        </div>

    </div>

</section>

@endsection