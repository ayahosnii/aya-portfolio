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
        <form action="{{route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="exampleInputEmail1" placeholder="Title">

                         @error('title')
                        <span class="invalid-feedback text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                         </span>
                         @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Slug</label>
                    <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="exampleInputPassword1" placeholder="Slug">
                    @error('slug')
                    <span class="invalid-feedback text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                         </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Github link</label>
                    <input type="text" name="github_link" class="form-control @error('github_link') is-invalid @enderror" id="exampleInputPassword1" placeholder="Github link">
                    @error('github_link')
                    <span class="invalid-feedback text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                         </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Project link</label>
                    <input type="text" name="project_link" class="form-control @error('project_link') is-invalid @enderror" id="exampleInputPassword1" placeholder="Project link">
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
                        <option value="{{$skill->id}}">{{$skill->name}}</option>
                        @endforeach
                    </select>

                    @error('skills')
                    <span class="invalid-feedback text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                         </span>
                    @enderror

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <textarea type="text" id="description"  name="description" class="form-control @error('description') is-invalid @enderror">
                    </textarea>
                    @error('description')
                    <span class="invalid-feedback text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                         </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input name="image" type="file" class="custom-file-input @error('image') is-invalid @enderror" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>

                            @error('image')
                            <span class="invalid-feedback text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                         </span>
                            @enderror
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
        </div>
        </div>
    </div>

@endsection
