@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Orders</div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <form action="{{route('get-order')}}" method="POST">
                            @csrf
                            <input type="text" name="order_id" id="order_id">

                            <input type="submit" value="Get Order Details">

                        </form>
                        @error('api')
                        <span>{{ $message }}</span>
                        @enderror

                        @if($data ?? '')
                        Listing order details:
                            <?php
//                                echo "<pre>";print_r($data)
                            ?>
                            Affiliate details:
                            Network: {{ $data['order']['checkout']['custom_field7'] }} </br>
                            Campaign: {{ $data['order']['checkout']['custom_field2'] }} </br>
                            Affiliate Id: {{ $data['order']['checkout']['custom_field3'] }} </br>
                            Click Id: {{ $data['order']['checkout']['custom_field4'] }}

                        @else
                        <div>Please enter order id above</div>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
