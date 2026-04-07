@extends('layouts.app')

@section('content')
    <div class="home-container">

        <div class="home-image">
            <img src="img\lanz_img.png ">
        </div>

        <div class="left-details">
            <p class="name">Lanz Paulo Flores Abolac</p>  
            <p class="subdetail">Web Developer</p>
        </div>

        <div class="right-details">
            <p class="subdetail2">
            Passionate web developer focused on creating clean, modern, and user-friendly web applications that solve real problems.
            </p> 
        </div>    
    </div>

    <!-- division haha -->
    <div class="line-divider">
        <div class="line-divider-details">
            <span class="divider-index"><span class="diamond">&#9670;</span> (01)</span>
            <span class="divider-title">(About Me)</span>
            <span class="divider-copy">&copy; 2026</span>
        </div>
    </div>

    <div class="about-container">
        <div class="description-container">
            <p class="aboutme-desc">
                I'm <span class="name-red">Lanz</span>, a fresh graduate focused on backend development. I enjoy building structured, efficient systems and working with databases, logic, and server-side processes. I like creating clean and reliable code that supports smooth and functional applications. I believe good development is organized, purposeful, and works effectively behind the scenes without unnecessary complexity.
            </p>
            <p class="keyword">Keywords</p>
            <ul>
                <li>Food</li>
                <li>Music</li>
                <li>Guitar</li>
                <li>Curious</li>
            </ul>
            <p class="social">Social</p>
            <ul>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">GitHub</a></li>
                <li><a href="#">LinkedIn</a></li>
            </ul>
        </div>

        <div class="aboutme-image">
            <img class="img-back" src="img/grad_pic2.jpg" alt="About photo 2">
            <img class="img-front" src="img/grad_pic1.jpg" alt="About photo 1">
        </div>
    </div>

<div class="tech-stack-container">
    <p class="tech-title">Technologies</p>
    <div class="tech-boxes">
        <div class="tech-box">
            <span class="tech-icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 100 100">
                    <path fill="#7e7e7e" d="M46.2 0h16.3v74.9c-8.4 1.6-14.5 2.2-21.2 2.2C21.4 77.1 11 68.2 11 51c0-16.5 11-27.2 28.1-27.2 2.6 0 4.7.2 7.1.8zm.6 38.2c-1.9-.6-3.5-.8-5.5-.8-8.3 0-13 5-13 13.9 0 8.6 4.6 13.4 12.9 13.4 1.8 0 3.3-.1 5.6-.4z"/>
                    <path fill="#7e7e7e" d="M89.3 25.8v37.5c0 12.9-1 19.1-3.8 24.5-2.7 5.1-6.1 8.4-13.4 12l-15.2-7.1c7.2-3.4 10.7-6.3 12.9-10.8 2.3-4.6 3.1-10 3.1-24.1v-32zM71.3 0h16.3v16.6H71.3z"/>
                </svg>
            </span>
            PHP
        </div>
        <div class="tech-box">
            <span class="tech-icon">
            </span>
            JavaScript
        </div>
    </div>
</div>


    <!-- division haha -->
    <div class="line-divider">
        <div class="line-divider-details">
            <span class="divider-index"><span class="diamond">&#9670;</span> (01)</span>
            <span class="divider-title">(About Me)</span>
            <span class="divider-copy">&copy; 2026</span>
        </div>
    </div>
    


@endsection
