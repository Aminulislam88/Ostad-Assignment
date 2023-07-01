
@section('content')
    <div class="container">
        <h1>All Posts</h1>

        @foreach ($posts as $post)
            <div class="card">
                <div class="card-header">
                    <h2>{{ $post->title }}</h2>
                </div>
                <div class="card-body">
                    <p>{{ $post->content }}</p>
                    <p><strong>Category:</strong> {{ $post->category->name }}</p>
                </div>
            </div>
            <br>
        @endforeach
    </div>
@endsection
