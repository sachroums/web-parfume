<div class="catalog-container">

    <h1>Pengumuman Terbaru Sérén - Parfume</h1>

    <div class="news-grid">
        <?php foreach ($pengumuman as $p): ?>
        <div class="news-item">

            <a href="<?= site_url('pengumuman/detail_pengumuman/'.$p->id) ?>">
                <img src="<?= base_url('uploads/pengumuman/'.$p->gambar) ?>" alt="">
            </a>

            <div class="news-title"><?= $p->judul ?></div>

            <a class="news-readmore" href="<?= site_url('pengumuman/detail_pengumuman/'.$p->id) ?>">
                Baca Selengkapnya
            </a>

        </div>
        <?php endforeach; ?>
    </div>

</div>
