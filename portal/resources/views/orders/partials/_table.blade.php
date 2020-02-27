@if(!empty($orders))
{{--@dump($orders)--}}
<table class="table">
    <thead>
    <tr>
        <th scope="col">UC ID</th>
        <th scope="col">Full Name</th>
        <th scope="col">Email</th>
        <th scope="col">Product</th>
        <th scope="col">Order Date</th>
        <th scope="col">Status</th>
        <th scope="col" style="width:  12.33%">Action</th>
    </tr>
    </thead>
    <tbody>
    @forelse($orders as $order)
    <tr>
        <td>{{ $order->uc_order_id }}</td>
        <td>{{ $order->customer_name }}</td>
        <td>{{ $order->customer_email }}</td>
        <td>{{ $order->product }}</td>
        <td>{{  \Illuminate\Support\Carbon::parse($order->order_date)->format('d/m/Y') }}</td>
        <td>{{ $order->action }}</td>
        <td>
            <form action="{{ route('edit-order', ['id' => $order->id]) }}">
                <button class="float-left">Edit</button>
            </form>
            <form action="{{ route('delete-order', ['id' => $order->id]) }}" method="POST"
                  onsubmit="return confirm('Do you really want to submit the form?');"
                    class="">
                @csrf
                @method('delete')
                <button class="btn-outline-danger float-left ml-2">Delete</button>
            </form>
        </td>

    </tr>
    {!! $orders->links() !!}
     @empty
        <tr>
            <td colspan="10">No records found.</td>
        </tr>
    @endforelse
    </tbody>
</table>


    @endif
