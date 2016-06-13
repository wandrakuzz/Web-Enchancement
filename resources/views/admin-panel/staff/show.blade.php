@extends('layouts.admin')
@section('title')
    <h1>
        Staff Management
        <small>List of registered staffs</small>
    </h1>

    <div class="row">
        <div class="col-md-12">
            <div class="pull-right">
                <a href="{{ url('admin/staff') }}" class="btn btn-primary">View Staff</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">View User Profile</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <h2>{{ $user->name }}</h2>
            <div class="user-info">
                <p>Email: <b>{{ $user->email }}</b></p>
                <p>Telephone: <b>{{ $user->telephone }}</b></p>
                <p>Created At: <b>{{ $user->created_at->format('d/m/Y h:ia') }}</b></p>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
    @endsection

    @push('styles')
            <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('admin-panel/plugins/datatables/dataTables.bootstrap.css') }}">
    @endpush

    @push('scripts')
            <!-- DataTables -->
    <script src="{{ asset('admin-panel/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin-panel/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
    <script>
        $(function () {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
        });
    </script>
    @endpush