@extends('layouts.admin')
@section('title')
    <h1>
        Staff Management
        <small>Register new staff</small>
    </h1>

    <div class="row">
        <div class="col-md-12">
            <div class="pull-right">
                <a href="{{ url('admin/staff/create') }}" class="btn btn-primary">View List</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Add new staff account</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form role="form" action="{{ url('admin/staff') }}" method="post">
                            {!! csrf_field() !!}
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="nameInput">Name</label>
                                    <input id="nameInput" type="text" name="name" class="form-control" placeholder="Enter name" value="{{ old('name') }}" required minlength="5" maxlength="255">
                                </div>
                                <div class="form-group">
                                    <label for="telephoneInput">Telephone Number</label>
                                    <input id="telephoneInput" type="text" class="form-control" name="telephone" placeholder="Enter telephone" value="{{ old('telephone') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="emailInput">Email address</label>
                                    <input id="emailInput" type="email" class="form-control" name="email" placeholder="Enter email" value="{{ old('email') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="passwordInput">Password</label>
                                    <input id="passwordInput" type="password" class="form-control" name="password" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <label for="confirmPassword">Confirm Password</label>
                                    <input id="confirmPassword" type="password" class="form-control" name="password_confirmation" placeholder="Password" required>
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </div>
    @endsection

    @push('styles')
    @endpush

    @push('scripts')

    @endpush