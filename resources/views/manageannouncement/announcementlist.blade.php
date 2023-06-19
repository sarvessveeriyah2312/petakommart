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
            <div class="col-12 col-md-6 col-lg-4 d-flex">
                <div class="card flex-fill bg-white">
                    <img alt="Card Image" src="{{ asset('uploads/' . $announce['Image']) }}" class="card-img-top">
                    <div class="card-header">
                        <h5 class="card-title mb-0">{{ $announce['Title'] }}</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            @if(strlen($announce['Content']) > 100)
                                {{ substr($announce['Content'], 0, 100) . '...' }}
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalLong{{$announce['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">{{$announce['Title']}}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                {{$announce['Content']}}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                {{ $announce['Content'] }}
                            @endif
                            <a class="btn btn-primary" href="{{ route('announcements.detail', $announce['id']) }}">More Details</a>
                        </p>
                        <a class="text">Posted on: {{ $announce['created_at'] }}</a>
                    </div>
                </div>
            </div>
        </div>
        
        @endforeach
    </div>
</div>
@endsection