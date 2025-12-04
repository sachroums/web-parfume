<?php if (!isset($active_menu)) $active_menu = ''; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Sérén - Parfume</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="<?= base_url() ?>assets/img/SERENPARFUME.png" rel="icon">
  <link href="<?= base_url() ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Montserrat:wght@300;400;500;600;700&family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?= base_url() ?>assets/css/main.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/css/frontend.css" rel="stylesheet">


  <!-- =======================================================
  * Template Name: Story
  * Template URL: https://bootstrapmade.com/story-bootstrap-blog-template/
  * Updated: Aug 11 2025 with Bootstrap v5.3.7
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center position-relative">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="<?= site_url('/') ?>" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.webp" alt=""> -->
        <h1 class="sitename">Sérén.</h1>
      </a>

      <nav id="navmenu" class="navmenu">
      <ul>
          <li><a href="<?= base_url() ?>" class="<?= ($active_menu == 'home') ? 'active' : '' ?>">Beranda</a></li>
          <li class="dropdown"><a href="#" class="<?= ($active_menu == 'informasi') ? 'active' : '' ?>" ><span>Informasi</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="<?= base_url('beritaproduk') ?>" class="<?= ($active_menu == 'berita') ? 'active' : '' ?>">Berita Parfume</a></li>
                  <li><a href="<?= base_url('pengumumanproduk') ?>" class="<?= ($active_menu == 'pengumuman') ? 'active' : '' ?>">Pengumuman</a></li>
                </ul>
          <li class="dropdown"><a href="#" class="<?= ($active_menu == 'produk') ? 'active' : '' ?>" ><span>Galeri</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="<?= base_url('katalog') ?>" class="<?= ($active_menu == 'produk') ? 'active' : '' ?>">Foto Produk</a></li>
                  <li><a href="<?= base_url('VideoParfume') ?>" class="<?= ($active_menu == 'produk') ? 'active' : '' ?>">Video Produk</a></li>
                </ul>
          <li><a href="<?= base_url('LayananPage') ?>" class="<?= ($active_menu == 'layanan') ? 'active' : '' ?>">Layanan</a></li>
          <li><a href="<?= base_url('teampage') ?>" class="<?= ($active_menu == 'team') ? 'active' : '' ?>">Team</a></li>
          <li><a href="<?= base_url('contact') ?>" class="<?= ($active_menu == 'contact') ? 'active' : '' ?>">Contact</a></li>
      </ul>
      </nav>


      <div class="header-social-links">
        <a href="https://wa.me/6281356588567?text=Halo%20kak,%20saya%20ingin%20bertanya"
        aria-label="Whatsapp" target="_blank"><i class="bi bi-whatsapp"></i></a>
        <a href="https://www.instagram.com/sachroums?igsh=MTVoNmhyMWkxNnR5cA==" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
      </div>
    </div>
  </header>