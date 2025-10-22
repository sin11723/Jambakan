@extends('layouts.app')

@section('title', 'Galeri - Desa Jambakan')

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

    .gallery-header {
        background: linear-gradient(135deg, #f0fdf4 0%, #ecfdf5 100%);
        padding: 60px 20px;
        margin-bottom: 40px;
    }

    .gallery-header-content {
        max-width: 1200px;
        margin: 0 auto;
    }

    .gallery-header h1 {
        font-size: 2.5rem;
        font-weight: 800;
        color: var(--text-dark);
        margin-bottom: 0.5rem;
        background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-dark) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .gallery-header p {
        color: var(--text-muted);
        font-size: 1.1rem;
        margin: 0;
    }

    .gallery-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px 60px;
    }

    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 28px;
        margin-bottom: 40px;
    }

    .gallery-card {
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

    .gallery-card::before {
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

    .gallery-card:hover {
        transform: translateY(-12px);
        box-shadow: var(--shadow-lg);
        border-color: var(--primary-light);
    }

    .gallery-card:hover::before {
        opacity: 1;
    }

    .gallery-image-wrapper {
        position: relative;
        width: 100%;
        height: 280px;
        background: linear-gradient(135deg, #f3f4f6 0%, #e5e7eb 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .gallery-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .gallery-card:hover .gallery-image {
        transform: scale(1.1);
    }

    .gallery-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(16, 185, 129, 0.8);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .gallery-card:hover .gallery-overlay {
        opacity: 1;
    }

    .gallery-overlay-icon {
        color: white;
        font-size: 2.5rem;
    }

    .gallery-body {
        padding: 24px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .gallery-title {
        font-size: 1.15rem;
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 12px;
        line-height: 1.4;
    }

    .gallery-description {
        color: var(--text-muted);
        font-size: 0.95rem;
        line-height: 1.6;
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
        .gallery-header h1 {
            font-size: 1.8rem;
        }

        .gallery-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="gallery-header">
    <div class="gallery-header-content">
        <h1>Galeri Desa</h1>
        <p>Dokumentasi kegiatan dan keindahan Desa Jambakan</p>
    </div>
</div>

<div class="gallery-container">
    @if($galleries->count() > 0)
        <div class="gallery-grid">
            @forelse($galleries as $gallery)
                <div class="gallery-card">
                    <div class="gallery-image-wrapper">
                        @if($gallery->image)
                            <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}" class="gallery-image" loading="lazy">
                        @else
                            <div style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; color: var(--text-muted); font-size: 2rem;">
                                🖼️
                            </div>
                        @endif
                        <div class="gallery-overlay">
                            <div class="gallery-overlay-icon">🔍</div>
                        </div>
                    </div>
                    <div class="gallery-body">
                        <h5 class="gallery-title">{{ $gallery->title }}</h5>
                        <p class="gallery-description">{{ Str::limit($gallery->description, 100) }}</p>
                    </div>
                </div>
            @empty
                <div class="empty-state">
                    <p style="font-size: 1.2rem; margin-bottom: 1rem;">📭</p>
                    <p>Belum ada galeri tersedia.</p>
                </div>
            @endforelse
        </div>

        <div class="pagination-wrapper">
            {{ $galleries->links() }}
        </div>
    @else
        <div class="empty-state">
            <p>Belum ada galeri tersedia.</p>
        </div>
    @endif
</div>
@endsection
