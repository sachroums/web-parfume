<?php $this->load->view('templates/home_header'); ?>

<style>
:root {
  --bg-soft: #fff5f8;
  --card-pink: #fff0f4;
  --brand-pink: #c2185b;
  --accent: #d17c9f;
}
.informasi-hero { background: var(--bg-soft); padding:40px 0; text-align:center; }
.card-news { background: white; border-radius:12px; box-shadow:0 6px 20px rgba(0,0,0,0.06); overflow:hidden; }
.pengumuman-card { background: #fff; border-left:6px solid var(--accent); padding:18px; border-radius:10px; box-shadow:0 4px 12px rgba(0,0,0,0.04); }
</style>

<main class="container py-5">
  <div class="informasi-hero mb-4">
    <h1 style="color:var(--brand-pink); font-weight:700;">Informasi</h1>
    <p>Berita produk, event, dan pengumuman terbaru dari Sérén Parfume.</p>
  </div>

  <div class="row">
    <div class="col-lg-8">
      <h4 style="color:var(--accent)">Berita Terbaru</h4>
      <div class="row">
        <?php if (empty($berita)): ?>
          <div class="col-12"><div class="card-news p-4"><em>Belum ada berita.</em></div></div>
        <?php endif; ?>
        <?php foreach($berita as $b): ?>
        <div class="col-md-6 mb-4">
          <div class="card-news">
            <?php if($b->gambar): ?>
            <img src="<?= base_url('uploads/berita/'.$b->gambar) ?>" class="img-fluid" style="height:200px; width:100%; object-fit:cover;">
            <?php endif; ?>
            <div class="p-3">
              <h5 style="color:var(--brand-pink)"><?= htmlspecialchars($b->judul) ?></h5>
              <p class="text-muted"><?= date('d M Y', strtotime($b->tanggal)) ?></p>
              <p><?= word_limiter(strip_tags($b->isi), 20) ?></p>
              <a href="<?= site_url('informasi/berita/'.$b->id) ?>" class="btn btn-sm" style="background:var(--accent); color:white;">Baca</a>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="col-lg-4">
      <h4 style="color:var(--accent)">Pengumuman</h4>
      <?php if (empty($pengumuman)): ?>
        <div class="pengumuman-card"><em>Belum ada pengumuman.</em></div>
      <?php endif; ?>
      <?php foreach($pengumuman as $p): ?>
      <div class="pengumuman-card mb-3">
        <h6 style="color:var(--brand-pink);"><?= htmlspecialchars($p->judul) ?></h6>
        <small class="text-muted"><?= date('d M Y', strtotime($p->tanggal)) ?></small>
        <p class="mt-2"><?= word_limiter(strip_tags($p->isi), 30) ?></p>

        <?php if($p->video): ?>
        <div class="mt-2">
          <video controls style="width:100%; border-radius:8px;">
            <source src="<?= base_url('uploads/pengumuman/'.$p->video) ?>" type="video/mp4">
          </video>
        </div>
        <?php endif; ?>

        <a href="<?= site_url('informasi/pengumuman/'.$p->id) ?>" class="btn btn-sm mt-2" style="background:var(--accent); color:white;">Lihat</a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</main>

<?php $this->load->view('templates/home_footer'); ?>
