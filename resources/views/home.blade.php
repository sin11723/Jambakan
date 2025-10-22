@extends('layouts.app')

@section('title', 'Beranda - Desa Jambakan')

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

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: var(--text-dark);
        background: #ffffff;
        line-height: 1.6;
    }

    /* ===== HERO SECTION ===== */
    .hero-section {
        background: linear-gradient(135deg, #f0fdf4 0%, #ecfdf5 100%);
        padding: 120px 20px;
        color: var(--text-dark);
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -10%;
        width: 500px;
        height: 500px;
        background: radial-gradient(circle, rgba(16, 185, 129, 0.1) 0%, transparent 70%);
        border-radius: 50%;
        z-index: 0;
    }

    .hero-content {
        position: relative;
        z-index: 1;
        max-width: 800px;
        margin: 0 auto;
    }

    .hero-section h1 {
        font-size: clamp(2.5rem, 6vw, 4rem);
        font-weight: 800;
        margin-bottom: 1.5rem;
        line-height: 1.1;
        letter-spacing: -1px;
        animation: slideDown 0.8s ease-out;
        background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-dark) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .hero-section p {
        font-size: 1.1rem;
        color: var(--text-muted);
        margin-bottom: 2.5rem;
        line-height: 1.8;
        animation: slideUp 0.8s ease-out 0.2s both;
    }

    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-40px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(40px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .hero-buttons {
        display: flex;
        gap: 1rem;
        justify-content: center;
        flex-wrap: wrap;
        animation: slideUp 0.8s ease-out 0.4s both;
    }

    .btn-hero {
        padding: 14px 36px;
        font-size: 1rem;
        font-weight: 600;
        border-radius: 50px;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        border: 2px solid transparent;
        cursor: pointer;
    }

    .btn-hero-primary {
        background: var(--primary-green);
        color: white;
        box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);
    }

    .btn-hero-primary:hover {
        background: var(--primary-dark);
        transform: translateY(-4px);
        box-shadow: 0 8px 25px rgba(16, 185, 129, 0.4);
    }

    .btn-hero-secondary {
        background: white;
        color: var(--primary-green);
        border: 2px solid var(--primary-green);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    }

    .btn-hero-secondary:hover {
        background: var(--primary-light);
        transform: translateY(-4px);
        box-shadow: 0 8px 25px rgba(16, 185, 129, 0.2);
    }

    /* ===== SECTION WRAPPER ===== */
    .section-wrapper {
        padding: 100px 20px;
    }

    .section-wrapper.bg-light {
        background: var(--secondary-cream);
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .section-title {
        font-size: clamp(2rem, 5vw, 2.8rem);
        font-weight: 800;
        text-align: center;
        margin-bottom: 1rem;
        color: var(--text-dark);
        letter-spacing: -0.5px;
    }

    .section-subtitle {
        text-align: center;
        color: var(--text-muted);
        font-size: 1.1rem;
        margin-bottom: 4rem;
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
        line-height: 1.8;
    }

    /* ===== FEATURED PRODUCTS SECTION ===== */
    /* Updated featured grid layout to match mockup: 2 large cards on top, 4 small cards below */
    .featured-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 28px;
        margin-bottom: 28px;
    }

    .featured-grid-small {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 28px;
    }

    /* ===== PRODUCT GRID ===== */
    /* Simplified product grid to maintain consistent 4-column layout */
    .product-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 28px;
    }

    /* ===== NEWS GRID ===== */
    .news-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 28px;
    }

    /* ===== GALLERY GRID ===== */
    /* Updated gallery grid to 2x2 layout */
    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 28px;
    }

    /* ===== PRODUCT CARDS ===== */
    .product-card {
        background: white;
        border-radius: 16px;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: var(--shadow-sm);
        border: 1px solid var(--border-light);
        height: 100%;
        display: flex;
        flex-direction: column;
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
        height: 280px;
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

    .featured-card .product-image {
        height: 350px;
    }

    .news-card .product-image {
        height: 220px;
    }

    .gallery-card .product-image {
        height: 320px;
    }

    .card-body {
        padding: 28px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .card-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 12px;
        margin-bottom: 12px;
    }

    .card-title {
        font-size: 1.15rem;
        font-weight: 700;
        color: var(--text-dark);
        line-height: 1.4;
    }

    .card-text {
        color: var(--text-muted);
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 12px;
        flex-grow: 1;
    }

    .price-tag {
        font-size: 1.4rem;
        font-weight: 800;
        color: var(--primary-green);
        margin-top: auto;
        padding-top: 12px;
        border-top: 1px solid var(--border-light);
    }

    .badge-category {
        background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-dark) 100%);
        color: white;
        padding: 6px 14px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
        white-space: nowrap;
        flex-shrink: 0;
        box-shadow: 0 2px 8px rgba(16, 185, 129, 0.2);
    }

    .date-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: var(--text-muted);
        font-size: 0.9rem;
        margin-top: 12px;
        padding-top: 12px;
        border-top: 1px solid var(--border-light);
    }

    /* ===== EMPTY STATE ===== */
    .empty-state {
        text-align: center;
        padding: 60px 20px;
        color: var(--text-muted);
        grid-column: 1 / -1;
    }

    .empty-state p {
        font-size: 1.1rem;
    }

    /* ===== CTA SECTION ===== */
    .cta-section {
        background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-dark) 100%);
        padding: 80px 20px;
        border-radius: 20px;
        margin: 60px 20px;
        text-align: center;
        color: white;
        box-shadow: var(--shadow-lg);
    }

    .cta-section h3 {
        font-size: 2.2rem;
        font-weight: 800;
        color: white;
        margin-bottom: 1rem;
    }

    .cta-section p {
        color: rgba(255, 255, 255, 0.9);
        font-size: 1.1rem;
        margin-bottom: 2rem;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
        line-height: 1.8;
    }

    .btn-primary-green {
        background: white;
        color: var(--primary-green);
        padding: 14px 40px;
        font-weight: 700;
        border-radius: 50px;
        border: none;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        text-decoration: none;
        display: inline-block;
        cursor: pointer;
        font-size: 1rem;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .btn-primary-green:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        background: var(--primary-light);
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 1024px) {
        .product-grid {
            grid-template-columns: repeat(3, 1fr);
        }

        .featured-grid-small {
            grid-template-columns: repeat(2, 1fr);
        }

        .news-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .gallery-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .hero-section {
            padding: 80px 20px;
        }

        .hero-section h1 {
            font-size: 2rem;
        }

        .section-wrapper {
            padding: 60px 20px;
        }

        .featured-grid {
            grid-template-columns: 1fr;
        }

        .featured-grid-small {
            grid-template-columns: repeat(2, 1fr);
        }

        .product-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .news-grid {
            grid-template-columns: 1fr;
        }

        .gallery-grid {
            grid-template-columns: 1fr;
        }

        .card-body {
            padding: 20px;
        }

        .cta-section {
            margin: 40px 20px;
            padding: 40px 20px;
        }

        .cta-section h3 {
            font-size: 1.5rem;
        }
    }

    @media (max-width: 480px) {
        .hero-buttons {
            flex-direction: column;
        }

        .btn-hero {
            width: 100%;
            justify-content: center;
        }

        .section-title {
            font-size: 1.5rem;
        }

        .section-subtitle {
            font-size: 0.95rem;
            margin-bottom: 2rem;
        }

        .featured-grid-small {
            grid-template-columns: 1fr;
        }

        .product-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-content">
        <h1>Selamat Datang di Desa Jambakan</h1>
        <p>Temukan keindahan kerajinan tenun tradisional yang dibuat dengan penuh cinta oleh pengrajin lokal berpengalaman. Setiap helai kain menceritakan kisah budaya dan warisan turun-temurun.</p>
        <div class="hero-buttons">
            <a href="#produk" class="btn-hero btn-hero-primary">Lihat Produk</a>
            <a href="#galeri" class="btn-hero btn-hero-secondary">Jelajahi Galeri</a>
        </div>
    </div>
</section>

<!-- Featured Products Section -->
<section class="section-wrapper" id="produk">
    <div class="container">
        <h2 class="section-title">Karya Tenun Unggulan</h2>
        <p class="section-subtitle">Koleksi terbaik dari pengrajin Desa Jambakan yang telah memenangkan berbagai penghargaan internasional</p>
        
        <!-- Featured grid with 2 large cards -->
        <div class="featured-grid">
            @forelse($featuredProducts as $product)
                <a href="{{ route('product.show', $product->id) }}" style="text-decoration: none; color: inherit;">
                    <div class="product-card featured-card">
                        <div class="product-image">
                            @if($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" loading="lazy">
                            @else
                                <div style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; color: var(--text-muted);">
                                    📷 Gambar tidak tersedia
                                </div>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="card-header">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                @if($product->category)
                                    <span class="badge-category">{{ $product->category }}</span>
                                @endif
                            </div>
                            <p class="card-text">{{ Str::limit($product->description, 120) }}</p>
                            @if($product->price)
                                <div class="price-tag">Rp {{ number_format($product->price, 0, ',', '.') }}</div>
                            @endif
                        </div>
                    </div>
                </a>
            @empty
                <div class="empty-state">
                    <p>Belum ada produk unggulan</p>
                </div>
            @endforelse
        </div>

        <!-- Featured grid with 4 small cards -->
        <div class="featured-grid-small">
            @forelse($allProducts->take(4) as $product)
                <a href="{{ route('product.show', $product->id) }}" style="text-decoration: none; color: inherit;">
                    <div class="product-card">
                        <div class="product-image">
                            @if($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" loading="lazy">
                            @else
                                <div style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; color: var(--text-muted);">
                                    📷
                                </div>
                            @endif
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">{{ Str::limit($product->name, 35) }}</h6>
                            @if($product->category)
                                <p class="card-text">{{ $product->category }}</p>
                            @endif
                            @if($product->price)
                                <div class="price-tag">Rp {{ number_format($product->price, 0, ',', '.') }}</div>
                            @endif
                        </div>
                    </div>
                </a>
            @empty
                <div class="empty-state">
                    <p>Belum ada produk</p>
                </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Product Grid Section -->
<section class="section-wrapper bg-light">
    <div class="container">
        <h2 class="section-title">Semua Produk Tenun</h2>
        <p class="section-subtitle">Jelajahi koleksi lengkap tenun dan batik dari Desa Jambakan yang dikerjakan dengan teknik tradisional turun-temurun</p>
        
        <div class="product-grid">
            @forelse($allProducts as $product)
                <a href="{{ route('product.show', $product->id) }}" style="text-decoration: none; color: inherit; height: 100%; display: flex;">
                    <div class="product-card" style="width: 100%;">
                        <div class="product-image">
                            @if($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" loading="lazy">
                            @else
                                <div style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; color: var(--text-muted);">
                                    📷
                                </div>
                            @endif
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">{{ Str::limit($product->name, 35) }}</h6>
                            @if($product->category)
                                <p class="card-text">{{ $product->category }}</p>
                            @endif
                            @if($product->price)
                                <div class="price-tag">Rp {{ number_format($product->price, 0, ',', '.') }}</div>
                            @endif
                        </div>
                    </div>
                </a>
            @empty
                <div class="empty-state">
                    <p>Belum ada produk tersedia</p>
                </div>
            @endforelse
        </div>
    </div>
</section>

<!-- News Section -->
<section class="section-wrapper" id="berita">
    <div class="container">
        <h2 class="section-title">Berita & Update Terkini</h2>
        <p class="section-subtitle">Informasi dan update terbaru seputar kegiatan, event, dan perkembangan Desa Jambakan</p>
        
        <div class="news-grid">
            @forelse($news as $article)
                <a href="{{ route('news.show', $article->id) }}" style="text-decoration: none; color: inherit;">
                    <div class="product-card news-card">
                        <div class="product-image">
                            @if($article->image)
                                <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" loading="lazy">
                            @else
                                <div style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; color: var(--text-muted);">
                                    📰
                                </div>
                            @endif
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">{{ Str::limit($article->title, 60) }}</h6>
                            <div class="date-badge">
                                📅 {{ $article->published_at->format('d F Y') }}
                            </div>
                        </div>
                    </div>
                </a>
            @empty
                <div class="empty-state">
                    <p>Belum ada berita</p>
                </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="section-wrapper bg-light" id="galeri">
    <div class="container">
        <h2 class="section-title">Galeri Desa</h2>
        <p class="section-subtitle">Dokumentasi kegiatan, keindahan alam, dan momen berharga dari Desa Jambakan</p>
        
        <!-- Gallery grid with 2x2 layout -->
        <div class="gallery-grid">
            @forelse($galleries as $gallery)
                <a href="{{ route('gallery.show', $gallery->id) }}" style="text-decoration: none; color: inherit;">
                    <div class="product-card gallery-card">
                        <div class="product-image">
                            @if($gallery->image)
                                <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}" loading="lazy">
                            @else
                                <div style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; color: var(--text-muted);">
                                    🖼️
                                </div>
                            @endif
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">{{ $gallery->title }}</h6>
                            <p class="card-text">{{ Str::limit($gallery->description, 100) }}</p>
                        </div>
                    </div>
                </a>
            @empty
                <div class="empty-state">
                    <p>Belum ada galeri</p>
                </div>
            @endforelse
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section" id="kontak">
    <div class="container">
        <h3>Tertarik dengan Produk Kami?</h3>
        <p>Hubungi kami untuk pemesanan, kolaborasi, atau informasi lebih lanjut tentang kerajinan tenun tradisional Desa Jambakan</p>
        <a href="/kontak" class="btn-primary-green">Hubungi Kami Sekarang</a>
    </div>
</section>

<script>
    // Smooth scroll untuk anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });
</script>

@endsection
