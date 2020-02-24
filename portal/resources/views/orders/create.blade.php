@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add new hold order</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div>
                            <form>
                                <div class="form-group">
                                    <label for="uc_order_id">Ultracart Order Id</label>
                                    <input type="text" class="form-control" name="uc_order_id" id="uc_order_id" placeholder="RDK-123xx">
                                </div>
                                <div class="form-group">
                                    <label for="product">Product</label>
                                    <input type="text" class="form-control" name="product" id="product" placeholder="Boobie Cream">
                                </div>
                                <div class="form-group">
                                    <label for="customer_name">Customer Full Name</label>
                                    <input type="text" class="form-control" name="customer_name" id="customer_name" placeholder="Donald Trump">
                                </div>
                                <div class="form-group">
                                    <label for="customer_email">Email address</label>
                                    <input type="email" class="form-control"  name="customer_email" id="customer_email" placeholder="name@example.com">
                                </div>
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

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                                </div>
                                <input type="submit"  class="btn btn-primary" value="Add Order">

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection