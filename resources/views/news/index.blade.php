@extends('layouts.app')

@section('title', 'Berita - Desa Jambakan')

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
        --shadow-lg: 0 12px 24px rgba(16, 185, 129, 0.2);
    }

    .news-header {
        background: linear-gradient(135deg, #f0fdf4 0%, #ecfdf5 100%);
        padding: 60px 20px;
        margin-bottom: 40px;
    }

    .news-header-content {
        max-width: 1200px;
        margin: 0 auto;
    }

    .news-header h1 {
        font-size: 2.5rem;
        font-weight: 800;
        color: var(--text-dark);
        margin-bottom: 0.5rem;
        background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-dark) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .news-header p {
        color: var(--text-muted);
        font-size: 1.1rem;
        margin: 0;
    }

    .news-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px 60px;
    }

    .news-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: 28px;
        margin-bottom: 40px;
    }

    .news-card {
        background: white;
        border-radius: 16px;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: var(--shadow-sm);
        border: 1px solid var(--border-light);
        display: flex;
        flex-direction: column;
        height: 100%;
        position: relative;
    }

    .news-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--primary-green) 0%, var(--primary-dark) 100%);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .news-card:hover {
        transform: translateY(-12px);
        box-shadow: var(--shadow-lg);
        border-color: var(--primary-light);
    }

    .news-card:hover::before {
        opacity: 1;
    }

    .news-image {
        width: 100%;
        height: 220px;
        background: linear-gradient(135deg, #f3f4f6 0%, #e5e7eb 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        position: relative;
    }

    .news-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .news-card:hover .news-image img {
        transform: scale(1.1);
    }

    .news-body {
        padding: 24px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .news-title {
        font-size: 1.15rem;
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 12px;
        line-height: 1.4;
    }

    .news-date {
        display: flex;
        align-items: center;
        gap: 8px;
        color: var(--text-muted);
        font-size: 0.9rem;
        margin-bottom: 12px;
    }

    .news-excerpt {
        color: var(--text-muted);
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 16px;
        flex-grow: 1;
    }

    .news-link {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: var(--primary-green);
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        margin-top: auto;
    }

    .news-link:hover {
        color: var(--primary-dark);
        gap: 12px;
    }

    .empty-state {
        text-align: center;
        padding: 80px 20px;
        color: var(--text-muted);
        grid-column: 1 / -1;
    }

    .pagination-wrapper {
        display: flex;
        justify-content: center;
        margin-top: 40px;
    }

    @media (max-width: 768px) {
        .news-header h1 {
            font-size: 1.8rem;
        }

        .news-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="news-header">
    <div class="news-header-content">
        <h1>Berita & Update Terkini</h1>
        <p>Informasi dan update terbaru seputar Desa Jambakan</p>
    </div>
</div>

<div class="news-container">
    @if($news->count() > 0)
        <div class="news-grid">
            @forelse($news as $article)
                <div class="news-card">
                    <div class="news-image">
                        @if($article->image)
                            <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" loading="lazy">
                        @else
                            <div style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; color: var(--text-muted); font-size: 2rem;">
                                📰
                            </div>
                        @endif
                    </div>
                    <div class="news-body">
                        <h5 class="news-title">{{ $article->title }}</h5>
                        <div class="news-date">
                            📅 {{ $article->published_at->format('d F Y') }}
                        </div>
                        <p class="news-excerpt">{{ Str::limit($article->content, 120) }}</p>
                        <a href="{{ route('news.show', $article) }}" class="news-link">
                            Baca Selengkapnya →
                        </a>
                    </div>
                </div>
            @empty
                <div class="empty-state">
                    <p style="font-size: 1.2rem; margin-bottom: 1rem;">📭</p>
                    <p>Belum ada berita tersedia.</p>
                </div>
            @endforelse
        </div>

        <div class="pagination-wrapper">
            {{ $news->links() }}
        </div>
    @else
        <div class="empty-state">
            <p>Belum ada berita tersedia.</p>
        </div>
    @endif
</div>
@endsection
