@extends('layouts.app')

@section('content')
    @dump($order)
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Viewing Order ID - {{ $order->uc_order_id }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div id="form">

                            <form action="{{ route('order-update', ['id' => $order->id]) }}" method="POST" >

{{--                                @method('PATCH')--}}
                                @csrf
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                                <div class="form-group">
                                    <label for="uc_order_id">Ultracart Order Id</label>
                                    <input type="text" class="form-control" name="uc_order_id" id="uc_order_id" value="{{ $order->uc_order_id }}">

                                    @error('uc_order_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="order_date">Date Order placed</label>
                                    <input type="text" class="form-control" name="order_date" id="order_date" value="{{ $order->order_date }}">

                                    @error('uc_order_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    {{--                                    <button type="submit" class="btn btn-primary mt-2">Fetch From UC</button>--}}
                                </div>
                                <div class="form-group">
                                    <label for="product">Product</label>
                                    @error('product')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <input type="text" class="form-control" name="product" id="product" value="{{ $order->product }}">
                                </div>
                                <div class="form-group">
                                    <label for="customer_name">Customer Full Name</label>
                                    <input type="text" class="form-control" name="customer_name" id="customer_name" value="{{ $order->customer_name }}">
                                </div>
                                <div class="form-group">
                                    <label for="customer_email">Email address</label>
                                    <input type="email" class="form-control"  name="customer_email" id="customer_email" value="{{ $order->customer_email }}">
                                </div>
                                <div class="form-group">
                                    <label for="action"> Status </label>
                                    <select class="form-control" name="action" id="action">

                                        @foreach (['Reship', 'Refund', 'Cancel', 'Partial Refund'] as $value)
                                            <option value="{{ $value }}"
                                                    @if ($value == $order->action)
                                                    selected="selected"
                                                @endif
                                            >{{ $value }}</option>
                                        @endforeach

                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="description">Notes</label>
                                    <textarea class="form-control" name="description" id="description" rows="3">
                                        {{ $order->description }}
                                    </textarea>
                                </div>
                                <input type="submit"  class="btn btn-primary" value="Update Order">

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://unpkg.com/js-datepicker"></script>
    </div>
@endsection
