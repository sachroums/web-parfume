<div class="card shadow-sm mb-4">
  <img src="<?= base_url('uploads/'.$b->gambar) ?>" class="card-img-top" style="height:400px; object-fit:cover;">
  <div class="card-body">
    <h2><?= $b->judul ?></h2>
    <small><?= date('d M Y', strtotime($b->tanggal)) ?> | <?= $b->penulis ?></small>
    <hr>
    <p><?= nl2br($b->isi) ?></p>
  </div>
</div>
<a href="<?= site_url('home') ?>" class="btn btn-secondary">Kembali ke Beranda</a>
