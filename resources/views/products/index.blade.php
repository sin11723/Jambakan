@extends('layouts.app')

@section('title', 'Produk - Desa Jambakan')

@section('content')
<div style="padding: 60px 20px; background: var(--secondary-cream); min-height: calc(100vh - 70px);">
    <div class="container">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
            <div>
                <h1 style="font-size: 2rem; font-weight: 700; margin-bottom: 0.5rem;">Semua Produk</h1>
                <p style="color: var(--text-muted);">Jelajahi produk unggulan Desa Jambakan</p>
            </div>
            <!-- Removed "Tambah Produk" button since login system is removed -->
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 24px;">
            @forelse($products as $product)
                <div class="card" style="overflow: hidden;">
                    <div style="width: 100%; height: 200px; background: linear-gradient(135deg, #f3f4f6 0%, #e5e7eb 100%); display: flex; align-items: center; justify-content: center; overflow: hidden;">
                        @if($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" style="width: 100%; height: 100%; object-fit: cover;">
                        @else
                            <span style="font-size: 3rem;">📦</span>
                        @endif
                    </div>
                    <div class="card-body">
                        <h5 style="font-weight: 600; margin-bottom: 0.5rem;">{{ $product->name }}</h5>
                        <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 0.5rem;">{{ $product->category }}</p>
                        <p style="font-weight: 700; color: var(--primary-green); margin-bottom: 1rem;">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                        <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 1rem;">Stok: {{ $product->stock }}</p>
                        <!-- Removed Edit and Delete buttons since login system is removed -->
                    </div>
                </div>
            @empty
                <div style="grid-column: 1 / -1; text-align: center; padding: 60px 20px;">
                    <p style="color: var(--text-muted); font-size: 1.1rem;">Belum ada produk tersedia.</p>
                </div>
            @endforelse
        </div>

        <div style="margin-top: 2rem; display: flex; justify-content: center;">
            {{ $products->links() }}
        </div>
    </div>
</div>
@endsection
