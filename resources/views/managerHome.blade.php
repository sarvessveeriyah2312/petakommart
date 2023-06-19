<?php $page="index";?>
@extends('layouts.adminmainlayout')
@section('content')
<div class="page-wrapper">
    <div class="card mb-0">
        <div class="card-body">
            <h4 class="card-title">User Information</h4>
            <div class="table-responsive dataview">
                <p>Username: {{ Auth::user()->name }} </p>
                <p>Student ID: {{ Auth::user()->student_id }} </p>
                <p>Email: {{ Auth::user()->email }} </p>
                <p>Role: {{ Auth::user()->type }} </p>
                <p>Joined On: {{ Auth::user()->created_at }} </p>
            </div>
        </div>
    </div>
</div>
@endsection