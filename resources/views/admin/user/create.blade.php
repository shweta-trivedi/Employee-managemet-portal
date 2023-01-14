@extends('admin.layout.master')

@section('content')

    @include('admin.includes.sidebar')

    <div class="page-wrapper">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Admin Manager</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="{{route('user')}}">User</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10">
                    <div class="card">
                        <form action="{{route('user.store')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <h4 class="card-title">Add Admin</h4>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Username</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="username" class="form-control" id="username" placeholder="Enter a user name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">File Upload</label>
                                    <div class="col-md-9">
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input">
                                            <label class="custom-file-label">Choose file...</label>
                                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">First name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="fname" class="form-control" id="fname" placeholder="Enter First Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Last name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="lname" class="form-control" id="lname" placeholder="Enter Last Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="email" class="form-control" id="lname" placeholder="Enter Email Id">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Role</label>
                                    <div class="col-sm-9">
                                        <select type="text" name="role" class="form-control" id="lname" placeholder="Role">
                                            <option value="admin">Admin</option>
                                            
                                            <option value="supervisor">Supervisor</option>
                                            
                                            <option value="staff">Staff</option>
                                        </select>
                                    </div>
                                </div>
                                

                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Salary</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="salary" class="form-control" value="">
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="phone" class="col-sm-3 text-right control-label col-form-label">Phone number</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="phone" class="form-control" id="phone" value="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="address" class="col-sm-3 text-right control-label col-form-label">Address</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="address" class="form-control" id="address" value="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="gender" class="col-sm-3 text-right control-label col-form-label">Gender</label>
                                    <div class="col-sm-9">
                                        <select type="text" name="gender" class="form-control" id="gender" value="">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Date of Birth</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="dob" class="form-control" id="dob" value="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="joindate" class="col-sm-3 text-right control-label col-form-label">Join date</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="join_date" class="form-control" id="join_date" value="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="job type" class="col-sm-3 text-right control-label col-form-label">Job type</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="job_type" class="form-control" id="job_type" value="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="city" class="col-sm-3 text-right control-label col-form-label">City</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="city" class="form-control" id="city" value="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="age" class="col-sm-3 text-right control-label col-form-label">Age</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="age" class="form-control" id="lname" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" name="password" class="form-control" id="lname" placeholder="Enter password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Status</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="status" class="form-control" placeholder="Status">
                                    </div>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-dark">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        
    </div>

    @endsection