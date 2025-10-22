@extends('layouts.app')

@section('title', $product->name . ' - Desa Jambakan')

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

    .product-detail-section {
        padding: 60px 20px;
        background: #ffffff;
    }

    .product-detail-container {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: start;
    }

    .product-image-wrapper {
        background: linear-gradient(135deg, #f3f4f6 0%, #e5e7eb 100%);
        border-radius: 16px;
        overflow: hidden;
        height: 500px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: var(--shadow-lg);
    }

    .product-image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .product-info {
        display: flex;
        flex-direction: column;
        gap: 24px;
    }

    .breadcrumb {
        display: flex;
        gap: 8px;
        align-items: center;
        color: var(--text-muted);
        font-size: 0.95rem;
        margin-bottom: 16px;
    }

    .breadcrumb a {
        color: var(--primary-green);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .breadcrumb a:hover {
        color: var(--primary-dark);
    }

    .product-title {
        font-size: 2.5rem;
        font-weight: 800;
        color: var(--text-dark);
        line-height: 1.2;
    }

    .product-category {
        display: inline-block;
        background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-dark) 100%);
        color: white;
        padding: 8px 16px;
        border-radius: 20px;
        font-size: 0.9rem;
        font-weight: 600;
        width: fit-content;
    }

    .product-price {
        font-size: 2rem;
        font-weight: 800;
        color: var(--primary-green);
        padding: 20px 0;
        border-top: 2px solid var(--border-light);
        border-bottom: 2px solid var(--border-light);
    }

    .product-description {
        color: var(--text-muted);
        font-size: 1.1rem;
        line-height: 1.8;
    }

    .product-details {
        background: var(--secondary-cream);
        padding: 24px;
        border-radius: 12px;
        color: var(--text-dark);
        line-height: 1.8;
    }

    .product-actions {
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

    .back-link {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: var(--primary-green);
        text-decoration: none;
        font-weight: 600;
        margin-bottom: 24px;
        transition: all 0.3s ease;
    }

    .back-link:hover {
        gap: 12px;
        color: var(--primary-dark);
    }

    @media (max-width: 768px) {
        .product-detail-container {
            grid-template-columns: 1fr;
            gap: 40px;
        }

        .product-title {
            font-size: 1.8rem;
        }

        .product-price {
            font-size: 1.5rem;
        }

        .product-image-wrapper {
            height: 350px;
        }

        .product-actions {
            flex-direction: column;
        }

        .btn-primary, .btn-secondary {
            width: 100%;
            justify-content: center;
        }
    }
</style>

<section class="product-detail-section">
    <div class="product-detail-container">
        <a href="/" class="back-link">← Kembali ke Beranda</a>
    </div>

    <div class="product-detail-container">
        <div class="product-image-wrapper">
            @if($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
            @else
                <div style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; color: var(--text-muted); font-size: 3rem;">
                    📷
                </div>
            @endif
        </div>

        <div class="product-info">
            <div>
                <span class="product-category">{{ $product->category }}</span>
            </div>

            <h1 class="product-title">{{ $product->name }}</h1>

            <div class="product-price">Rp {{ number_format($product->price, 0, ',', '.') }}</div>

            <p class="product-description">{{ $product->description }}</p>

            <div class="product-details">
                <h3 style="margin-bottom: 12px; color: var(--text-dark);">Deskripsi Lengkap</h3>
                <p>{{ $product->details ?? $product->description }}</p>
            </div>

            <div class="product-actions">
                <button class="btn-primary">🛒 Tambah ke Keranjang</button>
                <button class="btn-secondary">❤️ Simpan</button>
            </div>
        </div>
    </div>
</section>

@endsection
