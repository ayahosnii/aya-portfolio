@extends('layouts.admin')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Add skill</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('admin.skills.update', $skill->id) }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $skill->name) }}" class="form-control @error('name') is-invalid @enderror" placeholder="Name" required>
                    @error('name')
                    <span class="invalid-feedback text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
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
