<?php
// ===== Fitur PHP: Page View Counter Berbasis IP (Anti-Spam Refresh) =====
// Mencegah penambahan counter berulang kali akibat refresh dari IP yang sama.

if (session_status() === PHP_SESSION_NONE) {
    @session_start();
}

/**
 * Mendapatkan alamat IP asli pengunjung (mendukung direct, ngrok, proxy, dan Vercel)
 */
function dapatkanIpPengunjung() {
    $keys = [
        'HTTP_CF_CONNECTING_IP',   // Cloudflare
        'HTTP_X_REAL_IP',          // Vercel / Nginx Reverse Proxy
        'HTTP_X_FORWARDED_FOR',    // Ngrok / Proxy
        'HTTP_CLIENT_IP',
        'REMOTE_ADDR'              // Direct Localhost
    ];

    foreach ($keys as $key) {
        if (!empty($_SERVER[$key])) {
            $ipList = explode(',', $_SERVER[$key]);
            $ip = trim($ipList[0]);
            if (filter_var($ip, FILTER_VALIDATE_IP)) {
                return $ip;
            }
        }
    }

    return $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1';
}

$file_counter_lokal = __DIR__ . '/counter.txt';
$file_log_ip_lokal  = __DIR__ . '/log_pengunjung.json';

$file_counter = $file_counter_lokal;
$file_log_ip  = $file_log_ip_lokal;

// Cek apakah direktori saat ini bisa ditulis.
// Pada lingkungan serverless (seperti Vercel), direktori aplikasi berstatus read-only, sehingga dialihkan ke direktori temporary sistem (/tmp).
if (!is_writable(__DIR__) && is_writable(sys_get_temp_dir())) {
    $file_counter = sys_get_temp_dir() . '/goodayzer_counter.txt';
    $file_log_ip  = sys_get_temp_dir() . '/goodayzer_log_ip.json';

    if (!file_exists($file_counter) && file_exists($file_counter_lokal)) {
        @copy($file_counter_lokal, $file_counter);
    }
    if (!file_exists($file_log_ip) && file_exists($file_log_ip_lokal)) {
        @copy($file_log_ip_lokal, $file_log_ip);
    }
}

// 1. Baca total kunjungan yang tersimpan saat ini
$total_kunjungan = 1;
if (file_exists($file_counter)) {
    $isi = trim((string) @file_get_contents($file_counter));
    if (is_numeric($isi) && (int)$isi > 0) {
        $total_kunjungan = (int)$isi;
    }
} elseif (file_exists($file_counter_lokal)) {
    $isi = trim((string) @file_get_contents($file_counter_lokal));
    if (is_numeric($isi) && (int)$isi > 0) {
        $total_kunjungan = (int)$isi;
    }
}

// 2. Baca log IP pengunjung
$data_ip = [];
if (file_exists($file_log_ip)) {
    $konten_log = @file_get_contents($file_log_ip);
    $data_ip = json_decode($konten_log, true) ?: [];
}

$ip_sekarang    = dapatkanIpPengunjung();
$waktu_sekarang = time();
$jeda_kunjungan = 3600; // Jeda 1 jam (3600 detik) untuk IP yang sama sebelum dihitung lagi

// 3. Tentukan apakah kunjungan ini valid untuk dihitung
$apakah_kunjungan_baru = true;

// Cek dari Session browser (proteksi level sesi)
if (!empty($_SESSION['goodayzer_terhitung'])) {
    $apakah_kunjungan_baru = false;
}

// Cek dari Catatan IP (proteksi level IP address)
if (isset($data_ip[$ip_sekarang])) {
    $waktu_terakhir = (int)$data_ip[$ip_sekarang];
    if (($waktu_sekarang - $waktu_terakhir) < $jeda_kunjungan) {
        $apakah_kunjungan_baru = false;
    }
}

// 4. Jika pengunjung baru / jeda waktu telah lewat, tambahkan counter
if ($apakah_kunjungan_baru) {
    $total_kunjungan++;
    @file_put_contents($file_counter, (string)$total_kunjungan, LOCK_EX);

    // Simpan timestamp IP terbaru
    $data_ip[$ip_sekarang] = $waktu_sekarang;
    @file_put_contents($file_log_ip, json_encode($data_ip, JSON_PRETTY_PRINT), LOCK_EX);

    // Tandai sesi pengguna
    $_SESSION['goodayzer_terhitung'] = true;
}
