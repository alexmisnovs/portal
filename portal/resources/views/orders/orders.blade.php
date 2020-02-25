@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Generate Hold Order from UC</div>

                <div class="card-body">
                    @if(!isset($result))
                    <form action="{{route('fetch-order')}}" method="POST">

                        @csrf
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                        <div class="form-group">
                            <label for="uc_order_id">Ultracart Order Id</label>
                            <input type="text" class="form-control" name="order_id" id="uc_order_id" placeholder="RDK-123xx">

                            @error('order_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <button type="submit" class="btn btn-primary mt-2">Fetch From UC</button>
                        </div>
                    </form>
                    @endif
                    @if($result ?? '')
                            <?php
//                                echo "<pre>" ;print_r($result);
                                ?>
                         <div> Customer Details:</div>
                            <ul>
                                <li>Name: {{ $result['order']['shipping']['title'] }} {{ $result['order']['shipping']['first_name'] }} {{ $result['order']['shipping']['last_name'] }}</li>
                                <li>Email: {{ $result['order']['customer_profile']['email'] }}</li>
                            </ul>
                            <ul>
                                <li>Order ID:  {{ $result['order']['order_id'] }}</li>
                                <li>Date Created:  {{ $result['order']['creation_dts'] }}</li>
                                <li>Product: {{ $result['order']['items'][0]['accounting_code'] }}</li>
                                <li>Total: {{ $result['order']['summary']['total']['value'] }}</li>
                                <li>Fraud Score:  {{ $result['order']['fraud_score']['score'] }}</li>
                            </ul>

                        <div>
                            Affiliate details:
                            Network: {{ $result['order']['checkout']['custom_field7'] }} </br>
                            Campaign: {{ $result['order']['checkout']['custom_field2'] }} </br>
                            Affiliate Id: {{ $result['order']['checkout']['custom_field3'] }} </br>
                            Click Id: {{ $result['order']['checkout']['custom_field4'] }}
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
                                    <input type="hidden" name="customer_email" value="{{ $result['order']['customer_profile']['email'] }}">
                                    <input type="hidden" name="customer_name" value="{{ $result['order']['shipping']['title'] }} {{ $result['order']['shipping']['first_name'] }} {{ $result['order']['shipping']['last_name'] }}">
                                    <input type="hidden" name="product" value="{{ $result['order']['items'][0]['accounting_code'] }}">
                                    <input type="hidden" name="order_date" value="{{ $result['order']['creation_dts'] }}">
                                    <input type="hidden" name="uc_order_id" value="{{ $result['order']['order_id'] }}">

                                    <button type="submit" class="btn btn-primary mt-2">Add as a Hold Order to RDK Portal</button>
                                </form>
                            </div>

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
