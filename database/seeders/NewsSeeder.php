<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    public function run(): void
    {
        $news = [
            [
                'title' => 'Desa Jambakan Raih Penghargaan Kerajinan Terbaik 2024',
                'content' => 'Desa Jambakan telah meraih penghargaan bergengsi sebagai Kerajinan Terbaik 2024 dari Kementerian Perindustrian. Penghargaan ini merupakan bukti dedikasi dan kerja keras para pengrajin lokal dalam menjaga kualitas dan keaslian kerajinan tenun tradisional. Kepala Desa menyatakan bahwa penghargaan ini akan memotivasi mereka untuk terus berinovasi sambil mempertahankan nilai-nilai tradisional.',
                'published_at' => now()->subDays(5),
            ],
            [
                'title' => 'Workshop Tenun Tradisional untuk Generasi Muda',
                'content' => 'Pemerintah Desa Jambakan mengadakan workshop gratis tentang teknik tenun tradisional untuk generasi muda. Workshop ini bertujuan untuk melestarikan warisan budaya dan membuka peluang usaha bagi pemuda lokal. Lebih dari 50 peserta mengikuti kegiatan ini dengan antusias dan menunjukkan minat yang tinggi terhadap kerajinan tenun.',
                'published_at' => now()->subDays(10),
            ],
            [
                'title' => 'Ekspor Produk Tenun Jambakan ke Pasar Internasional',
                'content' => 'Produk tenun dari Desa Jambakan kini telah menembus pasar internasional. Beberapa pengrajin lokal berhasil menjalin kerjasama dengan distributor dari Eropa dan Asia Tenggara. Ini merupakan pencapaian luar biasa yang membuka peluang ekonomi baru bagi masyarakat desa.',
                'published_at' => now()->subDays(15),
            ],
            [
                'title' => 'Festival Tenun Jambakan 2024 Segera Dimulai',
                'content' => 'Festival Tenun Jambakan 2024 akan diselenggarakan pada bulan depan dengan menghadirkan berbagai acara menarik. Mulai dari pameran produk, workshop, pertunjukan budaya, hingga penjualan langsung dengan harga spesial. Acara ini diharapkan dapat menarik ribuan pengunjung dari berbagai daerah.',
                'published_at' => now()->subDays(20),
            ],
            [
                'title' => 'Inovasi Pewarna Alami untuk Tenun Tradisional',
                'content' => 'Para pengrajin Desa Jambakan terus berinovasi dengan mengembangkan pewarna alami dari tumbuhan lokal. Pewarna alami ini tidak hanya ramah lingkungan tetapi juga menghasilkan warna yang lebih indah dan tahan lama. Penelitian ini dilakukan bekerja sama dengan universitas lokal dan mendapat dukungan penuh dari pemerintah.',
                'published_at' => now()->subDays(25),
            ],
            [
                'title' => 'Kunjungan Delegasi Internasional ke Desa Jambakan',
                'content' => 'Delegasi dari berbagai negara mengunjungi Desa Jambakan untuk mempelajari teknik tenun tradisional. Mereka sangat terkesan dengan kualitas produk dan dedikasi para pengrajin dalam menjaga warisan budaya. Kunjungan ini diharapkan dapat membuka peluang kolaborasi internasional yang lebih luas.',
                'published_at' => now()->subDays(30),
            ],
        ];

        foreach ($news as $article) {
            News::create($article);
        }
    }
}
