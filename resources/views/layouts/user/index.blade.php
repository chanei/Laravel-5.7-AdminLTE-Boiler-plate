@extends('layouts.app')
@section('pagename')
Users
@endsection
@section('pageheader')
<h1>
    Users
</h1>
<ol class="breadcrumb">
    <li><a href="{{ url('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Users</li>
</ol>
@endsection
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">All System Users</h3>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $t = 1;
                ?>
                @forelse ($users as $user)
                <tr>
                    <td>{{$t}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->phone_number}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->username}}</td>
                    <td></td>
                </tr>
                @empty
                <tr>
                    <td>No data available</td>
                </tr>
                @endforelse
                </tbody>
                <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Actions</th>
                </tr>
                </tfoot>
                </table>
            </div>
            </div>
    </div>
</div>
@endsection
{{-- import datatables javascript --}}
@include('layouts.importedscripts.datatables')
