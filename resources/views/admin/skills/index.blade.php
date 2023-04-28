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
            <h3 class="card-title">My Skills</h3>
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
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($skills as $skill)
                    <tr>
                        <td>{{$skill->name}}</td>
                        <td>
                        <a href="{{route('admin.skills.edit', $skill->id)}}" class="btn btn-warning">Edit <i class="fa fa-edit"></i> </a>
                        <form action="{{ route('admin.skills.destroy', $skill->id) }}" method="POST" style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">
                                    Delete <i class="fa fa-trash"></i>
                                </button>
                        </form>

                        </td>
                    </tr>
                    @endforeach


                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Action</th>
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
