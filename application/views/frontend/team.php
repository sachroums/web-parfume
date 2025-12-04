<section class="team section">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <span class="description-title">Our Creative Team</span>
      <h2>Meet the People Behind Sérén.</h2>
      <p>Tim profesional yang menciptakan keharuman elegan dan pengalaman istimewa untukmu.</p>
    </div>

    <div class="row gy-5">

      <?php foreach ($team as $t): ?>
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="150">
        <div class="team-card">
          <img src="<?= base_url('uploads/team/'.$t->foto) ?>" class="img-fluid team-img" alt="">
          <h4><?= $t->nama ?></h4>
          <span class="team-role"><?= $t->jabatan ?></span>
          <p><?= $t->deskripsi ?></p>
        </div>
      </div>
      <?php endforeach; ?>

    </div>

  </div>
</section>
