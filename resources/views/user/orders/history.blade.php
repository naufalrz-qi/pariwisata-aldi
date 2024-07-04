@extends($layout)
@section('content')
<div class="container p-5">
    <h1>Order History</h1>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Destinations</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Total Price</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->destination->destination_name }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>Rp{{ number_format($order->total_price, 0, ',', '.') }}</td>
                        <td>
                            @if ($order->status == 'approved')
                                <a href="{{ route('payment.success', $order->id) }}" class="btn btn-link">{{ $order->status }}</a>
                            @else
                                <a href="{{ route('payment.pending', $order->id) }}" class="btn btn-link">{{ $order->status }}</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection
