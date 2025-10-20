@extends('layouts.app')

@section('title', $news->title . ' - Desa Jambakan')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-8">
            @if($news->image)
                <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="img-fluid rounded mb-4" style="max-height: 400px; object-fit: cover; width: 100%;">
            @endif
            
            <h1 class="mb-2">{{ $news->title }}</h1>
            <p class="text-muted mb-4">
                <small>Dipublikasikan pada {{ $news->published_at->format('d F Y H:i') }}</small>
            </p>
            
            <div class="content">
                {!! nl2br(e($news->content)) !!}
            </div>

            <div class="mt-4">
                <a href="{{ route('news.index') }}" class="btn btn-secondary">Kembali ke Berita</a>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Informasi Berita</h5>
                    <!-- Removed user reference since login system is removed -->
                    <p><strong>Tanggal:</strong> {{ $news->published_at->format('d F Y') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
