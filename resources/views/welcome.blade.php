@extends('layouts.app')
@section('content')
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
                    @foreach($skills as $skill)
                    <div class="skills__skill">{{ $skill->name }}</div>
                    @endforeach
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
            <a href="{{route('all.projects')}}" class="btn btn--med btn--theme dynamicBgClr"
                                                target="_blank">More projects</a>
          </span>
        </h2>


        <div class="projects__content">
            @foreach($projects as $project)
            <div class="projects__row">
                <div class="projects__row-img-cont">
                    <img
                        src="{{asset('assets/mock/'. $project->image)}}"
                        alt="Software Screenshot"
                        class="projects__row-img"
                        loading="lazy"
                    />
                </div>
                <div class="projects__row-content">
                    <h3 class="projects__row-content-title">{{$project->title}}</h3>
                    <p class="projects__row-content-desc">
                        {!! substr($project->description, 0, 150) !!} <a style="color: blue" href="{{route('details', $project->slug)}}">...more</a>
                    </p>

                    <a
                        href="{{route('details', $project->slug)}}"
                        class="btn btn--med btn--theme dynamicBgClr"
                        target="_blank"
                    >Case Study</a
                    >
                </div>
            </div>
            @endforeach


           {{-- <div class="projects__row">
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
            </div>--}}
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
            <form action="{{route('send')}}" method="POST" class="contact__form">
                @csrf
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
@endsection
