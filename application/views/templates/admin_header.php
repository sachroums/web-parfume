<!DOCTYPE html>
<html>
<head>
    <title><?= isset($title) ? $title : 'Admin Panel' ?></title>
     <link href="<?= base_url() ?>assets/css/admin.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
  :root {
    --bs-primary: #f7a8c4 !important;              /* soft pink */
    --bs-primary-rgb: 247, 168, 196 !important;
  }

  body {
    background-color: #fff4f7 !important;          /* very soft pink */
    color: #5a4a4a !important;                      /* soft brown text */
    font-family: "Poppins", sans-serif;
  }

  /* Elemen utama */
  .btn-primary,
  .bg-primary,
  .navbar,
  .nav-pills .nav-link.active {
    background-color: #f7a8c4 !important;           /* soft pink */
    border-color: #e490ad !important;               /* slightly darker pink */
    color: #5a4a4a !important;
  }

  /* Card & table */
  .card,
  .table thead {
    background-color: #ffeaf0 !important;           /* light pink */
    color: #5a4a4a !important;
    border-color: #f3d0db !important;
  }
</style>

</head>
<body>
<nav class="navbar navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="<?= site_url('dashboard') ?>">Dashboard - Seren Parfume</a>
    <a href="<?= site_url('auth/logout') ?>" class="btn btn-light btn-sm">Logout</a>
  </div>
</nav>
<div class="container mt-4">
