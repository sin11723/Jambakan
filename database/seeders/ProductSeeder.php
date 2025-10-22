<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            // Featured Products
            [
                'name' => 'Kain Tenun Songket Premium',
                'description' => 'Kain tenun songket tradisional dengan motif bunga emas yang indah. Dibuat dengan benang sutra berkualitas tinggi menggunakan teknik tenun tangan yang telah diwariskan turun-temurun selama 5 generasi.',
                'category' => 'Kain Tenun',
                'price' => 850000,
                'is_featured' => true,
            ],
            [
                'name' => 'Sarung Tenun Batik Jambakan',
                'description' => 'Sarung tenun dengan motif batik khas Desa Jambakan yang menggabungkan warna-warna alami. Cocok untuk acara formal maupun santai, nyaman dipakai sepanjang hari.',
                'category' => 'Sarung',
                'price' => 450000,
                'is_featured' => true,
            ],
            // Regular Products
            [
                'name' => 'Kain Tenun Motif Geometris',
                'description' => 'Kain tenun dengan motif geometris modern yang terinspirasi dari pola tradisional. Warna-warna cerah dan tahan lama, cocok untuk berbagai kebutuhan.',
                'category' => 'Kain Tenun',
                'price' => 650000,
                'is_featured' => false,
            ],
            [
                'name' => 'Tas Tenun Tangan Warna Alami',
                'description' => 'Tas tangan yang dibuat dari tenun tradisional dengan warna-warna alami dari pewarna organik. Desain elegan dan fungsional untuk penggunaan sehari-hari.',
                'category' => 'Tas',
                'price' => 350000,
                'is_featured' => false,
            ],
            [
                'name' => 'Selendang Tenun Sutra',
                'description' => 'Selendang tenun sutra dengan motif bunga yang elegan. Sempurna untuk melengkapi penampilan formal atau casual dengan sentuhan tradisional.',
                'category' => 'Aksesori',
                'price' => 550000,
                'is_featured' => false,
            ],
            [
                'name' => 'Kain Tenun Motif Daun',
                'description' => 'Kain tenun dengan motif daun-daunan yang terinspirasi dari keindahan alam sekitar Desa Jambakan. Warna hijau dan coklat yang menenangkan.',
                'category' => 'Kain Tenun',
                'price' => 700000,
                'is_featured' => false,
            ],
            [
                'name' => 'Sarung Tenun Motif Tradisional',
                'description' => 'Sarung tenun dengan motif tradisional yang klasik dan timeless. Dibuat dengan bahan berkualitas tinggi yang nyaman dan tahan lama.',
                'category' => 'Sarung',
                'price' => 400000,
                'is_featured' => false,
            ],
            [
                'name' => 'Tas Tenun Motif Bunga',
                'description' => 'Tas tenun dengan motif bunga yang indah dan warna-warna cerah. Ukuran sedang, cocok untuk membawa barang-barang penting sehari-hari.',
                'category' => 'Tas',
                'price' => 320000,
                'is_featured' => false,
            ],
            [
                'name' => 'Ikat Kepala Tenun Tradisional',
                'description' => 'Ikat kepala tenun dengan motif tradisional yang khas. Bahan lembut dan nyaman dipakai, cocok untuk berbagai acara.',
                'category' => 'Aksesori',
                'price' => 180000,
                'is_featured' => false,
            ],
            [
                'name' => 'Kain Tenun Motif Ombak',
                'description' => 'Kain tenun dengan motif ombak yang dinamis dan modern. Warna biru dan putih yang segar, cocok untuk pakaian musim panas.',
                'category' => 'Kain Tenun',
                'price' => 600000,
                'is_featured' => false,
            ],
            [
                'name' => 'Sarung Tenun Warna Gradasi',
                'description' => 'Sarung tenun dengan gradasi warna yang indah dari gelap ke terang. Desain modern namun tetap mempertahankan nilai tradisional.',
                'category' => 'Sarung',
                'price' => 480000,
                'is_featured' => false,
            ],
            [
                'name' => 'Tas Tenun Besar Kapasitas Tinggi',
                'description' => 'Tas tenun berukuran besar dengan kapasitas tinggi untuk membawa banyak barang. Desain praktis dengan pegangan yang kuat dan nyaman.',
                'category' => 'Tas',
                'price' => 420000,
                'is_featured' => false,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
