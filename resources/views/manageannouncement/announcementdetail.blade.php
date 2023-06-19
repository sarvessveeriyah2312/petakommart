<?php $page="announcementdetail";?>
@extends('layouts.cashiermainlayout')
@section('content')	
<div class="page-wrapper pagehead">
    <div class="content">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Announcements</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('index')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">More Details</li>
                    </ul>
                </div>
            </div>
        </div>
        <form action="{{ route('announcements.detail', $data->id) }}">
            @csrf
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="text-center">
                            @if($data['Image'])
                            <img src="{{asset('uploads/'.$data['Image']) }}" height="200" width="500">
                            @endif
                        </div>
                         </div>
                        <div class="form-group">
                            <h5> {{ $data['Title'] }}</h5>
                        </div>
                        <div class="form-group">
                           <p>{{ $data['Content'] }}</p>
                        </div>
                    </div>       			
        </div>
    </div>
</div>
@endsection