<?php
require __DIR__ . '/data.php';
require __DIR__ . '/proses.php';
require __DIR__ . '/counter.php';

// Hitung jumlah item per kategori untuk badge filter
$hitung_kategori = ['semua' => count($menu)];
foreach ($menu as $item) {
    $kat = $item['kategori'];
    $hitung_kategori[$kat] = ($hitung_kategori[$kat] ?? 0) + 1;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Goodayzer Coffee Shop | Secangkir Kopi untuk Hari yang Good</title>
  <meta name="description" content="Goodayzer, coffee shop dengan racikan kopi segar, minuman dingin, dan camilan lezat dengan suasana nyaman untuk bekerja dan rehat.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,600;9..144,700;9..144,800&family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- Header Navigasi -->
  <header id="header-utama">
    <div class="wadah bar">
      <a class="logo" href="#atas" aria-label="Goodayzer Coffee, kembali ke bagian atas">
        <span class="logo-icon" aria-hidden="true">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
            <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
            <line x1="6" y1="1" x2="6" y2="4"></line>
            <line x1="10" y1="1" x2="10" y2="4"></line>
            <line x1="14" y1="1" x2="14" y2="4"></line>
          </svg>
        </span>
        <span>Goodayzer</span>
      </a>

      <!-- Desktop Nav -->
      <nav class="nav-desktop" aria-label="Navigasi utama">
        <ul>
          <li><a class="nav-link" href="#menu">Menu</a></li>
          <li><a class="nav-link" href="#tentang">Tentang</a></li>
          <li><a class="nav-link" href="#kontak">Lokasi & Kontak</a></li>
          <li><a class="tombol sm" href="#menu">Pesan Menu</a></li>
        </ul>
      </nav>

      <!-- Tombol Hamburger Mobile -->
      <button type="button" class="btn-menu-mobile" id="btn-toggle-menu" aria-label="Buka menu navigasi" aria-expanded="false" aria-controls="mobile-nav">
        <svg id="icon-burger" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="3" y1="12" x2="21" y2="12"></line>
          <line x1="3" y1="6" x2="21" y2="6"></line>
          <line x1="3" y1="18" x2="21" y2="18"></line>
        </svg>
        <svg id="icon-tutup-burger" style="display:none;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="18" y1="6" x2="6" y2="18"></line>
          <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
      </button>
    </div>

    <!-- Mobile Drawer Navigasi -->
    <div id="mobile-nav" class="mobile-drawer" aria-label="Navigasi seluler">
      <div class="mobile-drawer-header">
        <span class="mobile-drawer-label">Navigasi Kedai</span>
      </div>
      <ul class="mobile-nav-list">
        <li>
          <a class="mobile-nav-link" href="#menu">
            <div class="mobile-nav-text">
              <svg class="mobile-nav-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
                <line x1="6" y1="1" x2="6" y2="4"></line>
                <line x1="10" y1="1" x2="10" y2="4"></line>
                <line x1="14" y1="1" x2="14" y2="4"></line>
              </svg>
              <span>Pilihan Menu</span>
            </div>
            <svg class="chevron" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
          </a>
        </li>
        <li>
          <a class="mobile-nav-link" href="#tentang">
            <div class="mobile-nav-text">
              <svg class="mobile-nav-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="12" y1="16" x2="12" y2="12"></line>
                <line x1="12" y1="8" x2="12.01" y2="8"></line>
              </svg>
              <span>Tentang Goodayzer</span>
            </div>
            <svg class="chevron" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
          </a>
        </li>
        <li>
          <a class="mobile-nav-link" href="#kontak">
            <div class="mobile-nav-text">
              <svg class="mobile-nav-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                <circle cx="12" cy="10" r="3"></circle>
              </svg>
              <span>Jam Buka & Lokasi</span>
            </div>
            <svg class="chevron" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
          </a>
        </li>
      </ul>

      <div class="mobile-drawer-aksi">
        <a class="tombol sm" href="#menu">Lihat Menu</a>
        <a class="tombol sm garis" href="https://wa.me/6288230634150" target="_blank" rel="noopener noreferrer">WhatsApp</a>
      </div>

      <div class="mobile-drawer-footer">
        <span>Buka Setiap Hari: 07.00 - 22.00 WIB</span>
      </div>
    </div>
  </header>

  <!-- Backdrop Gelap saat Menu Mobile Terbuka -->
  <div id="mobile-nav-backdrop" class="mobile-backdrop" aria-hidden="true"></div>

  <main id="atas">
    <!-- Hero Section -->
    <section class="hero">
      <div class="wadah hero-isi">
        <div>
          <div class="hero-badge-atas">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10"></circle>
              <polyline points="12 6 12 12 16 14"></polyline>
            </svg>
            <span>Diseduh Segar Setiap Hari</span>
          </div>
          <h1>Secangkir kopi untuk hari yang <span class="aksen-amber">good.</span></h1>
          <p>Goodayzer menyajikan seduhan dari biji kopi pilihan petani Nusantara. Ruangan yang tenang untuk fokus bekerja, ruang bercengkerama bersama sahabat, atau rehat sejenak menikmati aroma kopi.</p>
          <div class="hero-aksi">
            <a class="tombol" href="#menu">
              <span>Lihat Daftar Menu</span>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </a>
            <a class="tombol garis" href="#kontak">Kunjungi Toko</a>
          </div>
        </div>

        <!-- Hero Interactive Showcase Card -->
        <aside class="hero-card" aria-label="Informasi singkat kedai kopi">
          <div class="hero-card-header">
            <h2 class="hero-card-title">Kedai Goodayzer</h2>
            <div id="status-toko-hero" class="status-pill buka" aria-live="polite">
              <span class="dot-pulse" aria-hidden="true"></span>
              <span id="label-status-hero">Buka Sekarang</span>
            </div>
          </div>
          <ul class="hero-card-list">
            <li>
              <span class="icon-kotak" aria-hidden="true">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18a8 8 0 1 1 8-8 8 8 0 0 1-8 8z"></path>
                  <path d="M12 6v6l4 2"></path>
                </svg>
              </span>
              <div>
                <strong>Biji Kopi Pilihan</strong>
                <span>Disangrai berkala untuk menjaga karakter rasa alami.</span>
              </div>
            </li>
            <li>
              <span class="icon-kotak" aria-hidden="true">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12.55a11 11 0 0 1 14.08 0"></path>
                  <path d="M1.42 9a16 16 0 0 1 21.16 0"></path>
                  <path d="M8.53 16.11a6 6 0 0 1 6.95 0"></path>
                  <line x1="12" y1="20" x2="12.01" y2="20"></line>
                </svg>
              </span>
              <div>
                <strong>Wi-Fi Cepat & Colokan</strong>
                <span>Koneksi lancar untuk kerja remote, tugas, atau meeting santai.</span>
              </div>
            </li>
            <li>
              <span class="icon-kotak" aria-hidden="true">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                  <circle cx="12" cy="7" r="4"></circle>
                </svg>
              </span>
              <div>
                <strong>Barista Bersahabat</strong>
                <span>Minuman diracik dengan teliti sesuai seleramu.</span>
              </div>
            </li>
          </ul>
          <div class="hero-card-footer">
            <span class="hero-card-jam">Senin – Minggu: 07.00 – 22.00</span>
            <div class="hero-view-stat" title="Total tayangan website (Page View Counter)">
              <svg class="icon-eye-views" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                <circle cx="12" cy="12" r="3"></circle>
              </svg>
              <span><strong><?= number_format($total_kunjungan, 0, ',', '.') ?></strong> views</span>
            </div>
          </div>
        </aside>
      </div>
    </section>

    <!-- Menu Section -->
    <section id="menu" class="bg-surface">
      <div class="wadah">
        <h2>Menu Favorit Goodayzer</h2>
        <p class="pengantar">Pilih kategori atau ketik nama minuman dan camilan untuk menemukan racikan favoritmu hari ini.</p>

        <!-- Menu Interactive Controls: Search & Category Filter -->
        <div class="menu-controls">
          <div class="search-box-wrapper">
            <svg class="search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="11" cy="11" r="8"></circle>
              <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg>
            <input type="search" id="input-cari-menu" class="input-cari" placeholder="Cari nama kopi, latte, atau camilan..." autocomplete="off" aria-label="Cari menu kopi atau makanan">
            <button type="button" id="btn-hapus-cari" class="btn-clear-search" aria-label="Bersihkan pencarian">&times;</button>
          </div>

          <div class="filter-tabs" role="group" aria-label="Filter kategori menu">
            <?php foreach ($kategori as $kunci => $label): ?>
              <button type="button" class="filter-tab" data-kategori="<?= e($kunci) ?>" aria-pressed="<?= $kunci === 'semua' ? 'true' : 'false' ?>">
                <span><?= e($label) ?></span>
                <span class="badge-count"><?= $hitung_kategori[$kunci] ?? 0 ?></span>
              </button>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Filter Count Info -->
        <div class="filter-info-bar">
          <span id="info-jumlah-menu" aria-live="polite">Menampilkan <?= count($menu) ?> menu</span>
          <span id="petunjuk-klik" style="font-size: 0.85rem;">Klik tombol "Detail & Pesan" pada menu</span>
        </div>

        <!-- Daftar Menu Grid -->
        <div class="daftar-menu" id="wadah-daftar-menu">
          <?php foreach ($menu as $item): ?>
            <article class="item-menu"
                     data-kategori="<?= e($item['kategori']) ?>"
                     data-nama="<?= e($item['nama']) ?>"
                     data-harga="<?= (int)$item['harga'] ?>"
                     data-harga-format="<?= e(rupiah($item['harga'])) ?>"
                     data-deskripsi="<?= e($item['deskripsi']) ?>"
                     data-gambar="<?= !empty($item['gambar']) ? e($item['gambar']) : '' ?>"
                     data-favorit="<?= !empty($item['favorit']) ? 'true' : 'false' ?>">
              
              <?php if (!empty($item['gambar'])): ?>
                <div class="item-visual">
                  <img class="item-foto" src="<?= e($item['gambar']) ?>" alt="<?= e($item['nama']) ?>" loading="lazy" width="360" height="270">
                  <?php if (!empty($item['favorit'])): ?>
                    <span class="badge-favorit-foto">★ Andalan</span>
                  <?php endif; ?>
                </div>
              <?php endif; ?>

              <div class="item-isi">
                <div>
                  <div class="item-header">
                    <h3><?= e($item['nama']) ?></h3>
                    <span class="item-harga"><?= rupiah($item['harga']) ?></span>
                  </div>
                  <p class="item-deskripsi"><?= e($item['deskripsi']) ?></p>
                </div>

                <div class="item-meta">
                  <div class="item-tags">
                    <span class="tag-kategori"><?= e($item['kategori']) ?></span>
                    <?php if (!empty($item['favorit']) && empty($item['gambar'])): ?>
                      <span class="tag-favorit">Andalan</span>
                    <?php endif; ?>
                  </div>
                  <button type="button" class="btn-detail-item" aria-label="Detail dan pesan <?= e($item['nama']) ?>">
                    Detail & Pesan
                  </button>
                </div>
              </div>
            </article>
          <?php endforeach; ?>
        </div>

        <!-- Empty State ketika pencarian tidak ditemukan -->
        <div id="state-menu-kosong" class="state-kosong" aria-live="polite">
          <div class="state-kosong-icon" aria-hidden="true">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="11" cy="11" r="8"></circle>
              <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
              <line x1="8" y1="11" x2="14" y2="11"></line>
            </svg>
          </div>
          <h3>Menu Tidak Ditemukan</h3>
          <p id="teks-kata-kunci-kosong">Tidak ada menu yang sesuai dengan kata kunci pencarian Anda.</p>
          <button type="button" class="tombol sm" id="btn-reset-pencarian">Reset Pencarian & Tampilkan Semua</button>
        </div>
      </div>
    </section>

    <!-- Modal Dialog Detail Menu & Pesan via WhatsApp (Native <dialog>) -->
    <dialog id="dialog-detail-menu" class="modal-menu" aria-labelledby="modal-judul-menu">
      <div id="modal-visual-wadah" class="modal-visual" style="display:none;">
        <img id="modal-foto-menu" class="modal-foto" src="" alt="" loading="lazy">
      </div>
      <div class="modal-content">
        <div class="modal-top">
          <div>
            <span id="modal-tag-kategori" class="tag-kategori" style="margin-bottom: 8px; display: inline-block;">Kopi</span>
            <h3 id="modal-judul-menu">Nama Menu</h3>
          </div>
          <button type="button" class="btn-tutup-modal" id="btn-tutup-dialog" aria-label="Tutup jendela informasi menu">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <line x1="18" y1="6" x2="6" y2="18"></line>
              <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
          </button>
        </div>

        <div id="modal-harga-menu" class="modal-harga">Rp 0</div>
        <p id="modal-deskripsi-menu" class="modal-deskripsi">Deskripsi menu lengkap.</p>

        <!-- Opsi Suhu / Penyajian -->
        <div class="modal-opsi" id="modal-opsi-suhu-wadah">
          <span class="modal-opsi-label">Pilihan Penyajian:</span>
          <div class="opsi-suhu" role="radiogroup" aria-label="Pilihan suhu">
            <button type="button" class="btn-opsi-suhu aktif" data-suhu="Dingin / Es" aria-checked="true" role="radio">Dingin / Es</button>
            <button type="button" class="btn-opsi-suhu" data-suhu="Panas" aria-checked="false" role="radio">Hangat / Panas</button>
          </div>
        </div>

        <!-- Input Jumlah Pesanan -->
        <div class="modal-opsi" id="modal-opsi-jumlah-wadah">
          <div class="modal-jumlah-header">
            <label for="input-jumlah-pesanan" class="modal-opsi-label" style="margin-bottom: 0;">Jumlah Pesanan:</label>
            <span id="modal-subtotal-teks" class="modal-subtotal">Total: Rp 0</span>
          </div>
          <div class="stepper-jumlah">
            <button type="button" class="btn-stepper" id="btn-kurang-jumlah" aria-label="Kurangi jumlah porsi">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"></line>
              </svg>
            </button>
            <input type="number" id="input-jumlah-pesanan" class="input-jumlah" value="1" min="1" max="99" step="1" inputmode="numeric" aria-label="Jumlah pesanan">
            <button type="button" class="btn-stepper" id="btn-tambah-jumlah" aria-label="Tambah jumlah porsi">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="12" y1="5" x2="12" y2="19"></line>
                <line x1="5" y1="12" x2="19" y2="12"></line>
              </svg>
            </button>
          </div>
        </div>

        <div class="modal-aksi">
          <a id="btn-wa-pesan" class="tombol" href="#" target="_blank" rel="noopener noreferrer">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
            </svg>
            <span id="btn-wa-pesan-label">Pesan via WhatsApp</span>
          </a>
        </div>
      </div>
    </dialog>

    <!-- Tentang Section -->
    <section id="tentang">
      <div class="wadah tentang">
        <div>
          <h2>Tempat santai dengan kopi yang serius.</h2>
          <div class="tentang-narasi">
            <p>Goodayzer lahir dari keyakinan sederhana: secangkir kopi yang nikmat memiliki kekuatan untuk mengubah hari biasa menjadi hari yang penuh semangat.</p>
            <p>Kami bermitra dengan petani lokal untuk memastikan pasokan biji kopi berkualitas tinggi, kemudian mengolahnya dengan penuh presisi pada setiap cangkir yang disajikan.</p>
          </div>

          <div class="fasilitas-chips">
            <div class="chip">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12.55a11 11 0 0 1 14.08 0"></path>
                <path d="M1.42 9a16 16 0 0 1 21.16 0"></path>
                <path d="M8.53 16.11a6 6 0 0 1 6.95 0"></path>
                <line x1="12" y1="20" x2="12.01" y2="20"></line>
              </svg>
              <span>Wi-Fi Gratis 50 Mbps</span>
            </div>
            <div class="chip">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="2" y="7" width="20" height="15" rx="2" ry="2"></rect>
                <polyline points="17 2 12 7 7 2"></polyline>
              </svg>
              <span>Stopkontak di Meja</span>
            </div>
            <div class="chip">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <path d="M8 12h8"></path>
              </svg>
              <span>Ruangan Ber-AC & Tenang</span>
            </div>
          </div>
        </div>

        <ul class="poin-craft">
          <li class="craft-card">
            <div class="craft-icon" aria-hidden="true">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
              </svg>
            </div>
            <div>
              <h3>Biji Kopi Pilihan Petani Nusantara</h3>
              <p>Dipanggang secara berkala dalam batch kecil agar karakter rasa dan aromanya selalu terjaga prima.</p>
            </div>
          </li>
          <li class="craft-card">
            <div class="craft-icon" aria-hidden="true">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M6 2v14a6 6 0 0 0 12 0V2"></path>
                <line x1="6" y1="6" x2="18" y2="6"></line>
                <line x1="6" y1="10" x2="18" y2="10"></line>
              </svg>
            </div>
            <div>
              <h3>Racikan Presisi dari Barista</h3>
              <p>Setiap cangkir dibuat saat Anda memesan dengan rasio dan suhu air yang terkalibrasi akurat.</p>
            </div>
          </li>
          <li class="craft-card">
            <div class="craft-icon" aria-hidden="true">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                <polyline points="9 22 9 12 15 12 15 22"></polyline>
              </svg>
            </div>
            <div>
              <h3>Suasana Nyaman untuk Setiap Waktu</h3>
              <p>Pilihan tepat untuk bekerja fokus dengan laptop, membaca buku favorit, atau berbagi obrolan hangat.</p>
            </div>
          </li>
        </ul>
      </div>
    </section>

    <!-- Kontak & Lokasi Section -->
    <section id="kontak" class="bg-surface">
      <div class="wadah kontak-grid">
        <!-- Informasi Toko & Jam Operasional -->
        <div class="card-info-kontak">
          <div style="display: flex; justify-content: space-between; align-items: baseline; gap: 12px; margin-bottom: 8px;">
            <h2>Kunjungi Goodayzer</h2>
            <div id="status-toko-kontak" class="status-pill buka">
              <span class="dot-pulse" aria-hidden="true"></span>
              <span id="label-status-kontak">Buka Sekarang</span>
            </div>
          </div>
          <p class="pengantar" style="margin-bottom: 20px;">Kami melayani pesanan santap di tempat, bawa pulang, dan pesan antar via WhatsApp.</p>

          <table class="tabel-jam" aria-label="Jadwal jam buka mingguan">
            <tbody>
              <tr id="baris-hari-1" data-hari="1,2,3,4,5">
                <td>Senin sampai Jumat</td>
                <td>07.00 - 22.00 WIB</td>
              </tr>
              <tr id="baris-hari-6" data-hari="6">
                <td>Sabtu</td>
                <td>08.00 - 23.00 WIB</td>
              </tr>
              <tr id="baris-hari-0" data-hari="0">
                <td>Minggu</td>
                <td>08.00 - 21.00 WIB</td>
              </tr>
            </tbody>
          </table>

          <ul class="kontak-links">
            <li>
              <a class="kontak-item-link" href="https://maps.google.com/?q=Goodayzer+Coffee+Shop" target="_blank" rel="noopener noreferrer">
                <div class="kontak-icon" aria-hidden="true">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                    <circle cx="12" cy="10" r="3"></circle>
                  </svg>
                </div>
                <div class="kontak-teks">
                  <strong>Alamat Kedai</strong>
                  <span>Jl. Kopi Harum No. 12, Pusat Kota (Buka di Maps)</span>
                </div>
              </a>
            </li>
            <li>
              <a class="kontak-item-link" href="https://wa.me/6288230634150?text=Halo%20Goodayzer,%20saya%20ingin%20bertanya%20seputar%20menu%20dan%20reservasi." target="_blank" rel="noopener noreferrer">
                <div class="kontak-icon" aria-hidden="true">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                  </svg>
                </div>
                <div class="kontak-teks">
                  <strong>WhatsApp Resmi</strong>
                  <span>0882-3063-4150 (Layanan cepat)</span>
                </div>
              </a>
            </li>
            <li>
              <a class="kontak-item-link" href="https://instagram.com/goodayzer" target="_blank" rel="noopener noreferrer">
                <div class="kontak-icon" aria-hidden="true">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                  </svg>
                </div>
                <div class="kontak-teks">
                  <strong>Instagram</strong>
                  <span>@goodayzer (Update menu & promo)</span>
                </div>
              </a>
            </li>
          </ul>
        </div>

        <!-- Form Kirim Pesan -->
        <div class="form-card">
          <h2>Kirim Pesan atau Pertanyaan</h2>
          <p class="pengantar" style="margin-bottom: 22px;">Ingin reservasi meja kerja, pesan katering acara, atau saran? Kirimkan pesan di bawah ini.</p>

          <form id="form-pesan" method="post" action="#kontak" novalidate>
            <div class="form-group">
              <label for="nama">Nama Lengkap</label>
              <input id="nama" name="nama" type="text" autocomplete="name" value="<?= e($nilai['nama']) ?>" placeholder="Misal: Andi Wijaya" required>
            </div>

            <div class="form-group">
              <label for="email">Alamat Email</label>
              <input id="email" name="email" type="email" autocomplete="email" value="<?= e($nilai['email']) ?>" placeholder="nama@email.com" required>
            </div>

            <div class="form-group">
              <label for="pesan">Pesan atau Kebutuhan Anda</label>
              <textarea id="pesan" name="pesan" placeholder="Tuliskan pertanyaan, reservasi, atau kebutuhan Anda..." required><?= e($nilai['pesan']) ?></textarea>
            </div>

            <button class="tombol" type="submit" id="btn-submit-pesan" style="width: 100%;">
              <span>Kirim Pesan Sekarang</span>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="22" y1="2" x2="11" y2="13"></line>
                <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
              </svg>
            </button>

            <?php if (!empty($status)): ?>
              <p id="status" class="<?= strpos($status, 'Terima kasih') !== false ? 'sukses' : 'error' ?>" role="status" aria-live="polite">
                <?= e($status) ?>
              </p>
            <?php else: ?>
              <p id="status" role="status" aria-live="polite"></p>
            <?php endif; ?>
          </form>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer>
    <div class="wadah">
      <div class="footer-atas">
        <div>
          <a class="logo" href="#atas" aria-label="Goodayzer, kembali ke atas">
            <span class="logo-icon" aria-hidden="true">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
                <line x1="6" y1="1" x2="6" y2="4"></line>
                <line x1="10" y1="1" x2="10" y2="4"></line>
                <line x1="14" y1="1" x2="14" y2="4"></line>
              </svg>
            </span>
            <span>Goodayzer</span>
          </a>
          <p class="footer-bio">Kedai kopi ramah dengan racikan biji kopi Nusantara pilihan, tempat santai untuk berkarya dan berbagi cerita.</p>
        </div>

        <nav aria-label="Navigasi footer">
          <ul class="footer-nav">
            <li><a href="#menu">Daftar Menu</a></li>
            <li><a href="#tentang">Tentang Kami</a></li>
            <li><a href="#kontak">Jam Buka & Kontak</a></li>
            <li><a href="https://wa.me/6288230634150" target="_blank" rel="noopener noreferrer">Pesan Antar</a></li>
          </ul>
        </nav>
      </div>

      <div class="footer-bawah">
        <small>&copy; <?= date('Y') ?> Goodayzer Coffee Shop. Semua hak cipta dilindungi.</small>

        <!-- Page View Counter (Fitur PHP Native) -->
        <div class="footer-counter" title="Total akumulasi tayangan halaman website (PHP Page View Counter)">
          <span class="counter-label">Page View Counter:</span>
          <div class="counter-pill">
            <svg class="counter-icon" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
              <circle cx="12" cy="12" r="3"></circle>
            </svg>
            <strong><?= number_format($total_kunjungan, 0, ',', '.') ?></strong>
            <span class="counter-unit">Views</span>
          </div>
        </div>

        <a href="#atas" class="btn-kembali-atas">
          <span>Kembali ke atas</span>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="18 15 12 9 6 15"></polyline>
          </svg>
        </a>
      </div>
    </div>
  </footer>

  <!-- ==========================================================================
       Interactivity Script
       ========================================================================== -->
  <script>
    (function () {
      'use strict';

      // 1. Sticky Header Elevation on Scroll
      const header = document.getElementById('header-utama');
      window.addEventListener('scroll', function () {
        if (window.scrollY > 20) {
          header.classList.add('scrolled');
        } else {
          header.classList.remove('scrolled');
        }
      }, { passive: true });

      // 2. Mobile Menu Drawer Toggle dengan Backdrop & Scroll Lock
      const btnToggleMenu = document.getElementById('btn-toggle-menu');
      const mobileNav = document.getElementById('mobile-nav');
      const mobileBackdrop = document.getElementById('mobile-nav-backdrop');
      const iconBurger = document.getElementById('icon-burger');
      const iconTutupBurger = document.getElementById('icon-tutup-burger');

      function aturMenuMobile(buka) {
        btnToggleMenu.setAttribute('aria-expanded', String(buka));
        if (buka) {
          mobileNav.classList.add('buka');
          if (mobileBackdrop) mobileBackdrop.classList.add('aktif');
          document.body.classList.add('menu-terbuka');
          iconBurger.style.display = 'none';
          iconTutupBurger.style.display = 'block';
        } else {
          mobileNav.classList.remove('buka');
          if (mobileBackdrop) mobileBackdrop.classList.remove('aktif');
          document.body.classList.remove('menu-terbuka');
          iconBurger.style.display = 'block';
          iconTutupBurger.style.display = 'none';
        }
      }

      btnToggleMenu.addEventListener('click', function () {
        const isOpen = btnToggleMenu.getAttribute('aria-expanded') === 'true';
        aturMenuMobile(!isOpen);
      });

      if (mobileBackdrop) {
        mobileBackdrop.addEventListener('click', function () {
          aturMenuMobile(false);
        });
      }

      document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && btnToggleMenu.getAttribute('aria-expanded') === 'true') {
          aturMenuMobile(false);
        }
      });

      // Tutup drawer ketika link navigasi diklik
      mobileNav.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', function () {
          aturMenuMobile(false);
        });
      });

      // 3. Live Search & Category Filtering
      const inputCari = document.getElementById('input-cari-menu');
      const btnHapusCari = document.getElementById('btn-hapus-cari');
      const tombolFilter = document.querySelectorAll('.filter-tab');
      const daftarKartu = document.querySelectorAll('.daftar-menu .item-menu');
      const infoJumlah = document.getElementById('info-jumlah-menu');
      const stateKosong = document.getElementById('state-menu-kosong');
      const teksKataKunciKosong = document.getElementById('teks-kata-kunci-kosong');
      const btnResetPencarian = document.getElementById('btn-reset-pencarian');

      let kategoriAktif = 'semua';
      let kataKunci = '';

      function terapkanFilter() {
        let jumlahTampil = 0;
        const query = kataKunci.trim().toLowerCase();

        daftarKartu.forEach(function (kartu) {
          const kategoriItem = kartu.dataset.kategori;
          const namaItem = (kartu.dataset.nama || '').toLowerCase();
          const deskripsiItem = (kartu.dataset.deskripsi || '').toLowerCase();

          const cocokKategori = (kategoriAktif === 'semua' || kategoriItem === kategoriAktif);
          const cocokPencarian = (query === '' || namaItem.includes(query) || deskripsiItem.includes(query));

          if (cocokKategori && cocokPencarian) {
            kartu.hidden = false;
            jumlahTampil++;
          } else {
            kartu.hidden = true;
          }
        });

        // Update informasi jumlah
        infoJumlah.textContent = 'Menampilkan ' + jumlahTampil + ' dari ' + daftarKartu.length + ' menu';

        // Tampilkan atau sembunyikan empty state
        if (jumlahTampil === 0) {
          stateKosong.classList.add('tampil');
          if (query !== '') {
            teksKataKunciKosong.textContent = 'Tidak ada menu yang sesuai dengan kata kunci "' + kataKunci + '".';
          } else {
            teksKataKunciKosong.textContent = 'Tidak ada menu pada kategori ini.';
          }
        } else {
          stateKosong.classList.remove('tampil');
        }

        // Tampilkan atau sembunyikan tombol clear search
        if (query.length > 0) {
          btnHapusCari.style.display = 'flex';
        } else {
          btnHapusCari.style.display = 'none';
        }
      }

      // Event listener tombol filter kategori
      tombolFilter.forEach(function (tombol) {
        tombol.addEventListener('click', function () {
          kategoriAktif = tombol.dataset.kategori;
          tombolFilter.forEach(function (t) {
            t.setAttribute('aria-pressed', String(t === tombol));
          });
          terapkanFilter();
        });
      });

      // Event listener input live search
      inputCari.addEventListener('input', function () {
        kataKunci = inputCari.value;
        terapkanFilter();
      });

      btnHapusCari.addEventListener('click', function () {
        inputCari.value = '';
        kataKunci = '';
        inputCari.focus();
        terapkanFilter();
      });

      btnResetPencarian.addEventListener('click', function () {
        inputCari.value = '';
        kataKunci = '';
        kategoriAktif = 'semua';
        tombolFilter.forEach(function (t) {
          t.setAttribute('aria-pressed', String(t.dataset.kategori === 'semua'));
        });
        terapkanFilter();
      });

      const modalVisualWadah = document.getElementById('modal-visual-wadah');
      const modalFoto = document.getElementById('modal-foto-menu');
      const dialogMenu = document.getElementById('dialog-detail-menu');
      const btnTutupDialog = document.getElementById('btn-tutup-dialog');
      const modalJudul = document.getElementById('modal-judul-menu');
      const modalTagKategori = document.getElementById('modal-tag-kategori');
      const modalHarga = document.getElementById('modal-harga-menu');
      const modalDeskripsi = document.getElementById('modal-deskripsi-menu');
      const modalOpsiSuhuWadah = document.getElementById('modal-opsi-suhu-wadah');
      const btnOpsiSuhu = document.querySelectorAll('.btn-opsi-suhu');
      const btnWaPesan = document.getElementById('btn-wa-pesan');
      const btnWaPesanLabel = document.getElementById('btn-wa-pesan-label');
      const inputJumlahPesanan = document.getElementById('input-jumlah-pesanan');
      const btnKurangJumlah = document.getElementById('btn-kurang-jumlah');
      const btnTambahJumlah = document.getElementById('btn-tambah-jumlah');
      const modalSubtotalTeks = document.getElementById('modal-subtotal-teks');

      let itemAktif = null;
      let suhuTerpilih = 'Dingin / Es';
      let jumlahTerpilih = 1;

      function formatRupiahJs(angka) {
        return 'Rp ' + Number(angka).toLocaleString('id-ID');
      }

      function aturOpsiSuhu(suhu) {
        suhuTerpilih = suhu;
        btnOpsiSuhu.forEach(function (btn) {
          const aktif = (btn.dataset.suhu === suhu);
          btn.classList.toggle('aktif', aktif);
          btn.setAttribute('aria-checked', String(aktif));
        });
        perbaruiTautanWa();
      }

      btnOpsiSuhu.forEach(function (btn) {
        btn.addEventListener('click', function () {
          aturOpsiSuhu(btn.dataset.suhu);
        });
      });

      function aturJumlah(val) {
        let n = parseInt(val, 10);
        if (isNaN(n) || n < 1) n = 1;
        if (n > 99) n = 99;
        jumlahTerpilih = n;
        if (inputJumlahPesanan) {
          inputJumlahPesanan.value = n;
        }
        if (btnKurangJumlah) {
          btnKurangJumlah.disabled = (n <= 1);
        }
        perbaruiTautanWa();
      }

      if (btnKurangJumlah) {
        btnKurangJumlah.addEventListener('click', function () {
          aturJumlah(parseInt(inputJumlahPesanan.value, 10) - 1);
        });
      }

      if (btnTambahJumlah) {
        btnTambahJumlah.addEventListener('click', function () {
          aturJumlah(parseInt(inputJumlahPesanan.value, 10) + 1);
        });
      }

      if (inputJumlahPesanan) {
        inputJumlahPesanan.addEventListener('input', function () {
          let val = inputJumlahPesanan.value.replace(/\D/g, '');
          if (val === '') return;
          aturJumlah(val);
        });
        inputJumlahPesanan.addEventListener('change', function () {
          if (!inputJumlahPesanan.value || parseInt(inputJumlahPesanan.value, 10) < 1) {
            aturJumlah(1);
          }
        });
      }

      function perbaruiTautanWa() {
        if (!itemAktif) return;
        const noWa = '6288230634150';
        let catatanSuhu = '';
        if (itemAktif.kategori === 'kopi' || itemAktif.kategori === 'non-kopi') {
          catatanSuhu = ' (Penyajian: ' + suhuTerpilih + ')';
        }

        const jumlah = Math.max(1, parseInt(inputJumlahPesanan ? inputJumlahPesanan.value : '1', 10) || 1);
        const subtotal = (itemAktif.harga || 0) * jumlah;
        const subtotalFormat = formatRupiahJs(subtotal);

        if (modalSubtotalTeks) {
          modalSubtotalTeks.textContent = 'Total: ' + subtotalFormat;
        }

        const teksPorsi = jumlah > 1 ? jumlah + ' porsi ' : '1 porsi ';
        const pesan = 'Halo Goodayzer, saya ingin memesan ' + teksPorsi + itemAktif.nama + catatanSuhu + ' - Total: ' + subtotalFormat + '. Apakah saat ini tersedia?';
        const urlWa = 'https://wa.me/' + noWa + '?text=' + encodeURIComponent(pesan);

        if (btnWaPesan) {
          btnWaPesan.href = urlWa;
        }
        if (btnWaPesanLabel) {
          btnWaPesanLabel.textContent = 'Pesan via WhatsApp (' + jumlah + ' porsi)';
        }
      }

      function bukaDetailMenu(kartu) {
        itemAktif = {
          nama: kartu.dataset.nama,
          harga: parseInt(kartu.dataset.harga, 10) || 0,
          hargaFormat: kartu.dataset.hargaFormat,
          kategori: kartu.dataset.kategori,
          deskripsi: kartu.dataset.deskripsi,
          gambar: kartu.dataset.gambar || ''
        };

        modalJudul.textContent = itemAktif.nama;
        modalTagKategori.textContent = itemAktif.kategori;
        modalHarga.textContent = itemAktif.hargaFormat;
        modalDeskripsi.textContent = itemAktif.deskripsi;

        // Reset jumlah pesanan ke 1
        aturJumlah(1);

        // Reset suhu default (Panas jika nama mengandung kata 'panas', selain itu Dingin / Es)
        const defaultSuhu = itemAktif.nama.toLowerCase().includes('panas') ? 'Panas' : 'Dingin / Es';
        aturOpsiSuhu(defaultSuhu);

        if (modalVisualWadah && modalFoto) {
          if (itemAktif.gambar) {
            modalFoto.src = itemAktif.gambar;
            modalFoto.alt = itemAktif.nama;
            modalVisualWadah.style.display = 'block';
          } else {
            modalVisualWadah.style.display = 'none';
          }
        }

        // Tampilkan pilihan suhu hanya untuk kategori minuman
        if (itemAktif.kategori === 'camilan') {
          modalOpsiSuhuWadah.style.display = 'none';
        } else {
          modalOpsiSuhuWadah.style.display = 'block';
        }

        perbaruiTautanWa();

        if (typeof dialogMenu.showModal === 'function') {
          dialogMenu.showModal();
        } else {
          dialogMenu.setAttribute('open', '');
        }
      }

      daftarKartu.forEach(function (kartu) {
        const btnDetail = kartu.querySelector('.btn-detail-item');
        if (btnDetail) {
          btnDetail.addEventListener('click', function (e) {
            e.stopPropagation();
            bukaDetailMenu(kartu);
          });
        }
        kartu.addEventListener('click', function () {
          bukaDetailMenu(kartu);
        });
      });

      function tutupDialog() {
        if (typeof dialogMenu.close === 'function') {
          dialogMenu.close();
        } else {
          dialogMenu.removeAttribute('open');
        }
      }

      btnTutupDialog.addEventListener('click', tutupDialog);

      // Tutup jika klik backdrop
      dialogMenu.addEventListener('click', function (e) {
        const rect = dialogMenu.getBoundingClientRect();
        const klikDiDalam = (
          e.clientX >= rect.left &&
          e.clientX <= rect.right &&
          e.clientY >= rect.top &&
          e.clientY <= rect.bottom
        );
        if (!klikDiDalam) {
          tutupDialog();
        }
      });

      // 5. Hitung Status Jam Operasional Toko Secara Otomatis
      function perbaruiStatusToko() {
        const sekarang = new Date();
        const hari = sekarang.getDay(); // 0 = Minggu, 1-5 = Senin-Jumat, 6 = Sabtu
        const jam = sekarang.getHours();
        const menit = sekarang.getMinutes();
        const waktuDesimal = jam + (menit / 60);

        let buka = 7;
        let tutup = 22;

        if (hari === 6) { // Sabtu
          buka = 8;
          tutup = 23;
        } else if (hari === 0) { // Minggu
          buka = 8;
          tutup = 21;
        }

        const sedangBuka = waktuDesimal >= buka && waktuDesimal < tutup;

        const pillHero = document.getElementById('status-toko-hero');
        const labelHero = document.getElementById('label-status-hero');
        const pillKontak = document.getElementById('status-toko-kontak');
        const labelKontak = document.getElementById('label-status-kontak');

        const teksStatus = sedangBuka
          ? 'Buka Sekarang (Tutup ' + tutup + '.00)'
          : 'Tutup Sementara (Buka ' + buka + '.00)';

        if (pillHero && labelHero) {
          pillHero.className = 'status-pill ' + (sedangBuka ? 'buka' : 'tutup');
          labelHero.textContent = teksStatus;
        }

        if (pillKontak && labelKontak) {
          pillKontak.className = 'status-pill ' + (sedangBuka ? 'buka' : 'tutup');
          labelKontak.textContent = teksStatus;
        }

        // Beri sorotan pada baris tabel hari ini
        const barisJadwal = document.querySelectorAll('.tabel-jam tbody tr');
        barisJadwal.forEach(function (baris) {
          const daftarHari = (baris.dataset.hari || '').split(',').map(Number);
          if (daftarHari.includes(hari)) {
            baris.classList.add('hari-ini');
          } else {
            baris.classList.remove('hari-ini');
          }
        });
      }

      perbaruiStatusToko();

      // 6. Validasi Form Kontak Interaktif
      const formPesan = document.getElementById('form-pesan');
      const inputNama = document.getElementById('nama');
      const inputEmail = document.getElementById('email');
      const inputPesan = document.getElementById('pesan');
      const statusPesan = document.getElementById('status');

      if (formPesan) {
        formPesan.addEventListener('submit', function (e) {
          const nama = inputNama.value.trim();
          const email = inputEmail.value.trim();
          const pesan = inputPesan.value.trim();
          const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

          if (nama === '' || email === '' || pesan === '') {
            e.preventDefault();
            statusPesan.className = 'error';
            statusPesan.textContent = 'Silakan lengkapi nama, email, dan pesan Anda sebelum mengirim.';
            if (nama === '') inputNama.focus();
            else if (email === '') inputEmail.focus();
            else inputPesan.focus();
            return false;
          }

          if (!emailRegex.test(email)) {
            e.preventDefault();
            statusPesan.className = 'error';
            statusPesan.textContent = 'Format alamat email belum valid. Mohon periksa kembali.';
            inputEmail.focus();
            return false;
          }
        });
      }
    })();
  </script>
</body>
</html>