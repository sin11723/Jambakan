<footer style="background: var(--text-dark); color: white; padding: 60px 20px 20px; margin-top: 80px;">
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 40px; margin-bottom: 40px;">
            <!-- About -->
            <div>
                <h4 style="font-size: 1.1rem; margin-bottom: 1rem; color: var(--primary-light);">Tentang Kami</h4>
                <p style="color: #d1d5db; line-height: 1.8;">Desa Jambakan adalah pusat kerajinan tenun tradisional yang telah berkembang selama puluhan tahun dengan kualitas terbaik.</p>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 style="font-size: 1.1rem; margin-bottom: 1rem; color: var(--primary-light);">Menu</h4>
                <ul style="list-style: none;">
                    <li style="margin-bottom: 0.5rem;"><a href="{{ route('dashboard') }}" style="color: #d1d5db;">Beranda</a></li>
                    <li style="margin-bottom: 0.5rem;"><a href="{{ route('products.index') }}" style="color: #d1d5db;">Produk</a></li>
                    <li style="margin-bottom: 0.5rem;"><a href="{{ route('news.index') }}" style="color: #d1d5db;">Berita</a></li>
                    <li style="margin-bottom: 0.5rem;"><a href="{{ route('gallery.index') }}" style="color: #d1d5db;">Galeri</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h4 style="font-size: 1.1rem; margin-bottom: 1rem; color: var(--primary-light);">Kontak</h4>
                <p style="color: #d1d5db; margin-bottom: 0.5rem;">📍 Desa Jambakan, Indonesia</p>
                <p style="color: #d1d5db; margin-bottom: 0.5rem;">📞 +62 XXX XXXX XXXX</p>
                <p style="color: #d1d5db;">✉️ info@desajambakan.id</p>
            </div>
        </div>

        <div style="border-top: 1px solid #374151; padding-top: 20px; text-align: center; color: #9ca3af;">
            <p>&copy; 2025 Desa Jambakan. Semua hak dilindungi.</p>
        </div>
    </div>
</footer>
