<?php $page="addAnnouncement";?>
@extends('layouts.adminmainlayout')
@section('content')	
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>
<div class="page-wrapper">
    <div class="content">
        @component('components.pageheader')                
			@slot('title') Announcement Management @endslot
			@slot('title_1') Add/Update Announcement @endslot
		@endcomponent
        @if (Session::has('success'))
       
        @endif
        <!-- /add -->
        <form method="POST" action="{{  route('announcements.store')  }}">
            @csrf
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>{{ __('Announcement Title') }}</label>
                            <input id="name" type="text" class="form-control @error('Title') is-invalid @enderror" name="Title" value="{{ old('Title') }}" required autocomplete="Title" autofocus>
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>{{ __('Contents') }}</label>
                            <textarea id="name" type="text" class="form-control @error('Content') is-invalid @enderror" name="Content" value="{{ old('Content') }}" required autocomplete="Content" autofocus></textarea>
                            @error('Content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    
                    
                    
            
                   
                    {{-- <div class="col-lg-12">
                        <div class="form-group">
                            <label>	Content Image</label>
                            <div class="image-upload">
                                <input type="file">
                                <div class="image-uploads">
                                    <img src="{{ URL::asset('/assets/img/icons/upload.svg')}}" alt="img">
                                    <h4>Drag and drop a file to upload</h4>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-12">
                        <button type="submit" href="javascript:void(0);" class="btn btn-submit me-2"> {{ __('Submit') }}</button>
                        <a href="{{route('admin.home')}}"  class="btn btn-cancel">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /add -->
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@if (Session::has('success'))
<script>
    toastr.success("{{ Session::get('success') }}", { timeOut: 9500 });
</script>
@endif
@endsection