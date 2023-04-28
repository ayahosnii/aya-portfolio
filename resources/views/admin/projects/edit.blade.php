@extends('layouts.admin')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Add project</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="card-body">

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" value="{{ old('title', $project->title) }}" class="form-control @error('title') is-invalid @enderror" placeholder="Title" required>
                    @error('title')
                    <span class="invalid-feedback text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" name="slug" id="slug" value="{{ old('slug', $project->slug) }}" class="form-control @error('slug') is-invalid @enderror" placeholder="Slug" required>
                    @error('slug')
                    <span class="invalid-feedback text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="github_link">Github Link</label>
                    <input type="url" name="github_link" id="github_link" value="{{ old('github_link', $project->github_link) }}" class="form-control @error('github_link') is-invalid @enderror" placeholder="Github Link" required>
                    @error('github_link')
                    <span class="invalid-feedback text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="project_link">Project Link</label>
                    <input type="text" name="project_link" id="project_link" value="{{ old('project_link', $project->project_link) }}" class="form-control @error('project_link') is-invalid @enderror" placeholder="Project Link">
                    @error('project_link')
                    <span class="invalid-feedback text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Skills</label>
                    <select name="skills[]" id="mySelect" class="form-control @error('skills') is-invalid @enderror" multiple>
                        @foreach($skills as $skill)
                            <option value="{{$skill->id}}" {{ $project->skills->contains('id', $skill->id) ? 'selected' : '' }}>
                                {{$skill->name}}
                            </option>
                        @endforeach
                    </select>

                    @error('skills')
                    <span class="invalid-feedback text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                         </span>
                    @enderror

                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" rows="5" class="form-control @error('description') is-invalid @enderror" placeholder="Description" required>{{ old('description', $project->description) }}</textarea>
                    @error('description')
                    <span class="invalid-feedback text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control-file @error('image') is-invalid @enderror" accept="image/*">
                    @error('image')
                    <span class="invalid-feedback text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
                    @if ($project->image)
                        <img src="{{ asset('assets/mock/' . $project->image) }}" alt="Project Image" class="mt-2" style="max-height: 200px">
                    @endif
                </div>

            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
        </div>
        </div>
    </div>

@endsection
