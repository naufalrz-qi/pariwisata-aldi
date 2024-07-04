@extends($layout)
@section('content')
<div class="container py-5">
    <div class="card mb-3">
        <div class="card-body">
            <h1 class="card-title text-success">Payment Successful!</h1>
            <p class="card-text">Order ID: {{ $order->id }}</p>
            <p class="card-text">Product: {{ $order->destination->destination_name }}</p>
            <p class="card-text">Total Price: {{ $order->total_price }}</p>
        </div>
    </div>
</div>
@endsection
