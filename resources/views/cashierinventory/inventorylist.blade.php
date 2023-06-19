@extends('layouts.cashiermainlayout')

@section('content')

<div class="page-wrapper">
    <div class="content">
        @component('components.pageheader')
        @slot('title') Inventory List @endslot
        @slot('title_1') Manage Inventory @endslot
        @endcomponent

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped custom-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Product Name</th>
								<th>Image</th>
                                <th>Category</th>
                                <th>Brand</th>
                                <th>Quantity</th>
                                <th>Description</th>
                                <th>Tax</th>
                                <th>Discount</th>
                                <th>Price</th>
                                <th>Total Price</th>
                                <th>Status</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach (json_decode($data, true) as $inventory)
                            
                            @php
                            $discount = is_numeric($inventory ['discount']) ? $inventory ['discount'] : 0;
                            $tax = is_numeric($inventory ['tax']) ? $inventory ['tax']: 0;
                            $totalPrice = $inventory['price'] - ($inventory['price']* ($discount / 100));
                            $totalPrice += $totalPrice * ($tax / 100);
                        @endphp
                   
                            <tr>
                                <td>{{ $inventory['id'] }}</td>
                                <td>{{ $inventory['name'] }}</td>
								<td>
								@if($inventory['image'])
								<img src="{{asset('uploads/'.$inventory['image']) }}" width="60">
								@endif
								</td>
                                <td>{{ $inventory['category'] }}</td>
                                <td>{{ $inventory['brand'] }}</td>
                                <td>{{ $inventory['quantity'] }}</td>
                                <td>{{ $inventory['description'] }}</td>
                                <td>{{ $inventory['tax'] }}</td>
                                <td>{{ $inventory['discount'] }}</td>
                                <td>{{ $inventory['price'] }}</td>
                                <td> {{ $totalPrice }}</td>
                                <td>{{ $inventory['status'] }}</td>
                                
                            </tr>
                      
                        
                                </td>
                            
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
