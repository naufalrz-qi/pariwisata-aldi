@extends($layout)
@section('content')
<div class="container py-5">
    <div class="card mb-3">
        <div class="card-body">
            <h1 class="card-title">Payment for Order #{{ $order->id }}</h1>
            <p class="card-text">Product: {{ $order->destination->destination_name }}</p>
            <p class="card-text">Total Price: {{ $order->total_price }}</p>

            <form id="payment-form">
                @csrf
                <button type="button" id="pay-button" class="btn btn-primary">Pay Now</button>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function() {
        // Simulate payment success (for demo purposes, replace with actual payment integration)
        var result = {
            order_id: '{{ $order->id }}',
        };
        handlePaymentResult(result);
    });

    function handlePaymentResult(result) {
        $.ajax({
            url: "{{ route('payment.callback', $order->id) }}",
            method: "POST",
            data: {
                _token: "{{ csrf_token() }}",
            },
            success: function(response) {
                if (response.status === 'success') {
                    alert("Payment successful!");
                    window.location.href = "{{ route('payment.success', $order->id) }}";
                } else {
                    alert("Payment failed!");
                }
            },
            error: function(xhr, status, error) {
                console.log('AJAX Error:', error);
                alert("An error occurred while processing payment: " + error);
            }
        });
    }
</script>
@endsection
