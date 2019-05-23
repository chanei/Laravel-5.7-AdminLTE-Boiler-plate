@extends('layouts.app')
@section('pagename')
    Audit Trails
@endsection
@section('pageheader')
<h1>
    AuditTrail
</h1>
<ol class="breadcrumb">
    <li><a href="{{ url('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Audit Trails</li>
</ol>
@endsection
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">All AuditTrails</h3>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Action</th>
                    <th>Details</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $t = 1;
                ?>
                @forelse ($audittrails as $trail)
                <tr>
                    <td>{{$t}}</td>
                    <td>{{$trail->user->name}}</td>
                    <td>{{$trail->action}}</td>
                    <td>{{$trail->details}}</td>
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
                    <th>User</th>
                    <th>Action</th>
                    <th>Details</th>
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
