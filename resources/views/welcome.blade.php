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
<header class="header">
    <div class="header__content">
        <div class="header__logo-container">
            <div class="header__logo-img-cont">
                <img
                    src="{{asset('assets/png/aya-hosni.png')}}"
                    alt="Ram Maheshwari Logo Image"
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
<section class="home-hero">
    <div class="home-hero__content">
        <h1 class="heading-primary">Hey, I'm Aya Hosni</h1>
        <div class="home-hero__info">
            <p class="text-primary">
                I'm a PHP web developer with a passion for building efficient and elegant web applications. I'm always looking to learn new skills and take on new challenges to improve my abilities as a developer.
            </p>
        </div>
        <div class="home-hero__cta">
            <a href="{{asset('cv/aya.pdf')}}" download="aya.pdf" class="btn btn--bg">
                Download CV
            </a>
        </div>
    </div>

    <div class="home-hero__socials">
        <div class="home-hero__social">
            <a href="{{url('https://www.linkedin.com/in/ayahosny')}}" class="home-hero__social-icon-link">
                <img
                    src="{{url('https://d33wubrfki0l68.cloudfront.net/d8e6e1e636531e28274a1b8b6d947b817f6145bd/d42d3/assets/svg/linkedin-dark.svg')}}"
                    alt="icon"
                    class="home-hero__social-icon"
                />
            </a>
        </div>
        <div class="home-hero__social">
            <a href="https://github.com/ayahosnii" class="home-hero__social-icon-link">
                <img
                    src="{{url('https://d33wubrfki0l68.cloudfront.net/38469cf88d038b6ba3322c9fcb93a8f7167df4b9/cb0b9/assets/svg/github-dark.svg')}}"
                    alt="icon"
                    class="home-hero__social-icon"
                />
            </a>
        </div>
    </div>
    <div class="home-hero__mouse-scroll-cont">
        <div class="mouse"></div>
    </div>
</section>
<section id="about" class="about sec-pad">
    <div class="main-container">
        <h2 class="heading heading-sec heading-sec__mb-med">
            <span class="heading-sec__main">About Me</span>
            <span class="heading-sec__sub">
            Here  you will find further details about myself, including my areas of expertise
                and current proficiencies mainly focused on programming and technology.
          </span>
        </h2>
        <div class="about__content">
            <div class="about__content-main">
                <h3 class="about__content-title">About Me</h3>
                <div class="about__content-details">
                    <p class="about__content-details-para">
                        Hi there! It's <strong> Aya Hosni </strong> and I'm a Backend Web Developer.
                        I am dedicated to honing my skills and gaining hands-on experience.
                    </p>
                    <p class="about__content-details-para">
                        My educational background includes learning PHP and Laravel, as well as developing a solid understanding of HTML, CSS, JavaScript, and jQuery. I am constantly expanding my knowledge and exploring new technologies to stay ahead of industry trends.
                    </p>
                </div>
                <a href="#contact" class="btn btn--med btn--theme dynamicBgClr">Contact Me</a>
            </div>
            <div class="about__content-skills">
                <h3 class="about__content-title">My Skills</h3>
                <div class="skills">
                    <div class="skills__skill">HTML</div>
                    <div class="skills__skill">CSS</div>
                    <div class="skills__skill">PHP</div>
                    <div class="skills__skill">OOP</div>
                    <div class="skills__skill">JavaScript</div>
                    <div class="skills__skill">jQuery</div>
                    <div class="skills__skill">Git</div>
                    <div class="skills__skill">MySQL</div>
                    <div class="skills__skill">Laravel</div>
                    <div class="skills__skill">MVC frameworks</div>
                    <div class="skills__skill">API development</div>
                    <div class="skills__skill">Test-driven development (TDD)</div>
                    <div class="skills__skill">Server administration</div>
                    <div class="skills__skill">VUEjs</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="projects" class="projects sec-pad">
    <div class="main-container">
        <h2 class="heading heading-sec heading-sec__mb-bg">
            <span class="heading-sec__main">Projects</span>
            <span class="heading-sec__sub">
            In this section, you will come across various projects that I have developed
          </span>
        </h2>

        <div class="projects__content">
            <div class="projects__row">
                <div class="projects__row-img-cont">
                    <img
                        src="{{asset('assets/jpeg/restaurant.jpg')}}"
                        alt="Software Screenshot"
                        class="projects__row-img"
                        loading="lazy"
                    />
                </div>
                <div class="projects__row-content">
                    <h3 class="projects__row-content-title">Restaurant Laravel project</h3>
                    <p class="projects__row-content-desc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic
                        facilis tempora, explicabo quae quod deserunt eius sapiente
                        praesentium.
                    </p>
                    <a
                        href="{{url('https://restaurant.ayahosni.com')}}"
                        class="btn btn--med btn--theme dynamicBgClr"
                        target="_blank"
                    >Case Study</a
                    >
                </div>
            </div>
            <div class="projects__row">
                <div class="projects__row-img-cont">
                    <img
                        src="{{asset('assets/jpeg/gym.jpg')}}"
                        alt="Software Screenshot"
                        class="projects__row-img"
                        loading="lazy"
                    />
                </div>
                <div class="projects__row-content">
                    <h3 class="projects__row-content-title">Fitness Laravel project</h3>
                    <p class="projects__row-content-desc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic
                        facilis tempora, explicabo quae quod deserunt eius sapiente
                        praesentium.
                    </p>
                    <a
                        href="{{url('https://fitness.ayahosni.com')}}"
                        class="btn btn--med btn--theme dynamicBgClr"
                        target="_blank"
                    >Case Study</a
                    >
                </div>
            </div>
            <div class="projects__row">
                <div class="projects__row-img-cont">
                    <img
                        src="{{asset('assets/jpeg/blood-bank.jpg')}}"
                        alt="Software Screenshot"
                        class="projects__row-img"
                        loading="lazy"
                    />
                </div>
                <div class="projects__row-content">
                    <h3 class="projects__row-content-title">Blood bank project</h3>
                    <p class="projects__row-content-desc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic
                        facilis tempora, explicabo quae quod deserunt eius sapiente
                        praesentium.
                    </p>
                    <a
                        href="{{url('https://fitness.ayahosni.com')}}"
                        class="btn btn--med btn--theme dynamicBgClr"
                        target="_blank"
                    >Case Study</a
                    >
                </div>
            </div>
        </div>
    </div>
</section>
<section id="contact" class="contact sec-pad dynamicBg">
    <div class="main-container">
        <h2 class="heading heading-sec heading-sec__mb-med">
            <span class="heading-sec__main heading-sec__main--lt">Contact</span>
            <span class="heading-sec__sub heading-sec__sub--lt">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic facilis
            tempora explicabo quae quod deserunt eius sapiente
          </span>
        </h2>
        <div class="contact__form-container">
            <form action="#" class="contact__form">
                <div class="contact__form-field">
                    <label class="contact__form-label" for="name">Name</label>
                    <input
                        required
                        placeholder="Enter Your Name"
                        type="text"
                        class="contact__form-input"
                        name="name"
                        id="name"
                    />
                </div>
                <div class="contact__form-field">
                    <label class="contact__form-label" for="email">Email</label>
                    <input
                        required
                        placeholder="Enter Your Email"
                        type="text"
                        class="contact__form-input"
                        name="email"
                        id="email"
                    />
                </div>
                <div class="contact__form-field">
                    <label class="contact__form-label" for="message">Message</label>
                    <textarea
                        required
                        cols="30"
                        rows="10"
                        class="contact__form-input"
                        placeholder="Enter Your Message"
                        name="message"
                        id="message"
                    ></textarea>
                </div>
                <button type="submit" class="btn btn--theme contact__btn">
                    Submit
                </button>
            </form>
        </div>
    </div>
</section>
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

        <!-- If you give me some credit or shoutout here by linking to my website, then it will be a big thing for me and will help me a lot :) -->
        <div class="main-footer__lower">
            &copy; Copyright 2021. Made by
            <a rel="noreferrer" target="_blank" href="https://rammaheshwari.com"
            >Ram Maheshwari</a
            >
        </div>
    </div>
</footer>

<script src="{{asset('assets/index.js')}}"></script>
</body>
</html>
