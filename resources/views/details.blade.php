@extends('layouts.app')
@section('content')
    <section class="home-hero" style="
    background: linear-gradient(to right, rgb(169 23 56/ 70%), rgb(235 97 125 / 50%)), url({{asset('assets/mock/'. $project->image)}});

"
    >
        <div class="project-cs-hero__content">
            <h1 class="heading-primary">{{$project->title}}</h1>
            <div class="project-cs-hero__info">
                <p class="text-primary">
                    to view the demo click here
                </p>
            </div>
            <div class="project-cs-hero__cta">
                <a href="{{url($project->project_link)}}" class="btn btn--bg" target="_blank">Live Link</a>
            </div>
        </div>
    </section>
    <section class="project-details">
        <div class="main-container">
            <div class="project-details__content">
                <div class="project-details__showcase-img-cont">
                    <img
                        src="{{asset('assets/mock/'. $project->image)}}"
                        alt="Project Image"
                        class="project-details__showcase-img"
                    />

                    @isset($project->video)
                        <h2>Watch the video for more details</h2>
                        <video class="project-details__showcase-img" controls>
                            <source src="{{asset('cv/'.$project->video)}}" type="video/mp4">
                        </video>
                    @endisset
                </div>

                <div class="project-details__content-main">
                    <div class="project-details__desc">
                        <h3 class="project-details__content-title">{{$project->title}}</h3>
                        <div class="project-details__desc-para">
                            {!! $project->description !!}
                        </div>
                    </div>
                    <div class="project-details__tools-used">
                        <h3 class="project-details__content-title">Tools Used</h3>
                        @if ($project->skills->count() > 0)
                            <div class="skills">
                                @foreach ($project->skills as $skill)
                                    <div class="skills__skill">{{ $skill->name }}</div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                    <div class="project-details__links">
                        <h3 class="project-details__content-title">See Live</h3>
                        <a
                            href="{{url($project->project_link)}}"
                            class="btn btn--med btn--theme project-details__links-btn"
                            target="_blank"
                        >Live Link</a
                        >
                        <a
                            href="{{url($project->github_link)}}"
                            class="btn btn--med btn--theme-inv project-details__links-btn"
                            target="_blank"
                        >Code Link</a
                        >
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
