<nav style="background: white; border-bottom: 1px solid var(--border-light); box-shadow: var(--shadow-sm); position: sticky; top: 0; z-index: 100;">
    <div class="container" style="display: flex; justify-content: space-between; align-items: center; height: 70px;">
        <!-- Logo -->
        <a href="{{ route('dashboard') }}" style="font-size: 1.5rem; font-weight: 700; color: var(--primary-green); display: flex; align-items: center; gap: 8px;">
            🏘️ Desa Jambakan
        </a>

        <!-- Desktop Navigation -->
        <div style="display: none; gap: 2rem; align-items: center;" class="desktop-nav">
             <a href="{{ route('home') }}" style="color: {{ request()->routeIs('home') ? 'var(--primary-green)' : 'var(--text-muted)' }}; font-weight: 600; transition: color 0.3s;">
                Home
            </a>
            <a href="{{ route('products.index') }}" style="color: {{ request()->routeIs('products.*') ? 'var(--primary-green)' : 'var(--text-muted)' }}; font-weight: 600; transition: color 0.3s;">
                Produk
            </a>
            <a href="{{ route('news.index') }}" style="color: {{ request()->routeIs('news.*') ? 'var(--primary-green)' : 'var(--text-muted)' }}; font-weight: 600; transition: color 0.3s;">
                Berita
            </a>
            <a href="{{ route('gallery.index') }}" style="color: {{ request()->routeIs('gallery.*') ? 'var(--primary-green)' : 'var(--text-muted)' }}; font-weight: 600; transition: color 0.3s;">
                Galeri
            </a>
        </div>

        <!-- Removed user menu and auth check, navigation is now public -->
        <div style="display: flex; align-items: center; gap: 1rem;">
            <!-- Navigation links removed - all pages are now public -->
        </div>
    </div>

    <script>
        // Show desktop nav on larger screens
        const desktopNav = document.querySelector('.desktop-nav');
        if (window.innerWidth > 768) {
            desktopNav.style.display = 'flex';
        }
        window.addEventListener('resize', () => {
            if (window.innerWidth > 768) {
                desktopNav.style.display = 'flex';
            } else {
                desktopNav.style.display = 'none';
            }
        });
    </script>
</nav>
