@extends('layouts.app')

@section('title', 'Dashboard - Desa Jambakan')

@section('content')
<div style="padding: 40px 20px; background: var(--secondary-cream); min-height: calc(100vh - 70px);">
    <div class="container">
        <div style="margin-bottom: 3rem;">
            <!-- Changed from admin dashboard to public statistics page -->
            <h1 style="font-size: 2rem; font-weight: 700; margin-bottom: 0.5rem;">Statistik Desa Jambakan</h1>
            <p style="color: var(--text-muted);">Informasi lengkap tentang produk, berita, dan galeri Desa Jambakan</p>
        </div>

        <!-- Stats Grid -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 24px; margin-bottom: 3rem;">
            <div class="card">
                <div class="card-body">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                        <div>
                            <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 0.5rem;">Total Produk</p>
                            <h3 style="font-size: 2rem; font-weight: 700; color: var(--primary-green);">{{ $totalProducts ?? 0 }}</h3>
                        </div>
                        <span style="font-size: 2rem;">📦</span>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                        <div>
                            <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 0.5rem;">Produk Unggulan</p>
                            <h3 style="font-size: 2rem; font-weight: 700; color: var(--primary-green);">{{ $featuredProducts ?? 0 }}</h3>
                        </div>
                        <span style="font-size: 2rem;">⭐</span>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                        <div>
                            <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 0.5rem;">Total Berita</p>
                            <h3 style="font-size: 2rem; font-weight: 700; color: var(--primary-green);">{{ $totalNews ?? 0 }}</h3>
                        </div>
                        <span style="font-size: 2rem;">📰</span>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                        <div>
                            <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 0.5rem;">Total Galeri</p>
                            <h3 style="font-size: 2rem; font-weight: 700; color: var(--primary-green);">{{ $totalGallery ?? 0 }}</h3>
                        </div>
                        <span style="font-size: 2rem;">🖼️</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Removed admin quick actions, replaced with public navigation links -->
        <div class="card">
            <div class="card-header">
                <h3 style="font-weight: 700;">Jelajahi Konten</h3>
            </div>
            <div class="card-body">
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem;">
                    <a href="{{ route('products.index') }}" class="btn btn-primary" style="justify-content: center;">
                        Lihat Semua Produk
                    </a>
                    <a href="{{ route('news.index') }}" class="btn btn-secondary" style="justify-content: center;">
                        Baca Berita
                    </a>
                    <a href="{{ route('gallery.index') }}" class="btn btn-secondary" style="justify-content: center;">
                        Lihat Galeri
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
