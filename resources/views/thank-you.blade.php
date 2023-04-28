@extends('layouts.app')
@section('content')
<section class="home-hero">
    <div class="home-hero__content">
        <h3 class="heading-primary">Thank you for reaching out to me!</h3>
        <div class="home-hero__info">
            <p class="text-primary">
                I'm excited to hear from you and I appreciate you taking the time to contact me.
                I'll get back to you as soon as possible. In the meantime,
                feel free to take a look at my portfolio to get a better idea of my skills and experience.
                Thank you again for your interest, and I look forward to speaking with you soon!
            </p>
        </div>
        <div class="home-hero__cta">
            <a href="{{url('/')}}"  class="btn btn--bg">
                Back to home page
            </a>
        </div>
    </div>
</section>
@endsection
