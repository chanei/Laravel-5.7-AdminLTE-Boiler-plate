@extends('layouts.app')
@section('pagename')
My Profile
@endsection
@section('pageheader')
<h1>
    Profile
</h1>
<ol class="breadcrumb">
    <li><a href="{{ url('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Profile</li>
</ol>
@endsection
@section('content')
<div class="row">
    <div class="col-md-3">
        <!-- Profile Image -->
        <div class="box box-primary">
        <div class="box-body box-profile">
            <img class="profile-user-img img-responsive img-circle" src="{{ asset('template/dist/img/user4-128x128.jpg') }}" alt="User profile picture">

            <h3 class="profile-username text-center">Nina Mcintire</h3>

            <p class="text-muted text-center">Software Engineer</p>

            <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
                <b>Followers</b> <a class="pull-right">1,322</a>
            </li>
            <li class="list-group-item">
                <b>Following</b> <a class="pull-right">543</a>
            </li>
            <li class="list-group-item">
                <b>Friends</b> <a class="pull-right">13,287</a>
            </li>
            </ul>

            <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
        </div>
        </div>

        <!-- About Me Box -->
        <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">About Me</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <strong><i class="fa fa-book margin-r-5"></i> Education</strong>
            <p class="text-muted">
            B.S. in Computer Science from the University of Tennessee at Knoxville
            </p>
            <hr>

            <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
            <p class="text-muted">Malibu, California</p>
            <hr>

            <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
        </div>
        </div>
    </div>
    <!-- /.col -->
    <div class="col-md-9">
        <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#settings" data-toggle="tab">Settings</a></li>
        </ul>
        <div class="tab-content">
            <div class="active tab-pane" id="settings">
            <form class="form-horizontal" action="{{ url('profile') }}" method="POST">
                @csrf

                <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputName" placeholder="Name" name="name">
                </div>
                </div>

                <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email">
                </div>
                </div>

                <div class="form-group">
                <label for="inputPhone" class="col-sm-2 control-label">Phone Number</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPhone" placeholder="Phone Number" name="phone_number">
                </div>
                </div>

                <div class="form-group">
                <label for="inputUsername" class="col-sm-2 control-label">Username</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputUsername" placeholder="Username" name="username">
                </div>
                </div>

                <div class="form-group">
                <label for="inputExperience" class="col-sm-2 control-label">Experience</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="inputExperience" placeholder="Experience" name="experience"></textarea>
                </div>
                </div>

                <div class="form-group">
                <label for="profilePic" class="col-sm-2 control-label">Profile Picture</label>
                <div class="col-sm-10">
                    <input type="file" id="profilePic" name="picture">
                </div>
                </div>

                <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>
    </div>
@endsection
