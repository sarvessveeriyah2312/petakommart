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
                            <label>{{ __('Cashier ID') }}</label>
                            <!-- <input id="student_id" type="text" class="form-control @error('student_id') is-invalid @enderror" name="student_id" value="{{ old('student_id') }}" required autocomplete="student_id" autofocus> -->
                            <select id="student_id" class="form-control @error('student_id') is-invalid @enderror" name="student_id" required>
                                <option value="">Select Student</option>
                                @foreach($users as $user)
                                <option value="{{ $user->student_id }}">{{ $user->name }} ({{ $user->student_id }})</option>
                            @endforeach
                            </select>
                            @error('student_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <!-- <div class="col-12">
                        <div class="form-group">
                            <label>{{ __('Cashier Name') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div> -->
                    <div class="col-12">
                        <div class="form-group">
                            <label>{{ __('Date') }}</label>
                            <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" required autocomplete="date" autofocus>
                            @error('date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>{{ __('Time Slot') }}</label>
                            <select id="time" class="form-control @error('time') is-invalid @enderror" name="time" required>
                                    <option value="">Select Time Slot</option>
                                    <option value="8:00AM - 10:00AM">8:00AM - 10:00AM</option>
                                    <option value="10:00AM - 12:00PM">10:00AM - 12:00PM</option>
                                    <option value="12:00PM - 2:00PM">12:00PM - 2:00PM</option>
                                    <option value="2:00PM - 4:00PM">2:00PM - 4:00PM</option>
                                    <option value="4:00PM - 6:00PM">4:00PM - 6:00PM</option>
                                   
                                </select>
                                @error('time')
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