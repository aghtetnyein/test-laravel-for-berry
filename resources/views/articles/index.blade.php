@extends("layouts.app")

@section("content")
    <div class="container">
        @foreach($articles as $article) <div class="card mb-2">
            <div class="card-body" style="border: 1px solid black; padding: 5px">
                <h5 class="card-title">{{ $article->title }}</h5>

                <div class="card-subtitle mb-2 text-muted small">
                    {{ $article->created_at->diffForHumans() }} 
                </div>

                <p class="card-text">{{ $article->body }}</p>
                
                <a class="card-link"
                href="{{ url("/articles/detail/$article->id") }}">
                            View Detail &raquo;
                </a>
            </div>
            </div>
        @endforeach
    </div>
@endsection