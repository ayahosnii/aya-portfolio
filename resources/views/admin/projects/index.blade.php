@extends('layouts.admin')
@section('content')

    <div class="content-wrapper">
        @if (session('flash'))
            <div class="alert alert-{{ session('flash')['type'] }}">
                {{ session('flash')['message'] }}
            </div>
    @endif
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">My project</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <div class="card">
            <div class="card-header">
                <a href="{{route('admin.skills.create')}}" class="btn btn-success">Create +</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>image</th>
                        <th>project link</th>
                        <th>github link</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($projects as $project)
                    <tr>
                        <td>{{$project->title}}</td>
                        <td>{!! $project->description !!}</td>
                        <td>{{$project->image}}</td>
                        <td>{{$project->project_link}}</td>
                        <td>{{$project->github_link}}</td>
                        <td>
                        <a href="{{route('admin.projects.edit', $project->id)}}" class="btn btn-warning">Edit <i class="fa fa-edit"></i> </a>
                        <a href="#" class="btn btn-danger">Delete <i class="fa fa-trash"></i> </a>
                        </td>
                    </tr>
                    @endforeach


                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
        </div>
        </div>
    </div>

@endsection
@push('scripts')
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endpush
