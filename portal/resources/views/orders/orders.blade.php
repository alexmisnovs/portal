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
                   Listing orders:
                    @if($data ?? ''):
                            <?php
                        echo "<pre>";print_r($data) ;
                            ?>

                        @else:
                        <div>Please enter order id above</div>
                        @endif;
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
