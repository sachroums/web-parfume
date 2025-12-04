<div class="catalog-container">

    <h1>Berita Terbaru Sérén - Parfume</h1>

    <div class="news-grid">
        <?php foreach ($berita as $b): ?>
        <div class="news-card">

            <a href="<?= site_url('berita/detail/'.$b->id) ?>">
                <img src="<?= base_url('uploads/berita/'.$b->gambar) ?>" alt="">
            </a>

            <div class="news-title"><?= $b->judul ?></div>

            <a class="news-readmore" href="<?= site_url('berita/detail/'.$b->id) ?>">
                Baca Selengkapnya
            </a>

        </div>
        <?php endforeach; ?>
    </div>

</div>
