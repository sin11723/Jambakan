<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProducts = collect([
            (object)[
                'id' => 1,
                'name' => 'Kain Tenun Motif Tradisional',
                'price' => 450000,
                'description' => 'Kain tenun dengan motif tradisional yang diwariskan turun-temurun selama 5 generasi. Dibuat dengan benang alami berkualitas tinggi.',
                'category' => 'Kain Tenun',
                'image' => null
            ],
            (object)[
                'id' => 2,
                'name' => 'Sarung Tenun Premium',
                'price' => 650000,
                'description' => 'Sarung tenun premium dengan bahan berkualitas tinggi dan desain eksklusif. Sempurna untuk acara formal dan casual.',
                'category' => 'Sarung',
                'image' => null
            ]
        ]);

        $allProducts = collect([
            (object)['id' => 3, 'name' => 'Kain Tenun Motif Bunga', 'price' => 400000, 'category' => 'Kain Tenun', 'image' => null],
            (object)['id' => 4, 'name' => 'Kain Tenun Motif Geometri', 'price' => 420000, 'category' => 'Kain Tenun', 'image' => null],
            (object)['id' => 5, 'name' => 'Kain Tenun Warna Alami', 'price' => 380000, 'category' => 'Kain Tenun', 'image' => null],
            (object)['id' => 6, 'name' => 'Kain Tenun Motif Kontemporer', 'price' => 440000, 'category' => 'Kain Tenun', 'image' => null],
            (object)['id' => 7, 'name' => 'Sarung Tenun Klasik', 'price' => 600000, 'category' => 'Sarung', 'image' => null],
            (object)['id' => 8, 'name' => 'Sarung Tenun Modern', 'price' => 680000, 'category' => 'Sarung', 'image' => null],
            (object)['id' => 9, 'name' => 'Sarung Tenun Eksklusif', 'price' => 750000, 'category' => 'Sarung', 'image' => null],
            (object)['id' => 10, 'name' => 'Sarung Tenun Batik', 'price' => 720000, 'category' => 'Sarung', 'image' => null],
            (object)['id' => 11, 'name' => 'Tas Tenun Besar', 'price' => 400000, 'category' => 'Tas', 'image' => null],
            (object)['id' => 12, 'name' => 'Tas Tenun Sedang', 'price' => 300000, 'category' => 'Tas', 'image' => null],
            (object)['id' => 13, 'name' => 'Tas Tenun Kecil', 'price' => 200000, 'category' => 'Tas', 'image' => null],
            (object)['id' => 14, 'name' => 'Tas Tenun Tangan', 'price' => 350000, 'category' => 'Tas', 'image' => null],
        ]);

        $news = collect([
            (object)[
                'id' => 1,
                'title' => 'Desa Jambakan Raih Penghargaan Kerajinan Terbaik',
                'published_at' => now()->subDays(7),
                'description' => 'Desa Jambakan telah meraih penghargaan sebagai pengrajin tenun terbaik di tingkat nasional. Prestasi ini merupakan hasil kerja keras seluruh masyarakat desa dalam menjaga kualitas dan inovasi produk tenun tradisional.',
                'category' => 'Penghargaan',
                'image' => null
            ],
            (object)[
                'id' => 2,
                'title' => 'Workshop Tenun Tradisional untuk Generasi Muda',
                'published_at' => now()->subDays(12),
                'description' => 'Kami mengadakan workshop gratis untuk mengajarkan teknik tenun tradisional kepada generasi muda agar warisan budaya tetap terjaga dan berkembang di era modern.',
                'category' => 'Workshop',
                'image' => null
            ],
            (object)[
                'id' => 3,
                'title' => 'Ekspor Produk Tenun ke Pasar Internasional',
                'published_at' => now()->subDays(15),
                'description' => 'Produk tenun Desa Jambakan kini telah diekspor ke berbagai negara di Asia Tenggara dan Eropa dengan sambutan yang sangat baik dari pasar internasional.',
                'category' => 'Ekspor',
                'image' => null
            ],
            (object)[
                'id' => 4,
                'title' => 'Bahan Baku Ramah Lingkungan untuk Tenun',
                'published_at' => now()->subDays(20),
                'description' => 'Kami berkomitmen menggunakan bahan baku yang ramah lingkungan dan berkelanjutan dalam setiap proses produksi tenun kami untuk menjaga kelestarian alam.',
                'category' => 'Keberlanjutan',
                'image' => null
            ],
            (object)[
                'id' => 5,
                'title' => 'Dokumentasi Proses Produksi Tenun Tradisional',
                'published_at' => now()->subDays(25),
                'description' => 'Kami telah membuat dokumentasi lengkap tentang proses produksi tenun tradisional dari awal hingga akhir untuk edukasi publik dan pelestarian warisan budaya.',
                'category' => 'Edukasi',
                'image' => null
            ],
            (object)[
                'id' => 6,
                'title' => 'Kerjasama dengan Brand Fashion Ternama',
                'published_at' => now()->subDays(30),
                'description' => 'Desa Jambakan menjalin kerjasama strategis dengan brand fashion ternama untuk menghadirkan koleksi eksklusif tenun tradisional yang modern dan berkualitas tinggi.',
                'category' => 'Kerjasama',
                'image' => null
            ]
        ]);

        $galleries = collect([
            (object)[
                'id' => 1,
                'title' => 'Proses Tenun Tradisional',
                'description' => 'Dokumentasi lengkap proses pembuatan tenun dari persiapan benang hingga hasil akhir yang sempurna.',
                'image' => null,
                'icon' => 'fa-weixin'
            ],
            (object)[
                'id' => 2,
                'title' => 'Pengrajin Berpengalaman',
                'description' => 'Para pengrajin Desa Jambakan yang telah berdedikasi selama puluhan tahun dalam menjaga kualitas tenun tradisional.',
                'image' => null,
                'icon' => 'fa-user-tie'
            ],
            (object)[
                'id' => 3,
                'title' => 'Hasil Karya Terbaik',
                'description' => 'Koleksi hasil karya terbaik dari pengrajin Desa Jambakan yang telah memenangkan berbagai penghargaan internasional.',
                'image' => null,
                'icon' => 'fa-star'
            ],
            (object)[
                'id' => 4,
                'title' => 'Warna-Warni Tenun',
                'description' => 'Berbagai pilihan warna dan motif tenun yang indah dan menarik untuk memenuhi selera pelanggan yang beragam.',
                'image' => null,
                'icon' => 'fa-palette'
            ],
            (object)[
                'id' => 5,
                'title' => 'Alat Tenun Tradisional',
                'description' => 'Alat-alat tenun tradisional yang masih digunakan hingga saat ini dalam proses produksi tenun berkualitas tinggi.',
                'image' => null,
                'icon' => 'fa-tools'
            ],
            (object)[
                'id' => 6,
                'title' => 'Koleksi Eksklusif',
                'description' => 'Koleksi eksklusif tenun yang dirancang khusus untuk memenuhi kebutuhan pasar modern dan internasional.',
                'image' => null,
                'icon' => 'fa-gem'
            ],
            (object)[
                'id' => 7,
                'title' => 'Pameran Produk',
                'description' => 'Pameran produk tenun Desa Jambakan yang diselenggarakan secara berkala untuk memperkenalkan produk kepada masyarakat luas.',
                'image' => null,
                'icon' => 'fa-image'
            ],
            (object)[
                'id' => 8,
                'title' => 'Suasana Desa',
                'description' => 'Keindahan alam dan suasana kehidupan sehari-hari di Desa Jambakan yang penuh dengan keramahan dan budaya lokal.',
                'image' => null,
                'icon' => 'fa-tree'
            ]
        ]);

        return view('home', compact('featuredProducts', 'allProducts', 'news', 'galleries'));
    }

    public function showProduct($id)
    {
        $featuredProducts = collect([
            (object)[
                'id' => 1,
                'name' => 'Kain Tenun Motif Tradisional',
                'price' => 450000,
                'description' => 'Kain tenun dengan motif tradisional yang diwariskan turun-temurun selama 5 generasi. Dibuat dengan benang alami berkualitas tinggi.',
                'category' => 'Kain Tenun',
                'image' => null,
                'details' => 'Kain tenun ini merupakan hasil karya pengrajin berpengalaman yang telah mengembangkan teknik tenun selama puluhan tahun. Setiap helai benang dipilih dengan cermat untuk menghasilkan kualitas terbaik. Motif tradisional yang digunakan mencerminkan kekayaan budaya Desa Jambakan yang telah diwariskan dari generasi ke generasi.'
            ],
            (object)[
                'id' => 2,
                'name' => 'Sarung Tenun Premium',
                'price' => 650000,
                'description' => 'Sarung tenun premium dengan bahan berkualitas tinggi dan desain eksklusif. Sempurna untuk acara formal dan casual.',
                'category' => 'Sarung',
                'image' => null,
                'details' => 'Sarung tenun premium ini dirancang khusus untuk memenuhi kebutuhan pelanggan yang menghargai kualitas dan keindahan. Bahan yang digunakan adalah benang pilihan dengan daya tahan yang luar biasa. Desain eksklusif membuat sarung ini cocok digunakan untuk berbagai acara baik formal maupun casual.'
            ]
        ]);

        $allProducts = collect([
            (object)['id' => 3, 'name' => 'Kain Tenun Motif Bunga', 'price' => 400000, 'category' => 'Kain Tenun', 'image' => null, 'details' => 'Kain tenun dengan motif bunga yang indah dan berwarna-warni. Cocok untuk berbagai keperluan seperti pakaian, dekorasi rumah, atau hadiah spesial.'],
            (object)['id' => 4, 'name' => 'Kain Tenun Motif Geometri', 'price' => 420000, 'category' => 'Kain Tenun', 'image' => null, 'details' => 'Kain tenun dengan motif geometri modern yang elegan. Menggabungkan tradisi dengan sentuhan kontemporer untuk hasil yang unik dan menarik.'],
            (object)['id' => 5, 'name' => 'Kain Tenun Warna Alami', 'price' => 380000, 'category' => 'Kain Tenun', 'image' => null, 'details' => 'Kain tenun dengan warna alami yang dihasilkan dari pewarna tradisional. Ramah lingkungan dan memberikan kesan natural yang elegan.'],
            (object)['id' => 6, 'name' => 'Kain Tenun Motif Kontemporer', 'price' => 440000, 'category' => 'Kain Tenun', 'image' => null, 'details' => 'Kain tenun dengan motif kontemporer yang mencerminkan tren fashion terkini. Tetap mempertahankan nilai tradisional dengan sentuhan modern.'],
            (object)['id' => 7, 'name' => 'Sarung Tenun Klasik', 'price' => 600000, 'category' => 'Sarung', 'image' => null, 'details' => 'Sarung tenun klasik dengan desain timeless yang tidak akan pernah ketinggalan zaman. Sempurna untuk penggunaan sehari-hari maupun acara khusus.'],
            (object)['id' => 8, 'name' => 'Sarung Tenun Modern', 'price' => 680000, 'category' => 'Sarung', 'image' => null, 'details' => 'Sarung tenun dengan desain modern yang fresh dan stylish. Cocok untuk generasi muda yang menghargai kualitas dan gaya.'],
            (object)['id' => 9, 'name' => 'Sarung Tenun Eksklusif', 'price' => 750000, 'category' => 'Sarung', 'image' => null, 'details' => 'Sarung tenun eksklusif dengan bahan premium dan desain limited edition. Hanya diproduksi dalam jumlah terbatas untuk menjaga eksklusivitas.'],
            (object)['id' => 10, 'name' => 'Sarung Tenun Batik', 'price' => 720000, 'category' => 'Sarung', 'image' => null, 'details' => 'Sarung tenun dengan motif batik tradisional yang indah. Menggabungkan dua teknik tradisional Indonesia untuk hasil yang spektakuler.'],
            (object)['id' => 11, 'name' => 'Tas Tenun Besar', 'price' => 400000, 'category' => 'Tas', 'image' => null, 'details' => 'Tas tenun berukuran besar dengan kapasitas yang luas. Cocok untuk membawa barang-barang penting dalam perjalanan atau aktivitas sehari-hari.'],
            (object)['id' => 12, 'name' => 'Tas Tenun Sedang', 'price' => 300000, 'category' => 'Tas', 'image' => null, 'details' => 'Tas tenun berukuran sedang yang praktis dan stylish. Ukuran yang pas untuk membawa barang-barang penting tanpa terlalu berat.'],
            (object)['id' => 13, 'name' => 'Tas Tenun Kecil', 'price' => 200000, 'category' => 'Tas', 'image' => null, 'details' => 'Tas tenun berukuran kecil yang elegan dan fungsional. Cocok untuk acara formal atau sebagai aksesori pelengkap penampilan.'],
            (object)['id' => 14, 'name' => 'Tas Tenun Tangan', 'price' => 350000, 'category' => 'Tas', 'image' => null, 'details' => 'Tas tenun yang dirancang khusus untuk dipegang di tangan. Desain ergonomis dan bahan berkualitas untuk kenyamanan maksimal.'],
        ]);

        $product = $allProducts->merge($featuredProducts)->firstWhere('id', $id);

        if (!$product) {
            abort(404, 'Produk tidak ditemukan');
        }

        return view('products.show', compact('product'));
    }

    public function showNews($id)
    {
        $news = collect([
            (object)[
                'id' => 1,
                'title' => 'Desa Jambakan Raih Penghargaan Kerajinan Terbaik',
                'published_at' => now()->subDays(7),
                'description' => 'Desa Jambakan telah meraih penghargaan sebagai pengrajin tenun terbaik di tingkat nasional. Prestasi ini merupakan hasil kerja keras seluruh masyarakat desa dalam menjaga kualitas dan inovasi produk tenun tradisional.',
                'category' => 'Penghargaan',
                'image' => null,
                'content' => 'Penghargaan ini diberikan oleh Kementerian Perindustrian dan Perdagangan atas dedikasi dan inovasi yang telah dilakukan oleh pengrajin Desa Jambakan. Prestasi ini membuktikan bahwa kerajinan tenun tradisional masih memiliki nilai tinggi dan dapat bersaing di pasar global. Kami berkomitmen untuk terus meningkatkan kualitas dan inovasi produk kami.'
            ],
            (object)[
                'id' => 2,
                'title' => 'Workshop Tenun Tradisional untuk Generasi Muda',
                'published_at' => now()->subDays(12),
                'description' => 'Kami mengadakan workshop gratis untuk mengajarkan teknik tenun tradisional kepada generasi muda agar warisan budaya tetap terjaga dan berkembang di era modern.',
                'category' => 'Workshop',
                'image' => null,
                'content' => 'Workshop ini diikuti oleh lebih dari 50 peserta dari berbagai daerah yang tertarik untuk mempelajari teknik tenun tradisional. Peserta mendapatkan kesempatan untuk belajar langsung dari pengrajin berpengalaman dan mencoba membuat tenun sendiri. Kami berharap workshop ini dapat menginspirasi generasi muda untuk melestarikan warisan budaya ini.'
            ],
            (object)[
                'id' => 3,
                'title' => 'Ekspor Produk Tenun ke Pasar Internasional',
                'published_at' => now()->subDays(15),
                'description' => 'Produk tenun Desa Jambakan kini telah diekspor ke berbagai negara di Asia Tenggara dan Eropa dengan sambutan yang sangat baik dari pasar internasional.',
                'category' => 'Ekspor',
                'image' => null,
                'content' => 'Ekspor produk tenun kami mencapai 15 negara dengan total nilai ekspor mencapai miliaran rupiah. Produk kami mendapat sambutan yang luar biasa dari pasar internasional karena kualitas dan keunikan desainnya. Kami terus berusaha untuk memperluas pasar dan meningkatkan volume ekspor.'
            ],
            (object)[
                'id' => 4,
                'title' => 'Bahan Baku Ramah Lingkungan untuk Tenun',
                'published_at' => now()->subDays(20),
                'description' => 'Kami berkomitmen menggunakan bahan baku yang ramah lingkungan dan berkelanjutan dalam setiap proses produksi tenun kami untuk menjaga kelestarian alam.',
                'category' => 'Keberlanjutan',
                'image' => null,
                'content' => 'Komitmen kami terhadap keberlanjutan lingkungan tercermin dalam penggunaan benang organik dan pewarna alami. Kami juga menerapkan sistem produksi yang meminimalkan limbah dan menghemat energi. Dengan langkah-langkah ini, kami berharap dapat berkontribusi dalam menjaga kelestarian lingkungan untuk generasi mendatang.'
            ],
            (object)[
                'id' => 5,
                'title' => 'Dokumentasi Proses Produksi Tenun Tradisional',
                'published_at' => now()->subDays(25),
                'description' => 'Kami telah membuat dokumentasi lengkap tentang proses produksi tenun tradisional dari awal hingga akhir untuk edukasi publik dan pelestarian warisan budaya.',
                'category' => 'Edukasi',
                'image' => null,
                'content' => 'Dokumentasi ini mencakup video, foto, dan penjelasan detail tentang setiap tahap produksi tenun. Dokumentasi ini tersedia untuk publik dan dapat diakses melalui website kami. Kami berharap dokumentasi ini dapat membantu masyarakat memahami dan menghargai kerajinan tenun tradisional.'
            ],
            (object)[
                'id' => 6,
                'title' => 'Kerjasama dengan Brand Fashion Ternama',
                'published_at' => now()->subDays(30),
                'description' => 'Desa Jambakan menjalin kerjasama strategis dengan brand fashion ternama untuk menghadirkan koleksi eksklusif tenun tradisional yang modern dan berkualitas tinggi.',
                'category' => 'Kerjasama',
                'image' => null,
                'content' => 'Kerjasama ini menghasilkan koleksi eksklusif yang menggabungkan keahlian pengrajin Desa Jambakan dengan desain fashion modern. Koleksi ini telah diluncurkan di berbagai kota besar dan mendapat respons yang sangat positif dari konsumen. Kami berharap kerjasama ini dapat membuka peluang baru dan meningkatkan nilai produk tenun kami.'
            ]
        ]);

        $article = $news->firstWhere('id', $id);

        if (!$article) {
            abort(404, 'Berita tidak ditemukan');
        }

        return view('news.show', compact('article'));
    }

    public function showGallery($id)
    {
        $galleries = collect([
            (object)[
                'id' => 1,
                'title' => 'Proses Tenun Tradisional',
                'description' => 'Dokumentasi lengkap proses pembuatan tenun dari persiapan benang hingga hasil akhir yang sempurna.',
                'image' => null,
                'icon' => 'fa-weixin',
                'content' => 'Proses tenun tradisional dimulai dari persiapan benang, penentuan motif, hingga proses tenun yang membutuhkan keahlian dan kesabaran tinggi. Setiap tahap dikerjakan dengan teliti untuk menghasilkan produk berkualitas tinggi. Proses ini telah diwariskan turun-temurun dan terus dikembangkan dengan inovasi baru.'
            ],
            (object)[
                'id' => 2,
                'title' => 'Pengrajin Berpengalaman',
                'description' => 'Para pengrajin Desa Jambakan yang telah berdedikasi selama puluhan tahun dalam menjaga kualitas tenun tradisional.',
                'image' => null,
                'icon' => 'fa-user-tie',
                'content' => 'Pengrajin Desa Jambakan adalah individu-individu berbakat yang telah menghabiskan puluhan tahun untuk menguasai seni tenun tradisional. Mereka tidak hanya ahli dalam teknik tenun, tetapi juga memiliki pemahaman mendalam tentang motif, warna, dan desain. Dedikasi mereka telah membuat Desa Jambakan dikenal sebagai pusat kerajinan tenun terbaik.'
            ],
            (object)[
                'id' => 3,
                'title' => 'Hasil Karya Terbaik',
                'description' => 'Koleksi hasil karya terbaik dari pengrajin Desa Jambakan yang telah memenangkan berbagai penghargaan internasional.',
                'image' => null,
                'icon' => 'fa-star',
                'content' => 'Hasil karya terbaik kami telah memenangkan berbagai penghargaan internasional dan diakui oleh para ahli kerajinan di seluruh dunia. Setiap karya adalah masterpiece yang menunjukkan keahlian dan dedikasi pengrajin. Koleksi ini menjadi bukti bahwa kerajinan tenun tradisional masih memiliki nilai tinggi di era modern.'
            ],
            (object)[
                'id' => 4,
                'title' => 'Warna-Warni Tenun',
                'description' => 'Berbagai pilihan warna dan motif tenun yang indah dan menarik untuk memenuhi selera pelanggan yang beragam.',
                'image' => null,
                'icon' => 'fa-palette',
                'content' => 'Kami menawarkan berbagai pilihan warna dan motif tenun yang dapat disesuaikan dengan preferensi pelanggan. Warna-warna yang kami gunakan berasal dari pewarna alami yang ramah lingkungan. Motif-motif kami menggabungkan tradisi dengan sentuhan kontemporer untuk hasil yang unik dan menarik.'
            ],
            (object)[
                'id' => 5,
                'title' => 'Alat Tenun Tradisional',
                'description' => 'Alat-alat tenun tradisional yang masih digunakan hingga saat ini dalam proses produksi tenun berkualitas tinggi.',
                'image' => null,
                'icon' => 'fa-tools',
                'content' => 'Alat-alat tenun tradisional yang kami gunakan telah diwariskan turun-temurun dan terus dirawat dengan baik. Meskipun teknologi modern telah berkembang, kami tetap menggunakan alat tradisional karena menghasilkan kualitas yang lebih baik. Alat-alat ini adalah bagian penting dari warisan budaya Desa Jambakan.'
            ],
            (object)[
                'id' => 6,
                'title' => 'Koleksi Eksklusif',
                'description' => 'Koleksi eksklusif tenun yang dirancang khusus untuk memenuhi kebutuhan pasar modern dan internasional.',
                'image' => null,
                'icon' => 'fa-gem',
                'content' => 'Koleksi eksklusif kami dirancang oleh desainer terkenal dan diproduksi dalam jumlah terbatas. Setiap piece adalah karya seni yang unik dan bernilai tinggi. Koleksi ini ditujukan untuk pelanggan yang menghargai kualitas, keunikan, dan eksklusivitas.'
            ],
            (object)[
                'id' => 7,
                'title' => 'Pameran Produk',
                'description' => 'Pameran produk tenun Desa Jambakan yang diselenggarakan secara berkala untuk memperkenalkan produk kepada masyarakat luas.',
                'image' => null,
                'icon' => 'fa-image',
                'content' => 'Kami menyelenggarakan pameran produk secara berkala di berbagai kota untuk memperkenalkan produk tenun kami kepada masyarakat luas. Pameran ini juga menjadi kesempatan untuk berinteraksi langsung dengan pelanggan dan mendapatkan feedback. Melalui pameran ini, kami dapat memperluas jaringan dan meningkatkan penjualan.'
            ],
            (object)[
                'id' => 8,
                'title' => 'Suasana Desa',
                'description' => 'Keindahan alam dan suasana kehidupan sehari-hari di Desa Jambakan yang penuh dengan keramahan dan budaya lokal.',
                'image' => null,
                'icon' => 'fa-tree',
                'content' => 'Desa Jambakan adalah desa yang indah dengan alam yang asri dan masyarakat yang ramah. Kehidupan sehari-hari di desa ini penuh dengan budaya lokal yang kaya dan tradisi yang masih terjaga. Suasana desa yang tenang dan damai menjadi inspirasi bagi pengrajin dalam menciptakan karya-karya indah.'
            ]
        ]);

        $gallery = $galleries->firstWhere('id', $id);

        if (!$gallery) {
            abort(404, 'Galeri tidak ditemukan');
        }

        return view('galleries.show', compact('gallery'));
    }
}
