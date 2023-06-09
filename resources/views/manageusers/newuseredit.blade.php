<?php $page="newuseredit";?>
@extends('layouts.adminmainlayout')
@section('content')
<div class="page-wrapper">
    <div class="content">
        @component('components.pageheader')                
			@slot('title') User Management @endslot
			@slot('title_1') Edit/Update User @endslot
		@endcomponent
        <!-- /add -->
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <!-- CSRF Protection: Generates a hidden input field with a token to protect against cross-site request forgery -->
        
            <!-- Method Override: Specifies the HTTP method to be used for the form submission -->
        
            <!-- Rest of form fields and elements -->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="name" value="{{ $user['name'] }}">
                        </div>
                        <div class="form-group">
                            <label>Student ID</label>
                            <input type="text" name="student_id" value="{{ $user['student_id'] }}" >
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" value="{{ $user['email'] }}" >
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Role</label>
                            <select id="type" class="select @error('type') is-invalid @enderror" name="type" value="{{ $user['type'] }}" required>
                                <option value="1">Administrator</option>
                                <option value="2">Petakom Commitee</option>
                                <option value="0">Cashier</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <div class="pass-group">
                                <input type="password" name="password" class=" pass-input" value="">
                                <span class="fas toggle-password fa-eye-slash"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Confirm  Password</label>
                            <div class="pass-group">
                                <input type="password"  class=" pass-inputs" value="">
                                <span class="fas toggle-passworda fa-eye-slash"></span>
                            </div>
                        </div>
                    </div>
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