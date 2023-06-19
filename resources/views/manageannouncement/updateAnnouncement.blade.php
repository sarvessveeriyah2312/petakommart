<?php $page="newuseredit";?>
@extends('layouts.adminmainlayout')
@section('content')
<div class="page-wrapper">
    <div class="content">
        @component('components.pageheader')                
			@slot('title') Announcement Management @endslot
			@slot('title_1') Edit/Update Announcement @endslot
		@endcomponent
        <!-- /add -->
       

        <form action="{{ route('announcements.update', $announcement->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="Title" value="{{ $announcement['Title'] }}">
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <textarea type="text" name="Content">{{ $announcement['Content'] }}</textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>{{ __('Announcement Image') }}</label>
                            <div class="image-upload">
                                <input id="Image" name="Image" type="file">
                                <div class="image-uploads">
                                    <img src="{{ URL::asset('/assets/img/icons/upload.svg')}}" alt="img">
                                    <h4>Drag and drop a file to upload</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-submit me-2">Submit</button>
                    </div>
                </div>
            </div>
        </div>
</form>
        <!-- /add -->
    </div>
</div>
@endsection
