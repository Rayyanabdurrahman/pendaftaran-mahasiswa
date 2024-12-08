@extends('layouts')
@section('title', 'Dashboard')
@section('content')
<div class="row"> <!-- Start col -->
    <div class="col-lg-7 connectedSortable">
        <div class="card mb-4">
            <div class="card-header">
                <h3 class="card-title">Sales Value</h3>
            </div>
            <div class="card-body">
                <div id="revenue-chart"></div>
            </div>
        </div> <!-- /.card --> <!-- DIRECT CHAT -->
        <!-- /.direct-chat -->
    </div> <!-- /.Start col --> <!-- Start col -->
    <!-- /.Start col -->
</div>
@endsection