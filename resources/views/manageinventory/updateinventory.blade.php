<?php $page = "updateinventory"; ?>
@extends('layouts.adminmainlayout')

@section('content')	
<div class="page-wrapper">
    <div class="content">
        @component('components.pageheader')                
            @slot('title') Product Edit @endslot
            @slot('title_1') Update your product @endslot
        @endcomponent

        <!-- /add -->
        <form action="{{ route('inventorys.update', $inventory->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Product Name</label>
                                <input type="text" name="name" value="{{ $inventory['name'] }}">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Category</label>
                                <input type="text" name="category" value="{{ $inventory['category'] }}">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Brand</label>
                                <input type="text" name="brand" value="{{ $inventory['brand'] }}">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Quantity</label>
                                <input type="text" name="quantity" value="{{ $inventory['quantity'] }}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" name="description" value="{{ $inventory['description'] }}">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Tax</label>
                                <input type="text" name="tax" value="{{ $inventory['tax'] }}">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Discount Type</label>
                                <input type="text" name="discount" value="{{ $inventory['discount'] }}">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" name="price" value="{{ $inventory['price'] }}">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Status</label>
                                <select class="select" name="status">
                                    <option value="Close">Close</option>
                                    <option value="Open">Open</option>
                                </select>
                            </div>
                        </div>
						<div class="col-lg-3 col-sm-6 col-12">
						
                            <div class="form-group">
                                <label>Image</label>
								@if($inventory['image'])
								<img src="{{asset('uploads/'.$inventory['image']) }}" width="60">
								@endif
                                <input type="file" name="image">
                            </div>
                        </div>
						
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-submit me-2">Update</button>
                            <a href="{{ url('inventorylist') }}" class="btn btn-cancel">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- /add -->
    </div>
</div>
@endsection
