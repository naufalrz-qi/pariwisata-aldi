@extends($layout)
@section('content')
<div class="container py-5">
    <div class="card mb-3 px-5">
        <div class="card-body p-5">
            <h1 class="card-title">Order Destination: {{ $destination->destination_name }}</h1>
            <form action="{{ route('order.store', $destination->id) }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="quantity" class="col-form-label">Quantity:</label>
                    <input type="number" id="quantity" name="quantity" min="1" required class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Place Order</button>
            </form>
        </div>
    </div>
</div>
@endsection
