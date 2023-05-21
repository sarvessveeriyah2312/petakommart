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
       

        <form action="{{ route('announcements.update', $announcement->id) }}" method="POST">
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
                            <textarea type="text" name="Content"  >{{ $announcement['Content'] }}</textarea>
                        </div>
                    </div>
                    {{-- <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group uploadedimage">
                            <label>	Profile Picture</label>
                            <div class="image-upload image-upload-new">
                                <div class="image-uploads">
                                    <img src="{{ URL::asset('/assets/img/customer/customer1.jpg')}}" alt="img">
                                    <div class="productviews">
                                        <div class="productviewscontent">
                                            <div class="productviewsname">
                                                <h2>macbookpro.jpg</h2>
                                                <h3>581kb</h3>
                                            </div>
                                            <a href="javascript:void(0);" class="hideset">x</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-12">
                        <button  type="submit" href="javascript:void(0);" class="btn btn-submit me-2">Submit</button>
                    </div>
                </div>
            </div>
        </div>
</form>
        <!-- /add -->
    </div>
</div>
@endsection