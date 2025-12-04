<?php $this->load->view('templates/home_header'); ?>
<main class="container py-5">
  <h1 style="color:#c2185b;"><?= htmlspecialchars($pengumuman->judul) ?></h1>
  <p class="text-muted"><?= date('d M Y', strtotime($pengumuman->tanggal)) ?></p>

  <?php if($pengumuman->gambar): ?>
    <img src="<?= base_url('uploads/pengumuman/'.$pengumuman->gambar) ?>" class="img-fluid mb-3" style="border-radius:10px;">
  <?php endif; ?>

  <div><?= nl2br(htmlspecialchars($pengumuman->isi)) ?></div>

  <?php if($pengumuman->video): ?>
  <div class="mt-4">
    <video controls style="width:100%; border-radius:8px;">
      <source src="<?= base_url('uploads/pengumuman/'.$pengumuman->video) ?>" type="video/mp4">
    </video>
  </div>
  <?php endif; ?>

</main>
<?php $this->load->view('templates/home_footer'); ?>
