<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Aya's portfolio</title>
    <meta name="description" content="Portfolio Template for Developer" />

    <link rel="stylesheet" href="{{asset('css/style.css')}}" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700;900&display=swap"
        rel="stylesheet"
    />
</head>
<body>
<div id="loading-screen">
    <object id="spinner" type="image/svg+xml" data="{{asset('assets/svg/Spin-1s-200px.svg')}}"></object>
</div>
<header class="header">
    <div class="header__content">
        <div class="header__logo-container">
            <div class="header__logo-img-cont">
                <img
                    src="{{asset('assets/png/aya-hosni.png')}}"
                    alt="Aya Logo Image"
                    class="header__logo-img"
                />
            </div>
            <span class="header__logo-sub">Aya Hosni</span>
        </div>
        <div class="header__main">
            <ul class="header__links">
                <li class="header__link-wrapper">
                    <a href="{{url('/')}}" class="header__link"> Home </a>
                </li>
                <li class="header__link-wrapper">
                    <a href="#about" class="header__link">About </a>
                </li>
                <li class="header__link-wrapper">
                    <a href="#projects" class="header__link">
                        Projects
                    </a>
                </li>
                <li class="header__link-wrapper">
                    <a href="#contact" class="header__link"> Contact </a>
                </li>
            </ul>
            <div class="header__main-ham-menu-cont">
                <img
                    src="./assets/svg/ham-menu.svg"
                    alt="hamburger menu"
                    class="header__main-ham-menu"
                />
                <img
                    src="./assets/svg/ham-menu-close.svg"
                    alt="hamburger menu close"
                    class="header__main-ham-menu-close d-none"
                />
            </div>
        </div>
    </div>
    <div class="header__sm-menu">
        <div class="header__sm-menu-content">
            <ul class="header__sm-menu-links">
                <li class="header__sm-menu-link">
                    <a href="{{url('/')}}"> Home </a>
                </li>

                <li class="header__sm-menu-link">
                    <a href="#about"> About </a>
                </li>

                <li class="header__sm-menu-link">
                    <a href="#projects"> Projects </a>
                </li>

                <li class="header__sm-menu-link">
                    <a href="#contact"> Contact </a>
                </li>
            </ul>
        </div>
    </div>
</header>
@yield('content')

<footer class="main-footer">
    <div class="main-container">
        <div class="main-footer__upper">
            <div class="main-footer__row main-footer__row-1">
                <h2 class="heading heading-sm main-footer__heading-sm">
                    <span>Social</span>
                </h2>
                <div class="main-footer__social-cont">
                    <a target="_blank" rel="noreferrer" href="{{url('https://www.linkedin.com/in/ayahosny')}}">
                        <img
                            class="main-footer__icon"
                            src="{{asset('assets/png/linkedin-ico.png')}}"
                            alt="icon"
                        />
                    </a>
                    <a target="_blank" rel="noreferrer" href="{{url('https://github.com/ayahosnii')}}">
                        <img
                            class="main-footer__icon"
                            src="{{asset('assets/png/github-ico.png')}}"
                            alt="icon"
                        />
                    </a>
                    <a target="_blank" rel="noreferrer" href="#">
                        <img
                            class="main-footer__icon"
                            src="./assets/png/twitter-ico.png"
                            alt="icon"
                        />
                    </a>
                    <a target="_blank" rel="noreferrer" href="#">
                        <img
                            class="main-footer__icon"
                            src="./assets/png/yt-ico.png"
                            alt="icon"
                        />
                    </a>
                    <a target="_blank" rel="noreferrer" href="#">
                        <img
                            class="main-footer__icon main-footer__icon--mr-none"
                            src="./assets/png/insta-ico.png"
                            alt="icon"
                        />
                    </a>
                </div>
            </div>
            <div class="main-footer__row main-footer__row-2">
                <h4 class="heading heading-sm text-lt">Aya Hosni</h4>
                <p class="main-footer__short-desc">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit facilis
                    tempora explicabo quae quod deserunt
                </p>
            </div>
        </div>
    </div>
</footer>
<script src="{{asset('assets/js/loader.js')}}"></script>
<script src="{{asset('assets/index.js')}}"></script>
</body>
</html>
