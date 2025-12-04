<main class="main">

<section class="services section" style="background:#fff7fa; padding:60px 0;">

    <div class="container section-title" data-aos="fade-up">
        <span class="description-title">Layanan Kami</span>
        <h2>Layanan Eksklusif Sérén</h2>
        <p>Nikmati pengalaman parfum premium melalui layanan khusus yang dirancang untuk kenyamanan dan kebutuhanmu.</p>
    </div>

    <div class="container">
        <div class="row gy-4">

            <?php foreach ($layanan as $l): ?>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="150">

                <div class="service-card" 
                     style="background:white; padding:25px; border-radius:15px; 
                     box-shadow:0 4px 15px rgba(0,0,0,0.05); transition:0.3s; text-align:center;">
                    
                    <!-- ICON -->
                    <?php if ($l->icon): ?>
                    <div class="icon mb-3">
                        <i class="<?= $l->icon ?>" 
                           style="font-size:40px; color:#c2185b;"></i>
                    </div>
                    <?php endif; ?>

                    <!-- GAMBAR -->
                    <?php if ($l->gambar): ?>
                    <div class="mb-3">
                        <img src="<?= base_url('uploads/layanan/'.$l->gambar) ?>" 
                             style="width:100%; border-radius:10px;">
                    </div>
                    <?php endif; ?>

                    <!-- NAMA -->
                    <h4 style="color:#c2185b; font-weight:bold;"><?= $l->judul ?></h4>

                    <!-- DESKRIPSI -->
                    <p style="color:#444; font-size:14px; line-height:22px;">
                        <?= $l->deskripsi ?>
                    </p>

                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>

</section>

</main>
