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

                            <input type="submit" value="Get Affiliate Details">

                        </form>
                        @error('api')
                        <span>{{ $message }}</span>
                        @enderror

                        @if($data ?? '')
                            Listing order details: </br>
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
                            <?php echo "<pre>" ;print_r($result); ?>
                         <div> Customer Details:</div>
                            <ul>
                                <li>Email: {{ $data['order']['customer_profile']['email'] }}</li>
                                <li>Name: {{ $data['order']['customer_profile']['email'] }}</li>
                            </ul>
                        <div>
                            Affiliate details:
                            Network: {{ $data['order']['checkout']['custom_field7'] }} </br>
                            Campaign: {{ $data['order']['checkout']['custom_field2'] }} </br>
                            Affiliate Id: {{ $data['order']['checkout']['custom_field3'] }} </br>
                            Click Id: {{ $data['order']['checkout']['custom_field4'] }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
