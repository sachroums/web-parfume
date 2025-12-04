<div class="detail-container">

    <div class="news-title"><?= $pengumuman->judul ?></div>
    <div class="news-date"><?= $pengumuman->tanggal ?></div>

    <img class="news-img" src="<?= base_url('uploads/pengumuman/'.$pengumuman->gambar) ?>" alt="">

    <div class="news-content">
        <?= nl2br($pengumuman->isi) ?>
    </div>

    <a class="back-btn" href="<?= site_url('pengumumanproduk') ?>">← Kembali ke Berita</a>

</div>
