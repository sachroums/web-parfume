<?php $this->load->view('templates/home_header'); ?>
<main class="container py-5">
  <h1 style="color:#c2185b;"><?= htmlspecialchars($berita->judul) ?></h1>
  <p class="text-muted"><?= date('d M Y', strtotime($berita->tanggal)) ?></p>
  <?php if($berita->gambar): ?>
    <img src="<?= base_url('uploads/berita/'.$berita->gambar) ?>" class="img-fluid mb-3" style="border-radius:10px;">
  <?php endif; ?>
  <div><?= nl2br(htmlspecialchars($berita->isi)) ?></div>
</main>
<?php $this->load->view('templates/home_footer'); ?>
