

@section('content')
    <div class="container">
        <h1>Latest Posts for Each Category</h1>

        @foreach ($categories as $category)
            <div class="card">
                <div class="card-header">
                    <h2>{{ $category->name }}</h2>
                </div>
                <div class="card-body">
                    @if ($category->latestPost)
                        <p><strong>Latest Post Title:</strong> {{ $category->latestPost->title }}</p>
                        <p><strong>Latest Post Content:</strong> {{ $category->latestPost->content }}</p>
                    @else
                        <p>No posts found for this category.</p>
                    @endif
                </div>
            </div>
            <br>
        @endforeach
    </div>
@endsection
