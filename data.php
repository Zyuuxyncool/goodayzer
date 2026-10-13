<?php
// ===== Data menu (ubah nama, harga, dan deskripsi di sini) =====
$menu = [
    ['nama' => 'Espresso',               'harga' => 18000, 'kategori' => 'kopi',     'deskripsi' => 'Shot tunggal yang pekat dengan crema tebal.', 'favorit' => false, 'gambar' => 'assets/espresso.jpeg'],
    ['nama' => 'Americano',              'harga' => 22000, 'kategori' => 'kopi',     'deskripsi' => 'Espresso dengan air panas, ringan dan bersih.', 'favorit' => false, 'gambar' => 'assets/americano.jpeg'],
    ['nama' => 'Cappuccino',             'harga' => 28000, 'kategori' => 'kopi',     'deskripsi' => 'Espresso, susu panas, dan busa susu yang lembut.', 'favorit' => false, 'gambar' => 'assets/cappuccino.jpeg'],
    ['nama' => 'Es Kopi Susu Goodayzer', 'harga' => 25000, 'kategori' => 'kopi',     'deskripsi' => 'Kopi, susu segar, dan gula aren. Racikan andalan kami.', 'favorit' => true,  'gambar' => 'assets/es_susu_goodayzer.jpeg'],
    ['nama' => 'Caramel Latte',          'harga' => 30000, 'kategori' => 'kopi',     'deskripsi' => 'Latte dengan saus karamel, tersedia panas atau dingin.', 'favorit' => true,  'gambar' => 'assets/caramel_latte.jpeg'],
    ['nama' => 'Matcha Latte',           'harga' => 28000, 'kategori' => 'non-kopi', 'deskripsi' => 'Matcha dengan susu, tidak terlalu manis.', 'favorit' => true,  'gambar' => 'assets/matchalatte.jpeg'],
    ['nama' => 'Coklat Panas',           'harga' => 24000, 'kategori' => 'non-kopi', 'deskripsi' => 'Coklat pekat dengan susu hangat.', 'favorit' => false, 'gambar' => 'assets/coklat_panas.jpeg'],
    ['nama' => 'Teh Lemon Dingin',       'harga' => 20000, 'kategori' => 'non-kopi', 'deskripsi' => 'Teh hitam, lemon segar, dan es batu.', 'favorit' => false, 'gambar' => 'assets/teh_lemon_dingin.jpeg'],
    ['nama' => 'Croissant Mentega',      'harga' => 22000, 'kategori' => 'camilan',  'deskripsi' => 'Dipanggang pagi hari, renyah di luar dan lembut di dalam.', 'favorit' => true,  'gambar' => 'assets/croissant_mentega.jpeg'],
    ['nama' => 'Roti Bakar Coklat Keju', 'harga' => 20000, 'kategori' => 'camilan',  'deskripsi' => 'Roti tebal dengan isian coklat dan keju.', 'favorit' => false, 'gambar' => 'assets/roti_bakar_coklat_keju.jpeg'],
    ['nama' => 'Kentang Goreng',         'harga' => 18000, 'kategori' => 'camilan',  'deskripsi' => 'Disajikan dengan saus sambal atau mayones.', 'favorit' => false, 'gambar' => 'assets/kentang_goreng.jpeg'],
];

$kategori = ['semua' => 'Semua', 'kopi' => 'Kopi', 'non-kopi' => 'Non-kopi', 'camilan' => 'Camilan'];

function rupiah(int $angka): string {
    return 'Rp ' . number_format($angka, 0, ',', '.');
}

function e(string $teks): string {
    return htmlspecialchars($teks, ENT_QUOTES, 'UTF-8');
}