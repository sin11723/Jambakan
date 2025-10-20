@extends('layouts.app')

@section('title', 'Berita - Desa Jambakan')

@section('content')
<div class="container py-5">
    <h1 class="section-title">Berita Terkini</h1>
    
    <div class="row">
        @foreach($news as $article)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="product-image">
                    @if($article->image)
                        <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" style="width:100%;height:100%;object-fit:cover;">
                    @else
                        <div style="font-size:2rem;">📰</div>
                    @endif
                </div>
                <div class="card-body">
                    <h6 class="card-title">{{ $article->title }}</h6>
                    <p class="card-text text-muted small">{{ $article->published_at->format('d F Y') }}</p>
                    <p class="card-text">{{ Str::limit($article->content, 100) }}</p>
                    <a href="{{ route('news.show', $article) }}" class="btn btn-sm btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center">
        {{ $news->links() }}
    </div>
</div>
@endsection
