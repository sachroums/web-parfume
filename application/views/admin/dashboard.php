<!DOCTYPE html>
<html>
<head>

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>

<body>

<h1 class="title">Dashboard Admin</h1>

<div class="dashboard-grid">

    <div class="card">
        <div class="card-icon"><i class="fa fa-newspaper"></i></div>
        <h3>Berita</h3>
        <a href="<?= site_url('admin/berita') ?>">Kelola Berita</a>
    </div>

    <div class="card">
        <div class="card-icon"><i class="fa fa-box"></i></div>
        <h3>Produk</h3>
        <a href="<?= site_url('admin/produk') ?>">Kelola Produk</a>
    </div>

    <div class="card">
        <div class="card-icon"><i class="fa fa-video"></i></div>
        <h3>Video Produk</h3>
        <a href="<?= site_url('admin/videoo') ?>">Kelola Video</a>
    </div>

    <div class="card">
        <div class="card-icon"><i class="fa fa-handshake"></i></div>
        <h3>Layanan</h3>
        <a href="<?= site_url('admin/layanan') ?>">Kelola Layanan</a>
    </div>

    <div class="card">
        <div class="card-icon"><i class="fa fa-users"></i></div>
        <h3>Team</h3>
        <a href="<?= site_url('admin/team') ?>">Kelola Team</a>
    </div>

    <div class="card">
        <div class="card-icon"><i class="fa fa-bullhorn"></i></div>
        <h3>Pengumuman</h3>
        <a href="<?= site_url('admin/pengumuman') ?>">Kelola Pengumuman</a>
    </div>

    <div class="card">
        <div class="card-icon"><i class="fa fa-envelope"></i></div>
        <h3>Pesan Kontak</h3>
        <a href="<?= site_url('admin/ContactAdmin') ?>">Lihat Pesan</a>
    </div>

</div>

</body>
</html>
