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
                        <th>IP Address</th>
                        <th>Country</th>
                        <th>Region</th>
                        <th>Postal code</th>
                        <th>Created At</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($visitors as $visitor)
                    <tr>
                        <td>{{$visitor->ip_address}}</td>
                        <td>{{$visitor->country}}</td>
                        <td>{{$visitor->region}}</td>
                        <td>{{$visitor->city}}</td>
                        <td>{{$visitor->postal_code}}</td>
                        <td>{{ $visitor->created_at->diffForHumans() }}</td>
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
                {{$visitors->link()}}
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
