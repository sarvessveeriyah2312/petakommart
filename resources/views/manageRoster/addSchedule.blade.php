<?php $page="addSchedule";?>
@extends('layouts.adminmainlayout')
@section('content')	
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>
<div class="page-wrapper">
    <div class="content">
        @component('components.pageheader')                
			@slot('title') Roster Management @endslot
			@slot('title_1') Add/Update Roster @endslot
		@endcomponent
        @if (Session::has('success'))
       
        @endif
        <!-- /add -->
        <form method="POST" action="{{  route('rosters.store')  }}">
            @csrf
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
    <div class="form-group">
        <!-- Label for the select dropdown -->
        <label>{{ __('Cashier ID') }}</label>
        
        <!-- Select dropdown element -->
        <select id="student_id" class="form-control @error('student_id') is-invalid @enderror" name="student_id" required>
            <!-- Default option -->
            <option value="">Select Student</option>
            
            <!-- Loop through users and generate options -->
            @foreach($users as $user)
                <option value="{{ $user->student_id }}">{{ $user->name }} ({{ $user->student_id }})</option>
            @endforeach
        </select>
        
        <!-- Error handling for student_id field -->
        @error('student_id')
            <!-- Display error message -->
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="col-12">
    <div class="form-group">
        <!-- Label for the date input field -->
        <label>{{ __('Date') }}</label>
        
        <!-- Date input field -->
        <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" required autocomplete="date" autofocus>
        
        <!-- Error handling for date field -->
        @error('date')
            <!-- Display error message -->
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

                    <div class="col-12">
    <div class="form-group">
        <!-- Label for the select dropdown -->
        <label>{{ __('Time Slot') }}</label>
        
        <!-- Select dropdown element for selecting time slot -->
        <select id="time" class="form-control @error('time') is-invalid @enderror" name="time" required>
            <!-- Default option -->
            <option value="">Select Time Slot</option>
            
            <!-- Available time slot options -->
            <option value="8:00AM - 10:00AM">8:00AM - 10:00AM</option>
            <option value="10:00AM - 12:00PM">10:00AM - 12:00PM</option>
            <option value="12:00PM - 2:00PM">12:00PM - 2:00PM</option>
            <option value="2:00PM - 4:00PM">2:00PM - 4:00PM</option>
            <option value="4:00PM - 6:00PM">4:00PM - 6:00PM</option>
        </select>
        
        <!-- Error handling for time field -->
        @error('time')
            <!-- Display error message -->
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
                    <div class="col-lg-12">
                    <input type="hidden" name="name" id="hidden_name"> <!-- Hidden input field for the name -->
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
<script>
    $(document).ready(function() {
        $('#student_id').on('change', function() {
            var selectedStudentId = $(this).val();
            var selectedStudent = $(this).find('option:selected').text();
            var studentName = selectedStudent.split('(')[0].trim();
            $('#name').val(studentName);
            $('#hidden_name').val(studentName); // Set the value of hidden input
        });
    });
</script>
@endsection