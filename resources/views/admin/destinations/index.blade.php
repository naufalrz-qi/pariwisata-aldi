@extends($layout)
@section('content')
<div class="container py-5">
    <h1 class="mb-3">Destinations</h1>

    <a href="{{ route('destinations.create') }}" class="btn btn-primary mb-3">Create New Destination</a>

    @if ($destinations->isEmpty())
        <p class="text-muted">No destinations available.</p>
    @else
        <ul class="list-group">
            @foreach ($destinations as $destination)
                <li class="list-group-item py-0 pe-0">
                    <div class="row">
                        <div class="col-md-8 p-5">
                            <h2 class="h5 mb-2">{{ $destination->destination_name }}</h2>
                            <p class="mb-2">{{ $destination->description }}</p>
                            <p class="mb-2">Price: {{ $destination->price }}</p>
                            <p class="mb-2">Location: {{ $destination->stock }}</p>
                            <div class="form-group mb-2">
                                <a href="{{ route('destinations.edit', $destination->id) }}" class="btn btn-secondary">Edit</a>
                                <form action="{{ route('destinations.destroy', $destination->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this destination?')">Delete</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4 text-right">
                            <img src="{{ asset('images/destinations/'. $destination->image) }}" alt="{{ $destination->destination_name }}" class="img-fluid object-fit-cover h-100 rounded">
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    @endif
</div>
@endsection
