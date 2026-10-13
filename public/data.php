<?php
// ===== Data menu (ubah nama, harga, dan deskripsi di sini) =====
$menu = [
    ['nama' => 'Espresso',               'harga' => 18000, 'kategori' => 'kopi',     'deskripsi' => 'Shot tunggal yang pekat dengan crema tebal.', 'favorit' => false],
    ['nama' => 'Americano',              'harga' => 22000, 'kategori' => 'kopi',     'deskripsi' => 'Espresso dengan air panas, ringan dan bersih.', 'favorit' => false],
    ['nama' => 'Cappuccino',             'harga' => 28000, 'kategori' => 'kopi',     'deskripsi' => 'Espresso, susu panas, dan busa susu yang lembut.', 'favorit' => false],
    ['nama' => 'Es Kopi Susu Goodayzer', 'harga' => 25000, 'kategori' => 'kopi',     'deskripsi' => 'Kopi, susu segar, dan gula aren. Racikan andalan kami.', 'favorit' => true],
    ['nama' => 'Caramel Latte',          'harga' => 30000, 'kategori' => 'kopi',     'deskripsi' => 'Latte dengan saus karamel, tersedia panas atau dingin.', 'favorit' => true],
    ['nama' => 'Matcha Latte',           'harga' => 28000, 'kategori' => 'non-kopi', 'deskripsi' => 'Matcha dengan susu, tidak terlalu manis.', 'favorit' => true],
    ['nama' => 'Coklat Panas',           'harga' => 24000, 'kategori' => 'non-kopi', 'deskripsi' => 'Coklat pekat dengan susu hangat.', 'favorit' => false],
    ['nama' => 'Teh Lemon Dingin',       'harga' => 20000, 'kategori' => 'non-kopi', 'deskripsi' => 'Teh hitam, lemon segar, dan es batu.', 'favorit' => false],
    ['nama' => 'Croissant Mentega',      'harga' => 22000, 'kategori' => 'camilan',  'deskripsi' => 'Dipanggang pagi hari, renyah di luar dan lembut di dalam.', 'favorit' => true],
    ['nama' => 'Roti Bakar Coklat Keju', 'harga' => 20000, 'kategori' => 'camilan',  'deskripsi' => 'Roti tebal dengan isian coklat dan keju.', 'favorit' => false],
    ['nama' => 'Kentang Goreng',         'harga' => 18000, 'kategori' => 'camilan',  'deskripsi' => 'Disajikan dengan saus sambal atau mayones.', 'favorit' => false],
];

$kategori = ['semua' => 'Semua', 'kopi' => 'Kopi', 'non-kopi' => 'Non-kopi', 'camilan' => 'Camilan'];

function rupiah(int $angka): string {
    return 'Rp ' . number_format($angka, 0, ',', '.');
}

function e(string $teks): string {
    return htmlspecialchars($teks, ENT_QUOTES, 'UTF-8');
}