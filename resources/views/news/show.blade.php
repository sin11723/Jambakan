@extends('layouts.app')

@section('title', $article->title . ' - Desa Jambakan')

@section('content')
<style>
    :root {
        --primary-green: #10b981;
        --primary-dark: #059669;
        --primary-light: #d1fae5;
        --secondary-cream: #faf8f3;
        --text-dark: #1f2937;
        --text-muted: #6b7280;
        --border-light: #e5e7eb;
        --shadow-sm: 0 2px 8px rgba(0, 0, 0, 0.08);
        --shadow-md: 0 8px 16px rgba(16, 185, 129, 0.15);
    }

    .article-header {
        background: linear-gradient(135deg, #f0fdf4 0%, #ecfdf5 100%);
        padding: 40px 20px;
        margin-bottom: 40px;
    }

    .article-header-content {
        max-width: 900px;
        margin: 0 auto;
    }

    .article-header h1 {
        font-size: 2.2rem;
        font-weight: 800;
        color: var(--text-dark);
        margin-bottom: 1rem;
        line-height: 1.2;
    }

    .article-meta {
        display: flex;
        gap: 2rem;
        color: var(--text-muted);
        font-size: 0.95rem;
        flex-wrap: wrap;
    }

    .article-container {
        max-width: 900px;
        margin: 0 auto;
        padding: 0 20px 60px;
    }

    .article-image {
        width: 100%;
        max-height: 500px;
        object-fit: cover;
        border-radius: 16px;
        margin-bottom: 40px;
        box-shadow: var(--shadow-md);
    }

    .article-content {
        background: white;
        padding: 40px;
        border-radius: 16px;
        box-shadow: var(--shadow-sm);
        border: 1px solid var(--border-light);
        line-height: 1.8;
        color: var(--text-dark);
        margin-bottom: 40px;
    }

    .article-content p {
        margin-bottom: 1.5rem;
        font-size: 1.05rem;
    }

    .article-content h2 {
        font-size: 1.5rem;
        font-weight: 700;
        margin: 2rem 0 1rem;
        color: var(--text-dark);
    }

    .article-content h3 {
        font-size: 1.2rem;
        font-weight: 700;
        margin: 1.5rem 0 0.8rem;
        color: var(--text-dark);
    }

    .article-content ul, .article-content ol {
        margin: 1.5rem 0;
        padding-left: 2rem;
    }

    .article-content li {
        margin-bottom: 0.8rem;
    }

    .article-footer {
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
    }

    .btn-back {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 12px 24px;
        background: var(--primary-green);
        color: white;
        text-decoration: none;
        border-radius: 8px;
        font-weight: 600;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
    }

    .btn-back:hover {
        background: var(--primary-dark);
        transform: translateX(-4px);
    }

    .article-info {
        background: var(--secondary-cream);
        padding: 24px;
        border-radius: 12px;
        border-left: 4px solid var(--primary-green);
    }

    .article-info h5 {
        font-size: 1rem;
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 1rem;
    }

    .article-info p {
        margin-bottom: 0.5rem;
        color: var(--text-muted);
        font-size: 0.95rem;
    }

    @media (max-width: 768px) {
        .article-header h1 {
            font-size: 1.5rem;
        }

        .article-content {
            padding: 20px;
        }

        .article-meta {
            gap: 1rem;
        }
    }
</style>

<div class="article-header">
    <div class="article-header-content">
        <h1>{{ $article->title }}</h1>
        <div class="article-meta">
            <span>📅 {{ $article->published_at->format('d F Y') }}</span>
            <span>⏱️ {{ $article->published_at->format('H:i') }}</span>
        </div>
    </div>
</div>

<div class="article-container">
    @if($article->image)
        <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="article-image">
    @endif
    
    <div class="article-content">
        {!! nl2br(e($article->content)) !!}
    </div>

    <div class="article-info">
        <h5>Informasi Berita</h5>
        <p><strong>Dipublikasikan:</strong> {{ $article->published_at->format('d F Y H:i') }}</p>
        @if($article->category)
            <p><strong>Kategori:</strong> {{ $article->category }}</p>
        @endif
    </div>

    <div class="article-footer" style="margin-top: 2rem;">
        <a href="/" class="btn-back">← Kembali ke Beranda</a>
    </div>
</div>
@endsection
