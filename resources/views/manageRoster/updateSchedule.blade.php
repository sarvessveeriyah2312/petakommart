<?php $page="updateSchedule";?>
@extends('layouts.adminmainlayout')
@section('content')
<div class="page-wrapper">
    <div class="content">
        @component('components.pageheader')                
			@slot('title') Roster Management @endslot
			@slot('title_1') Edit/Update Roster @endslot
		@endcomponent
        <!-- /update -->
       

        <form action="{{ route('rosters.update', $tblroster->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Cashier ID</label>
                                <select id="student_id" name="student_id">
                                    <option value="">Select Cashier</option>
                                    @foreach ($users as $id => $name)
                                        <option value="{{ $id }}" {{ $tblroster['student_id'] == $id ? 'selected' : '' }}>
                                            {{ $id }} - {{ $name }}
                                        </option>
                                    @endforeach
                                </select>
                                <input type="hidden" id="name" name="name" value="{{ $tblroster['name'] }}">
                            </div>
                            <div class="form-group">
                                <label>Date</label>
                                <input type="date" id="date" name="date" value="{{ $tblroster['date'] }}">
                            </div>
                            <div class="form-group">
                                <label>Time</label>
                                <select id="time" class="form-control @error('time') is-invalid @enderror" name="time" required>
                                    <option value="">Select Time Slot</option>
                                    <option value="8:00AM - 10:00AM" {{ $tblroster['time'] == '8:00AM - 10:00AM' ? 'selected' : '' }}>8:00AM - 10:00AM</option>
                                    <option value="10:00AM - 12:00PM" {{ $tblroster['time'] == '10:00AM - 12:00PM' ? 'selected' : '' }}>10:00AM - 12:00PM</option>
                                    <option value="12:00PM - 2:00PM" {{ $tblroster['time'] == '12:00PM - 2:00PM' ? 'selected' : '' }}>12:00PM - 2:00PM</option>
                                    <option value="2:00PM - 4:00PM" {{ $tblroster['time'] == '2:00PM - 4:00PM' ? 'selected' : '' }}>2:00PM - 4:00PM</option>
                                    <option value="4:00PM - 6:00PM" {{ $tblroster['time'] == '4:00PM - 6:00PM' ? 'selected' : '' }}>4:00PM - 6:00PM</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button  type="submit" href="javascript:void(0);" class="btn btn-submit me-2">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- /update -->
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Initialize the selected student's name
        var selectedOption = $('#student_id').find('option:selected');
        var cashierName = selectedOption.text().split(' - ')[1];
        $('#name').val(cashierName);

        // Update the hidden input field when the student selection changes
        $('#student_id').change(function() {
            var selectedOption = $(this).find('option:selected');
            var cashierName = selectedOption.text().split(' - ')[1];
            $('#name').val(cashierName);
        });
    });
</script>
@endsection
