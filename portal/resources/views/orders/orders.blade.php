@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Generate Hold Order from UC</div>

                <div class="card-body">

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
                    @if($result ?? '')
                            <?php
                                echo "<pre>" ;print_r($result);
                                ?>
                         <div> Customer Details:</div>
                            <ul>
                                <li>Name: {{ $result['order']['shipping']['title'] }} {{ $result['order']['shipping']['first_name'] }} {{ $result['order']['shipping']['last_name'] }}</li>
                                <li>Email: {{ $result['order']['customer_profile']['email'] }}</li>
                            </ul>
                            <ul>
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
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
