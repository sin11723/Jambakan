<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        $galleries = [
            [
                'title' => 'Proses Tenun Tradisional',
                'description' => 'Dokumentasi proses pembuatan tenun tradisional dari awal hingga akhir. Menunjukkan keahlian dan kesabaran para pengrajin dalam setiap langkah produksi.',
            ],
            [
                'title' => 'Pameran Produk Tenun Jambakan',
                'description' => 'Koleksi lengkap produk tenun yang dipamerkan di berbagai acara internasional. Menampilkan keragaman motif dan warna yang indah dari Desa Jambakan.',
            ],
            [
                'title' => 'Keindahan Alam Desa Jambakan',
                'description' => 'Pemandangan indah dari Desa Jambakan dengan sawah hijau dan pegunungan yang menawan. Alam yang asri menjadi inspirasi bagi para pengrajin dalam menciptakan motif tenun.',
            ],
            [
                'title' => 'Workshop Tenun untuk Anak-anak',
                'description' => 'Kegiatan edukasi tenun tradisional untuk anak-anak lokal. Ini adalah bagian dari upaya melestarikan warisan budaya dan mengenalkan kerajinan sejak dini.',
            ],
            [
                'title' => 'Pengrajin Desa Jambakan Bekerja',
                'description' => 'Potret para pengrajin yang sedang bekerja dengan penuh konsentrasi. Setiap detail menunjukkan dedikasi dan keahlian mereka dalam menciptakan karya seni tenun.',
            ],
            [
                'title' => 'Koleksi Warna-warni Tenun',
                'description' => 'Berbagai pilihan warna tenun yang indah dan menarik. Warna-warna ini dihasilkan dari pewarna alami yang ramah lingkungan.',
            ],
            [
                'title' => 'Acara Peluncuran Produk Baru',
                'description' => 'Peluncuran koleksi produk tenun terbaru dari Desa Jambakan. Acara ini dihadiri oleh berbagai stakeholder dan media massa.',
            ],
            [
                'title' => 'Kerjasama dengan Desainer Internasional',
                'description' => 'Kolaborasi antara pengrajin Desa Jambakan dengan desainer internasional untuk menciptakan produk yang inovatif namun tetap mempertahankan nilai tradisional.',
            ],
        ];

        foreach ($galleries as $gallery) {
            Gallery::create($gallery);
        }
    }
}
