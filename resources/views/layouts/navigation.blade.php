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

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-button" style="display: none; padding: 8px; cursor: pointer;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg>
        </button>

        <!-- Mobile Navigation Menu -->
        <div id="mobile-menu" style="display: none; position: absolute; top: 70px; left: 0; right: 0; background: white; padding: 1rem; box-shadow: var(--shadow-md);">
            <div style="display: flex; flex-direction: column; gap: 1rem;">
                <a href="{{ route('home') }}" style="color: {{ request()->routeIs('home') ? 'var(--primary-green)' : 'var(--text-muted)' }}; font-weight: 600; padding: 0.5rem 0;">
                    Home
                </a>
                <a href="{{ route('products.index') }}" style="color: {{ request()->routeIs('products.*') ? 'var(--primary-green)' : 'var(--text-muted)' }}; font-weight: 600; padding: 0.5rem 0;">
                    Produk
                </a>
                <a href="{{ route('news.index') }}" style="color: {{ request()->routeIs('news.*') ? 'var(--primary-green)' : 'var(--text-muted)' }}; font-weight: 600; padding: 0.5rem 0;">
                    Berita
                </a>
                <a href="{{ route('gallery.index') }}" style="color: {{ request()->routeIs('gallery.*') ? 'var(--primary-green)' : 'var(--text-muted)' }}; font-weight: 600; padding: 0.5rem 0;">
                    Galeri
                </a>
            </div>
    </div>

    <script>
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const desktopNav = document.querySelector('.desktop-nav');

        function updateNavigation() {
            if (window.innerWidth > 768) {
                desktopNav.style.display = 'flex';
                mobileMenuButton.style.display = 'none';
                mobileMenu.style.display = 'none';
            } else {
                desktopNav.style.display = 'none';
                                mobileMenuButton.style.display = 'block';
            }
        }

        // Toggle mobile menu
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.style.display = mobileMenu.style.display === 'none' ? 'block' : 'none';
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', (event) => {
            if (!mobileMenuButton.contains(event.target) && !mobileMenu.contains(event.target)) {
                mobileMenu.style.display = 'none';
            }
        });

        // Handle window resize
        window.addEventListener('resize', updateNavigation);

        // Initial setup
        updateNavigation();
    </script>
</nav>
