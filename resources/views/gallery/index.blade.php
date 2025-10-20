@extends('layouts.app')

@section('title', 'Galeri - Desa Jambakan')

@section('content')
<div class="container py-5">
    <h1 class="section-title">Galeri Desa</h1>
    
    <div class="row">
        @foreach($galleries as $gallery)
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="product-image" style="height:300px;">
                    @if($gallery->image)
                        <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}" style="width:100%;height:100%;object-fit:cover;">
                    @else
                        <div style="font-size:3rem;">🖼️</div>
                    @endif
                </div>
                <div class="card-body">
                    <h6 class="card-title">{{ $gallery->title }}</h6>
                    <p class="card-text text-muted">{{ $gallery->description }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center">
        {{ $galleries->links() }}
    </div>
</div>
@endsection
