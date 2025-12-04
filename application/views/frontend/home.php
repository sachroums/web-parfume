<main class="main">

    <!-- Blog Hero Section -->
    <section id="blog-hero" class="blog-hero section">

      <div class="container-fluid p-0" data-aos="fade">

        <div class="blog-hero-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 1000,
              "effect": "fade",
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": 1,
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              }
            }
          </script>

          <div class="swiper-wrapper">

  <!-- SLIDE 1 -->
  <div class="swiper-slide">
    <div class="blog-hero-item">
      <img src="<?= base_url() ?>assets/img/blog/bg-3.png" alt="Blog Hero Image" class="img-fluid">
      <div class="blog-hero-content">
          <a href="<?= site_url('katalog') ?>" class="category-btn">Lihat Produk</a>
          <h1>Temukan aroma yang mencerminkan karakter dan perjalanan hidupmu. Lembut, elegan, dan tahan lama.</h1>
      </div>
      <!-- Text removed -->
    </div>
  </div>

  <!-- SLIDE 2 -->
  <div class="swiper-slide">
    <div class="blog-hero-item">
      <img src="<?= base_url() ?>assets/img/blog/bg2.png" alt="Blog Hero Image" class="img-fluid">
        <div class="blog-hero-content">
          <a href="<?= site_url('katalog') ?>" class="category-btn">Lihat Produk</a>
          <h1>Temukan aroma yang mencerminkan karakter dan perjalanan hidupmu. Lembut, elegan, dan tahan lama.</h1>
        </div>

    </div>
  </div>

  <!-- SLIDE 3 -->
  <div class="swiper-slide">
    <div class="blog-hero-item">
      <img src="<?= base_url() ?>assets/img/blog/bg-1.png" alt="Blog Hero Image" class="img-fluid">
      <div class="blog-hero-content">
        <a href="<?= site_url('katalog') ?>" class="category-btn">Lihat Produk</a>
        <h1>Temukan aroma yang mencerminkan karakter dan perjalanan hidupmu. Lembut, elegan, dan tahan lama.</h1>
      </div>

      <!-- Text removed -->
    </div>
  </div>

  <!-- SLIDE 4 -->
  <div class="swiper-slide">
    <div class="blog-hero-item">
      <img src="<?= base_url() ?>assets/img/blog/bg-4.png" alt="Blog Hero Image" class="img-fluid">
      <div class="blog-hero-content">
        <a href="<?= site_url('katalog') ?>" class="category-btn">Lihat Produk</a>
        <h1>Temukan aroma yang mencerminkan karakter dan perjalanan hidupmu. Lembut, elegan, dan tahan lama.</h1>
      </div>

      <!-- Text removed -->
    </div>
  </div>

  <!-- SLIDE 5 -->
  <div class="swiper-slide">
    <div class="blog-hero-item">
      <img src="<?= base_url() ?>assets/img/blog/bg-5.png" alt="Blog Hero Image" class="img-fluid">
      <div class="blog-hero-content">
        <a href="<?= site_url('katalog') ?>" class="category-btn">Lihat Produk</a>
        <h1>Temukan aroma yang mencerminkan karakter dan perjalanan hidupmu. Lembut, elegan, dan tahan lama.</h1>
      </div>

      <!-- Text removed -->
    </div>
  </div>

</div>

<div class="swiper-button-prev"></div>
<div class="swiper-button-next"></div>


    </section><!-- /Blog Hero Section -->

    <!-- Featured Posts Section -->
    <section id="featured-posts" class="featured-posts section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span class="description-title">Parfum & Lifestyle</span>
        <h2>Parfum & Lifestyle</h2>
        <p>Kisah aroma, inspirasi, dan pengalaman wangi dari SEREN untuk menemani harimu.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="blog-posts-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 4500
              },
              "slidesPerView": 1,
              "spaceBetween": 40,
              "centeredSlides": true,
              "breakpoints": {
                "768": {
                  "slidesPerView": 1.5,
                  "spaceBetween": 30
                },
                "1200": {
                  "slidesPerView": 2.2,
                  "spaceBetween": 40
                }
              },
              "pagination": {
                "el": ".swiper-pagination",
                "clickable": true
              }
            }
          </script>

          <div class="swiper-wrapper">

  <!-- CARD 1 -->
  <div class="swiper-slide">
    <article class="blog-card">
      <div class="blog-image">
        <img src="<?= base_url() ?>assets/img/blog/lf-1.png" alt="Blog Image" loading="lazy">
        <div class="category-badge">Mood & Aroma</div>
      </div>
      <div class="blog-content">
        <h3><a href="#">Aroma yang Meningkatkan Mood Harianmu</a></h3>
        <p>Aroma citrus dan floral lembut dapat membantu meningkatkan fokus dan menghadirkan energi positif sepanjang hari.</p>
      </div>
    </article>
  </div>

  <!-- CARD 2 -->
  <div class="swiper-slide">
    <article class="blog-card">
      <div class="blog-image">
        <img src="<?= base_url() ?>assets/img/blog/lf-2.png" alt="Blog Image" loading="lazy">
        <div class="category-badge">Beauty Notes</div>
      </div>
      <div class="blog-content">
        <h3><a href="#">Parfum yang Cocok Dengan Kepribadianmu</a></h3>
        <p>Wangi floral, sweet, atau woody dapat mencerminkan karakter unikmu dalam setiap aktivitas.</p>
      </div>
    </article>
  </div>

  <!-- CARD 3 -->
  <div class="swiper-slide">
    <article class="blog-card">
      <div class="blog-image">
        <img src="<?= base_url() ?>assets/img/blog/lf-3.png" alt="Blog Image" loading="lazy">
        <div class="category-badge">Natural Scent</div>
      </div>
      <div class="blog-content">
        <h3><a href="#">Kelebihan Parfum Berbahan Alami</a></h3>
        <p>Aroma natural lebih lembut di kulit, tidak menyengat, dan menghadirkan kesan elegan yang tahan lama.</p>
      </div>
    </article>
  </div>

  <!-- CARD 4 -->
  <div class="swiper-slide">
    <article class="blog-card">
      <div class="blog-image">
        <img src="<?= base_url() ?>assets/img/blog/lf-5.png" alt="Blog Image" loading="lazy">
        <div class="category-badge">Tips & Tricks</div>
      </div>
      <div class="blog-content">
        <h3><a href="#">Cara Singkat Agar Parfum Tahan Lama</a></h3>
        <p>Gunakan parfum pada pulse points dan setelah mandi untuk menjaga wangi tetap segar sepanjang hari.</p>
      </div>
    </article>
  </div>

  <!-- CARD 5 -->
  <div class="swiper-slide">
    <article class="blog-card">
      <div class="blog-image">
        <img src="<?= base_url() ?>assets/img/blog/lf-4.png" alt="Blog Image" loading="lazy">
        <div class="category-badge">Lifestyle Picks</div>
      </div>
      <div class="blog-content">
        <h3><a href="#">Aroma Parfum untuk Berbagai Momen</a></h3>
        <p>Gunakan wangi ringan untuk aktivitas harian dan aroma manis hangat untuk acara spesial di malam hari.</p>
      </div>
    </article>
  </div>

</div>

<div class="swiper-pagination"></div>


    </section><!-- /Featured Posts Section -->

    <!-- Category Section Section -->
    <section id="category-section" class="category-section section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span class="description-title">Varian Perfume</span>
        <h2>Varian Perfume</h2>
        <p>Hadirkan sentuhan mewah yang menyempurnakan setiap langkahmu.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <!-- Main Featured Post -->
        <div class="row gy-4 mb-5">
          <div class="col-lg-8">
            <article class="hero-post" data-aos="zoom-out" data-aos-delay="200">
              <div class="post-img">
                <img src="<?= base_url() ?>assets/img/blog/varian.png" alt="" class="img-fluid" loading="lazy">
              </div>
              <div class="post-content">
                <div class="author-info">
                  <div class="author-details">
                  </div>
                </div>
                <h2 class="post-title">
                  <a href="blog-details.html">Tiga Pilar Aroma "Sérén"</a>
                </h2>
                <p class="post-excerpt">"Sérén" mewakili ketenangan, kemewahan yang tenang, dan keindahan aroma yang autentik. Brand ini menawarkan pengalaman wewangian premium yang dirancang untuk melengkapi setiap identitas dan momen, menjanjikan aroma yang elegan dan tahan lama.</p>
                <div class="post-stats">
                </div>
              </div>
            </article>
          </div>

          <div class="col-lg-4">
            <div class="sidebar-posts">
              <article class="sidebar-post" data-aos="fade-left" data-aos-delay="300">
                <div class="post-img">
                  <img src="<?= base_url() ?>assets/img/blog/varian_veil.png" alt="" class="img-fluid" loading="lazy">
                </div>
                <div class="post-content">
                  <span class="post-category">Sérén Veil</span>
                  <h4 class="title">
                    <a href="blog-details.html">Varian signature yang seimbang dan universal.</a>
                  </h4>
                  <div class="post-meta">
                    <span class="post-date">22 February 2024</span>
                  </div>
                </div>
              </article>

              <article class="sidebar-post" data-aos="fade-left" data-aos-delay="400">
                <div class="post-img">
                  <img src="<?= base_url() ?>assets/img/blog/varian_aure.png" alt="" class="img-fluid" loading="lazy">
                </div>
                <div class="post-content">
                  <span class="post-category">Sérén Aure</span>
                  <h4 class="title">
                    <a href="blog-details.html">Aroma maskulin yang berkelas dan kuat.</a>
                  </h4>
                  <div class="post-meta">
                    <span class="post-date">18 January 2024</span>
                  </div>
                </div>
              </article>

              <article class="sidebar-post" data-aos="fade-left" data-aos-delay="500">
                <div class="post-img">
                  <img src="<?= base_url() ?>assets/img/blog/varian_elise.png" alt="" class="img-fluid" loading="lazy">
                </div>
                <div class="post-content">
                  <span class="post-category">Sérén Elise</span>
                  <h4 class="title">
                    <a href="blog-details.html">Wewangian feminin yang memukau dan anggun.</a>
                  </h4>
                  <div class="post-meta">
                    <span class="post-date">10 December 2023</span>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>

        <!-- Grid Posts -->
      <section class="try-section">
    <div class="container">
        <div class="row align-items-center">

            <!-- LEFT TEXT -->
            <div class="col-md-6" data-aos="fade-right">
                <h2 class="try-title">Try First</h2>
                <p class="try-desc">
                    Sebelum membuat komitmen parfum mana yang mau kamu beli, coba dulu saja.
                    <i>Scent designer kit</i> ini akan dipersonalisasi sesuai mood dan profil aromamu.
                </p>

                <a href="<?= base_url('katalog'); ?>" class="try-btn">SEE OUR PRODUCT</a>
            </div>

            <!-- RIGHT IMAGE -->
            <div class="col-md-6 text-center" data-aos="fade-left">
                <img src="<?= base_url('assets/img/blog/mini size.png') ?>" 
                     class="try-img img-fluid" loading="lazy">
            </div>

        </div>
    </div>
</section>

    <!-- Latest Posts Section -->
    <section id="latest-posts" class="latest-posts section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <p>" Ketujuh varian aroma ini memungkinkan Anda untuk menciptakan lebih <br> 
        dari 20 kombinasi wewangian yang unik. Selain itu, kami juga melampirkan <br> 
        panduan dan resep <i>blending parfum </i>untuk membantu Anda menemukan<br> 
        aroma lain yang benar-benar mewakili karakter Anda."</p>
      </div><!-- End Section Title -->

        </div>

      </div>

    </section><!-- /Latest Posts Section -->

  </main>