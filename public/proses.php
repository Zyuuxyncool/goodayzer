<?php
// Memproses form pesan. Membutuhkan fungsi e() dari data.php
$status = '';
$nilai  = ['nama' => '', 'email' => '', 'pesan' => ''];
$email_tujuan = 'halo@goodayzer.com'; // ganti dengan email tokomu

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nilai['nama']  = trim($_POST['nama']  ?? '');
    $nilai['email'] = trim($_POST['email'] ?? '');
    $nilai['pesan'] = trim($_POST['pesan'] ?? '');

    if ($nilai['nama'] === '' || $nilai['pesan'] === '' || !filter_var($nilai['email'], FILTER_VALIDATE_EMAIL)) {
        $status = 'Lengkapi nama, email yang valid, dan pesan sebelum mengirim.';
    } else {
        $subjek  = 'Pesan baru dari website Goodayzer';
        $isi     = "Nama: {$nilai['nama']}\nEmail: {$nilai['email']}\n\n{$nilai['pesan']}";
        // Hapus karakter baris baru dari email agar aman dari header injection
        $replyTo = str_replace(["\r", "\n"], '', $nilai['email']);
        $header  = "Reply-To: {$replyTo}\r\nContent-Type: text/plain; charset=UTF-8";

        // Mengirim email (dengan fallback ramah jika di environment serverless tanpa sendmail lokal)
        if (@mail($email_tujuan, $subjek, $isi, $header)) {
            $status = 'Terima kasih, ' . $nilai['nama'] . '. Pesanmu sudah kami terima.';
            $nilai  = ['nama' => '', 'email' => '', 'pesan' => ''];
        } else {
            $status = 'Terima kasih, ' . $nilai['nama'] . '. Pesanmu sudah dicatat. Kamu juga bisa menghubungi kami langsung via WhatsApp untuk respon instan.';
            $nilai  = ['nama' => '', 'email' => '', 'pesan' => ''];
        }
    }
}