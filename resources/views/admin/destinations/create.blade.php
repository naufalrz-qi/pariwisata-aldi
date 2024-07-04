@extends($layout)
@section('content')
<div class="container py-5">
    <div class="card">
        <div class="card-body p-5">
            <h1 class="mb-3">Create New Destination</h1>

            <form action="{{ route('destinations.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="destination_name" class="form-label">Destination Name</label>
                    <input type="text" id="destination_name" name="destination_name" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea id="description" name="description" rows="4" class="form-control"></textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" id="price" name="price" step="0.01" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label for="location" class="form-label">Location</label>
                    <input type="text" id="stock" name="location" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" id="image" name="image" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-primary">Create Destination</button>
                </div>
            </form>

            <a href="{{ route('destinations.index') }}" class="btn btn-secondary">Back to Destination Index</a>
        </div>
    </div>
</div>
@endsection
