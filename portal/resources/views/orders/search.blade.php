@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        @if(!isset($orders))
                               Please use fields bellow to find orders
                        @else
                            Listing records
                        @endif
                    </div>

                    <div class="card-body">

                        <form action="{{route('post-search')}}" method="POST">

                            @csrf

                            <div class="form-group">
                                <label for="uc_order_id">Ultracart Order Id (can use just parts)</label>
                                <input type="text" class="form-control form-control-sm" name="uc_order_id" id="uc_order_id" placeholder="12345">

                                <label for="customer_name">Customer First/Last or Full Name</label>
                                <input type="text" class="form-control form-control-sm" name="customer_name" id="customer_name" placeholder="">
                                <label for="customer_email">Customers email</label>
                                <input type="text" class="form-control form-control-sm" name="customer_email" id="customer_email" placeholder="">

                                <div class="form-group">
                                    <label for="action"> Status </label>
                                    <select class="form-control form-control-sm" name="action" id="action">
                                        <option disabled selected value> -- select an option -- </option>
                                        <option>Completed</option>
                                        <option>Reship</option>
                                        <option>Refund</option>
                                        <option>On Hold</option>
                                        <option>BTP</option>
                                        <option>Cancel</option>
                                        <option>Partial Refund</option>
                                        <option>Fraud</option>
                                    </select>
                                </div>
                                @error('order_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                @if(!isset($result))
                                    <button type="submit" class="btn btn-primary mt-2">Search</button>
                                @else
                                    <button type="submit" class="btn btn-primary mt-2"> Search Again </button>
                                @endif
                            </div>
                        </form>
                        @if(isset($orders))
{{--                         @dump($orders)--}}
                            @include('orders.partials._table')
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
