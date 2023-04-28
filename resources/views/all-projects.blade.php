@extends('layouts.app')
@section('content')
    <section class="all-hero">
        <div class="project-cs-hero__content">
            <h1 class="heading-primary">All project</h1>
            <div class="project-cs-hero__info">
            </div>
            <div class="project-cs-hero__cta">
                <input type="text" class="contact__form-input" placeholder="Search">
            </div>
        </div>
    </section>
    <section class="project-details">
        <div class="main-container">
            @foreach($projects as $project)
            <div class="project-all__content">
                <div class="project-details__showcase-img-cont">
                    <img
                        src="{{asset('assets/mock/'. $project->image)}}"
                        alt="Project Image"
                        class="project-details__showcase-img"
                    />
                </div>
                <div class="projects__row-content">
                    <h3 class="projects__row-content-title">{{$project->title}}</h3>
                    <p class="projects__row-content-desc">
                        {{substr($project->description, 0, 150)}} <a style="color: blue" href="{{route('details', $project->slug)}}">...more</a>
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
        </div>
    </section>
@endsection
