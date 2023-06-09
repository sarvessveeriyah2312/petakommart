<?php $page="viewSchedule";?>
@extends('layouts.cashiermainlayout')
@section('content')
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>
<div class="page-wrapper">
    <div class="content">
        @component('components.pageheader')                
			@slot('title')Schedule List @endslot
			@slot('title_1') Manage your Schedule @endslot
		@endcomponent
        @if (Session::has('success'))
        @endif
        <!-- /schedule list -->
        <div class="card">
            <div class="card-body">
                <div class="table-top">
                    <div class="search-set">
                        <div class="search-path">
                            <a class="btn btn-filter" id="filter_search">
                                <img src="{{ URL::asset('/assets/img/icons/filter.svg')}}" alt="img">
                                <span><img src="{{ URL::asset('/assets/img/icons/closes.svg')}}" alt="img"></span>
                            </a>
                        </div>
                        <div class="search-input">
                            <a class="btn btn-searchset"><img src="{{ URL::asset('/assets/img/icons/search-white.svg')}}" alt="img"></a>
                        </div>
                    </div>
                    <div class="wordset">
                   
                    </div>
                </div>
                <!-- /Filter -->
                <div class="card" id="filter_inputs">
                    <div class="card-body pb-0">
                        <div class="row">
                           
                          
                            <div class="col-lg-2 col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter Time">
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="datetimepicker cal-icon" placeholder="Choose Date">
                                </div>
                            </div>
                         
                            <div class="col-lg-1 col-sm-6 col-12 ms-auto">
                                <div class="form-group">
                                    <a class="btn btn-filters ms-auto"><img src="{{ URL::asset('/assets/img/icons/search-whites.svg')}}" alt="img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Filter -->
                <div class="table-responsive">
                    <table class="table  datanew">
                        <thead>
                            <tr>
                                <th>
                                    
                                </th>
                                <th>Cashier ID</th>
                                <th>Cashier Name</th>
                                <th>Date</th>
                                <th>Time</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $tblroster )
                            <tr>
                                <td>
                                  
                                </td>
                                <td>{{ $tblroster['student_id'] }}</td>
                                <td>{{ $tblroster['name'] }}</td>
                                <td>{{ $tblroster['date'] }}</td>
                                <td>{{ $tblroster['time'] }}</td>
                            
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /schedule list -->
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@if (Session::has('success'))
<script>
    toastr.success("{{ Session::get('success') }}");
</script>
@endif
@component('components.modal-popup')                
@endcomponent
@endsection
