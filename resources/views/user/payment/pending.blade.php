@extends($layout)
@section('content')
<div class="container py-5">
    <div class="card mb-3">
        <div class="card-body">
            <h1 class="card-title">Payment Pending</h1>
            <p class="card-text">Order ID: {{ $order->id }}</p>
            <p class="card-text">Product: {{ $order->destination->destination_name }}</p>
            <p class="card-text">Total Price: {{ $order->total_price }}</p>
            <a href="{{ route('payment.show', $order->id) }}" class="btn btn-primary">Pay Now</a>
        </div>
    </div>
</div>
@endsection
