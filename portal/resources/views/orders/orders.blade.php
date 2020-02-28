@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    @if(!isset($result))
                    Fetch order from UC
                    @else
                    Fetched from UC..
                    @endif
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="{{route('fetch-order')}}" method="POST">

                                @csrf
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                                <div class="form-group">
                                    <label for="uc_order_id">Ultracart Order Id</label>
                                    <input type="text" class="form-control" name="order_id" id="uc_order_id" placeholder="RDK-123xx">

                                    @error('order_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    @if(!isset($result))
                                        <button type="submit" class="btn btn-primary mt-2">Fetch From UC</button>
                                    @else
                                        <button type="submit" class="btn btn-primary mt-2">Fetch Another UC Order</button>
                                    @endif
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <form action="{{route('post-search')}}" method="POST">

                                @csrf

                                <div class="form-group">
                                    <label for="uc_order_id">Ultracart Order Id (can use just parts)</label>
                                    <input type="text" class="form-control" name="uc_order_id" id="uc_order_id" placeholder="12345">

                                    <label for="customer_name">Customer First/Last or Full Name</label>
                                    <input type="text" class="form-control" name="customer_name" id="customer_name" placeholder="">
                                    <label for="customer_email">Customers email</label>
                                    <input type="text" class="form-control" name="customer_email" id="customer_email" placeholder="">

                                    <div class="form-group">
                                        <label for="action"> Status </label>
                                        <select class="form-control" name="action" id="action">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option>Completed</option>
                                            <option>Reship</option>
                                            <option>Refund</option>
                                            <option>Cancel</option>
                                            <option>Partial Refund</option>
                                            <option>Fraud</option>
                                        </select>
                                    </div>

                                        <button type="submit" class="btn btn-primary mt-2">Search Portal</button>

                                </div>
                            </form>
                        </div>
                    </div>

                    @error('uc_order_id')
                        <span class="alert-danger">{{ $message }}</span>
                    @enderror
                    @if($result ?? '')
                            <?php
                                 echo "<!-- <pre>" ;print_r($result); echo "</pre> -->";
                                ?>
                         <div> Customer Details:</div>
                            <ul>
                                <li>Name: {{ $result['order']['shipping']['title'] }} {{ $result['order']['shipping']['first_name'] }} {{ $result['order']['shipping']['last_name'] }}</li>
                                <li>Email: {{ $result['order']['billing']['email'] }}</li>
                                @if($result['order']['marketing']['advertising_source'] != '')
                                    <li> {{ $result['order']['marketing']['advertising_source'] }}</li>
                                @endif
                            </ul>
                            <ul>
                                <li>Order ID:  {{ $result['order']['order_id'] }}</li>
                                <li>Date Created:  {{ $result['order']['creation_dts'] }}</li>
                                <li>Product: {{ $result['order']['items'][0]['accounting_code'] }}</li>
                                <li>Total: {{ $result['order']['summary']['total']['value'] }}</li>
                                <li>Fraud Score:  {{ $result['order']['fraud_score']['score'] }}</li>
                                <li>Customer IP: <a href="https://www.ip2location.com/{{ $result['order']['checkout']['customer_ip_address'] }}" target="_blank">{{ $result['order']['checkout']['customer_ip_address'] }}</a> </li>

                            </ul>

                        <div>
                            @if($result['order']['checkout']['custom_field1']  != '' || $result['order']['checkout']['custom_field7'] != '' )
                            Affiliate details:
                                @if($result['order']['checkout']['custom_field7'] != '')
                                    Network: {{ $result['order']['checkout']['custom_field7'] }} </br>
                                @else
                                        Network: {{ $result['order']['checkout']['custom_field7'] }} </br>
                                        Campaign: {{ $result['order']['checkout']['custom_field2'] }} </br>
                                        @if($result['order']['checkout']['custom_field1'] == 'oi')
                                            Affiliate Id: <a href="https://account.linktrust.com/New/Reports/AffiliatePerformance?AffiliateId={{ $result['order']['checkout']['custom_field3'] }}" target="_blank"> {{ $result['order']['checkout']['custom_field3'] }} </a></br>
                                        @else
                                            Affiliate Id: {{ $result['order']['checkout']['custom_field3'] }} </br>
                                        @endif
                                    Click Id: {{ $result['order']['checkout']['custom_field4'] }}
                                @endif

                                @else
                                    <p class="alert-danger"> Ultracart doesn't have any affiliate details for this order.</p>
                                @endif
                        </div>
                            <div>
                                <form action="{{route('order-save')}}" method="POST">
                                    <div class="form-group">
                                        <label for="action"> Action </label>
                                        <select class="form-control" name="action" id="action">
                                            <option>Reship</option>
                                            <option>Refund</option>
                                            <option>Cancel</option>
                                            <option>Partial Refund</option>
                                            <option>Fraud</option>
                                        </select>
                                    </div>
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    <input type="hidden" name="auto_gen" value="1">
                                    <input type="hidden" name="customer_email" value="{{ $result['order']['billing']['email'] }}">
                                    <input type="hidden" name="customer_name" value="{{ $result['order']['shipping']['title'] }} {{ $result['order']['shipping']['first_name'] }} {{ $result['order']['shipping']['last_name'] }}">
                                    <input type="hidden" name="product" value="{{ $result['order']['items'][0]['accounting_code'] }}">
                                    <input type="hidden" name="order_date" value="{{ $result['order']['creation_dts'] }}">
                                    <input type="hidden" name="uc_order_id" value="{{ $result['order']['order_id'] }}">

                                    <button type="submit" class="btn btn-primary mt-2">Add as a Hold Order to RDK Portal</button>
                                    <a class="btn btn-outline-light" href="{{ route('orders') }}">Back</a>
                                </form>
                            </div>

                    @endif

                </div>
            </div>


            @include('orders.partials._table')
        </div>
    </div>
</div>
@endsection
