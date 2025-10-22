@extends('layouts.app')

@section('title', $gallery->title . ' - Desa Jambakan')

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

    .gallery-detail-section {
        padding: 60px 20px;
        background: #ffffff;
    }

    .gallery-detail-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .back-link {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: var(--primary-green);
        text-decoration: none;
        font-weight: 600;
        margin-bottom: 40px;
        transition: all 0.3s ease;
    }

    .back-link:hover {
        gap: 12px;
        color: var(--primary-dark);
    }

    .gallery-detail-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: start;
    }

    .gallery-image-wrapper {
        background: linear-gradient(135deg, #f3f4f6 0%, #e5e7eb 100%);
        border-radius: 16px;
        overflow: hidden;
        height: 500px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: var(--shadow-lg);
    }

    .gallery-image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .gallery-info {
        display: flex;
        flex-direction: column;
        gap: 24px;
    }

    .gallery-title {
        font-size: 2.5rem;
        font-weight: 800;
        color: var(--text-dark);
        line-height: 1.2;
    }

    .gallery-description {
        color: var(--text-muted);
        font-size: 1.1rem;
        line-height: 1.8;
        padding: 20px 0;
        border-top: 2px solid var(--border-light);
        border-bottom: 2px solid var(--border-light);
    }

    .gallery-content {
        background: var(--secondary-cream);
        padding: 24px;
        border-radius: 12px;
        color: var(--text-dark);
        line-height: 1.8;
    }

    .gallery-content h3 {
        font-size: 1.2rem;
        font-weight: 700;
        margin-bottom: 12px;
        color: var(--text-dark);
    }

    .gallery-actions {
        display: flex;
        gap: 16px;
        flex-wrap: wrap;
    }

    .btn-primary {
        background: var(--primary-green);
        color: white;
        padding: 14px 32px;
        border-radius: 50px;
        border: none;
        font-weight: 600;
        font-size: 1rem;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);
    }

    .btn-primary:hover {
        background: var(--primary-dark);
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(16, 185, 129, 0.4);
    }

    .btn-secondary {
        background: white;
        color: var(--primary-green);
        padding: 14px 32px;
        border-radius: 50px;
        border: 2px solid var(--primary-green);
        font-weight: 600;
        font-size: 1rem;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .btn-secondary:hover {
        background: var(--primary-light);
        transform: translateY(-3px);
    }

    @media (max-width: 768px) {
        .gallery-detail-content {
            grid-template-columns: 1fr;
            gap: 40px;
        }

        .gallery-title {
            font-size: 1.8rem;
        }

        .gallery-image-wrapper {
            height: 350px;
        }

        .gallery-actions {
            flex-direction: column;
        }

        .btn-primary, .btn-secondary {
            width: 100%;
            justify-content: center;
        }
    }
</style>

<section class="gallery-detail-section">
    <div class="gallery-detail-container">
        <a href="/" class="back-link">← Kembali ke Beranda</a>

        <div class="gallery-detail-content">
            <div class="gallery-image-wrapper">
                @if($gallery->image)
                    <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}">
                @else
                    <div style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; color: var(--text-muted); font-size: 3rem;">
                        🖼️
                    </div>
                @endif
            </div>

            <div class="gallery-info">
                <h1 class="gallery-title">{{ $gallery->title }}</h1>

                <p class="gallery-description">{{ $gallery->description }}</p>

                <div class="gallery-content">
                    <h3>Informasi Lengkap</h3>
                    <p>{{ $gallery->content ?? $gallery->description }}</p>
                </div>

                <div class="gallery-actions">
                    <button class="btn-primary">📸 Bagikan</button>
                    <button class="btn-secondary">❤️ Simpan</button>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
