<div class="detail-container">

    <div class="news-title"><?= $berita->judul ?></div>
    <div class="news-date"><?= $berita->tanggal ?></div>

    <img class="news-img" src="<?= base_url('uploads/berita/' . $berita->gambar) ?>" alt="">

    <div class="news-content">
        <?= nl2br($berita->isi) ?>
    </div>

    <a class="back-btn" href="<?= site_url('beritaproduk') ?>">← Kembali ke Berita</a>

</div>
