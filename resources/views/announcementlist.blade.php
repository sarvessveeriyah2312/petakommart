<?php $page="blankpage";?>
@extends('layouts.cashiermainlayout')
@section('content')	
<div class="page-wrapper pagehead">
    <div class="content">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Announcement</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Announcement</li>
                    </ul>
                </div>
            </div>
        </div>
        @foreach ($data as $announce )
        <div class="row">
            <div class="col-sm-12">
                <div class="col-12 col-md-6 col-lg-4 d-flex">
                    <div class="card flex-fill bg-white">
                        <div class="card-header">
                            <h5 class="card-title mb-0">{{ $announce['Title'] }}</h5>
                        </div>
                        <div class="card-body">
                            <h6 class="card-text">{{ $announce['Content'] }}</h6> <br>
                            <p class="card-text">Posted on: {{ $announce['created_at'] }}</p>

                        </div>
                    </div>
                </div>
            </div>			
        </div>
        @endforeach
    </div>
</div>
@endsection