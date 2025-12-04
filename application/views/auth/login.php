<!DOCTYPE html>
<html>
<head>
  <title><?= $title ?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <style>
  :root {
    --bs-primary: #f5e9d3 !important;                /* cream */
    --bs-primary-rgb: 245, 233, 211 !important;
  }

  body {
    background-color: #faf7f2 !important;            /* soft cream background */
    color: #4e3f2b !important;                       /* brown soft text */
    font-family: "Poppins", sans-serif;
  }

  .btn-primary,
  .bg-primary,
  .navbar,
  .nav-pills .nav-link.active {
    background-color: #f5e9d3 !important;            /* cream */
    border-color: #e8d9c2 !important;
    color: #4e3f2b !important;
  }

  .card,
  .table thead {
    background-color: #fffdf8 !important;            /* light cream */
    color: #4e3f2b !important;
    border-color: #e8d9c2 !important;
  }
</style>
</head>
<body class="bg-light">
<div class="container mt-5" style="max-width:400px;">
  <div class="card shadow">
    <div class="card-body">
      <h4 class="text-center mb-4">Login Admin - Seren Parfume</h4>
      <?php if ($this->session->flashdata('error')): ?>
        <div class="alert alert-danger"><?= $this->session->flashdata('error') ?></div>
      <?php endif; ?>
      <form method="post" action="<?= site_url('auth/proses_login') ?>">
        <div class="mb-3">
          <label>Username</label>
          <input type="text" name="username" class="form-control" required>
        </div>
        <div class="mb-3">
          <label>Password</label>
          <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Login</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>
