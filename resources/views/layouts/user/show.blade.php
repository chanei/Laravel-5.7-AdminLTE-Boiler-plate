@extends('layouts.app')
@section('pagename')
    Show User
@endsection
@section('pageheader')
<h1>
    View User
</h1>
<ol class="breadcrumb">
    <li><a href="{{ url('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{ url('users') }}">Users</a></li>
    <li class="active">View User</li>
</ol>
@endsection
@section('content')

@endsection
