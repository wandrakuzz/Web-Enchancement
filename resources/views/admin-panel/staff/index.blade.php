@extends('layouts.admin')
@section('title')
    <h1>
        Staff Management
        <small>List of registered staffs</small>
    </h1>

    <div class="row">
        <div class="col-md-12">
            <div class="pull-right">
                <a href="{{ url('admin/staff/create') }}" class="btn btn-primary">Add New Staff</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">List of registered staff</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Telephone</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    @foreach($staff as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->staff->telephone }}</td>
                            <td>{{ $user->created_at->format('d/m/Y - g:ia') }}</td>
                            <td>{{ $user->updated_at->format('d/m/Y - g:ia') }}</td>
                            <td style="text-align: center">
                                <a href="{{ url('admin/staff/'.$user->id) }}" class="btn btn-primary btn-sm btn-flat">View</a>
                                <a href="{{ url('admin/staff/'.$user->id.'/edit') }}" class="btn btn-warning btn-sm btn-flat">Edit</a>
                                <a href="" class="btn btn-danger btn-sm btn-flat">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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
