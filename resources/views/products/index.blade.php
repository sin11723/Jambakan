@extends('layouts.app')

@section('title', 'Produk - Desa Jambakan')

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

    .products-header {
        background: linear-gradient(135deg, #f0fdf4 0%, #ecfdf5 100%);
        padding: 60px 20px;
        margin-bottom: 40px;
    }

    .products-header-content {
        max-width: 1200px;
        margin: 0 auto;
    }

    .products-header h1 {
        font-size: 2.5rem;
        font-weight: 800;
        color: var(--text-dark);
        margin-bottom: 0.5rem;
        background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-dark) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .products-header p {
        color: var(--text-muted);
        font-size: 1.1rem;
        margin: 0;
    }

    .products-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px 60px;
    }

    .filter-section {
        display: flex;
        gap: 1rem;
        margin-bottom: 2rem;
        flex-wrap: wrap;
        align-items: center;
    }

    .search-box {
        flex: 1;
        min-width: 250px;
        position: relative;
    }

    .search-box input {
        width: 100%;
        padding: 12px 16px;
        border: 2px solid var(--border-light);
        border-radius: 8px;
        font-size: 1rem;
        transition: all 0.3s ease;
    }

    .search-box input:focus {
        outline: none;
        border-color: var(--primary-green);
        box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.1);
    }

    .products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 28px;
        margin-bottom: 40px;
    }

    .product-card {
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

    .product-card::before {
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

    .product-card:hover {
        transform: translateY(-12px);
        box-shadow: var(--shadow-lg);
        border-color: var(--primary-light);
    }

    .product-card:hover::before {
        opacity: 1;
    }

    .product-image {
        width: 100%;
        height: 240px;
        background: linear-gradient(135deg, #f3f4f6 0%, #e5e7eb 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        position: relative;
    }

    .product-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .product-card:hover .product-image img {
        transform: scale(1.1);
    }

    .product-body {
        padding: 24px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .product-name {
        font-size: 1.1rem;
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 8px;
        line-height: 1.4;
    }

    .product-category {
        display: inline-block;
        background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-dark) 100%);
        color: white;
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
        margin-bottom: 12px;
        box-shadow: 0 2px 8px rgba(16, 185, 129, 0.2);
    }

    .product-price {
        font-size: 1.4rem;
        font-weight: 800;
        color: var(--primary-green);
        margin-top: auto;
        padding-top: 12px;
        border-top: 1px solid var(--border-light);
    }

    .product-stock {
        color: var(--text-muted);
        font-size: 0.9rem;
        margin-top: 8px;
    }

    .empty-state {
        text-align: center;
        padding: 80px 20px;
        color: var(--text-muted);
    }

    .empty-state p {
        font-size: 1.1rem;
    }

    .pagination-wrapper {
        display: flex;
        justify-content: center;
        margin-top: 40px;
    }

    @media (max-width: 768px) {
        .products-header h1 {
            font-size: 1.8rem;
        }

        .products-grid {
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 16px;
        }

        .filter-section {
            flex-direction: column;
        }

        .search-box {
            min-width: 100%;
        }
    }
</style>

<div class="products-header">
    <div class="products-header-content">
        <h1>Semua Produk Tenun</h1>
        <p>Jelajahi koleksi lengkap kerajinan tenun tradisional dari Desa Jambakan</p>
    </div>
</div>

<div class="products-container">
    <div class="products-grid">
        @forelse($products as $product)
            <div class="product-card">
                <div class="product-image">
                    @if($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" loading="lazy">
                    @else
                        <div style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; color: var(--text-muted); font-size: 2rem;">
                            📦
                        </div>
                    @endif
                </div>
                <div class="product-body">
                    <h5 class="product-name">{{ $product->name }}</h5>
                    @if($product->category)
                        <span class="product-category">{{ ucfirst($product->category) }}</span>
                    @endif
                    <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 12px;">{{ Str::limit($product->description, 80) }}</p>
                    <div class="product-price">Rp {{ number_format($product->price, 0, ',', '.') }}</div>
                    <a href="{{ route('product.show', $product->id) }}" style="display: inline-flex; align-items: center; gap: 8px; color: var(--primary-green); text-decoration: none; font-weight: 600; margin-top: 12px; transition: all 0.3s ease;" onmouseover="this.style.gap='12px'" onmouseout="this.style.gap='8px'">
                        Lihat Detail →
                    </a>
                </div>
            </div>
        @empty
            <div class="empty-state" style="grid-column: 1 / -1;">
                <p style="font-size: 1.2rem; margin-bottom: 1rem;">📭</p>
                <p>Belum ada produk tersedia.</p>
            </div>
        @endforelse
    </div>

    <div class="pagination-wrapper">
        {{ $products->links() }}
    </div>
</div>
@endsection
