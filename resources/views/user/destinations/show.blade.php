@extends($layout)
@section('content')

<h1>{{ $destination->name }}</h1>
<p>{{ $destination->description }}</p>
<p>Price: Rp{{ number_format($destination->price, 0, ',', '.') }}</p>

@endsection
