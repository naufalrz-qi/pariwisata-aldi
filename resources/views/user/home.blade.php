@extends($layout)

@section('content')

   <div class="container p-5">

    @if ($destinations->isEmpty())
    <p class="text-muted">No destinations available.</p>
@else
    <div class="row">
        @foreach ($destinations as $destination)
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="{{ asset('images/destinations/' . $destination->image) }}" alt="{{ $destination->destination_name }}" class="card-img-top img-fluid">
                 <div class="card-body p-5">
                    <h2 class="card-title">{{ $destination->destination_name }}</h2>
                    <p class="card-text">{{ $destination->description }}</p>
                    <p class="card-text">Price: ${{ $destination->price }}</p>
                    <p class="card-text">Location: {{ $destination->location }}</p>
                    <a href="{{ route('order.create', $destination->id) }}" class="btn btn-primary">Order</a>
                 </div>
                </div>
            </div>
        @endforeach
    </div>
@endif
   </div>
@endsection
