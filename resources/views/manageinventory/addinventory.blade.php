<?php $page = "addinventory"; ?>
@extends('layouts.adminmainlayout')
@section('content')
<div class="page-wrapper">
    <div class="content">
        @component('components.pageheader')
        @slot('title') Inventory Add @endslot
        @slot('title_1') Create new inventory @endslot
        @endcomponent
        <!-- /add -->
        <form method="POST" action="{{ route('inventorys.store') }}">
            @csrf <!-- Add this CSRF token field for security -->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Product Name</label>
                                <input id="invalid-feedback" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <span id="errinventory" role="alert"></span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Category</label>
                                <select class="select" name="category">
                                    <option>Choose Category</option>
                                    <option>Snacks</option>
                                    <option>Fruits</option>
                                    <option>Drinks</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Brand</label>
                                <textarea id="brand" type="text"
                                    class="form-control @error('brand') is-invalid @enderror" name="brand"
                                    value="{{ old('brand') }}" required autocomplete="brand"
                                    autofocus></textarea>
                                @error('brand')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6 col-12">
    <div class="form-group">
        <label>Quantity</label>
        <input id="quantity" type="text" class="form-control @error('quantity') is-invalid @enderror"
            name="quantity" value="{{ old('quantity') }}" required autocomplete="quantity" autofocus>
        @error('quantity')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" name="description"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Tax</label>
                                <select class="select" name="tax">
                                    <option>Choose Tax(%)</option>
                                    <option>6</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Discount Type(%)</label>
                                <select class="select" name="discount">
                                    <option>Percentage</option>
                                    <option>10</option>
                                    <option>20</option>
                                    <option>30</option>
                                    <option>40</option>
                                    <option>50</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
    <div class="form-group">
        <label>Price</label>
        <input type="text" name="price" class="form-control" value="{{ old('price') }}" required>
    </div>
</div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Status</label>
                                <select class="select" name="status">
                                    <option>Closed</option>
                                    <option>Open</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-submit me-2">Submit</button>
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
