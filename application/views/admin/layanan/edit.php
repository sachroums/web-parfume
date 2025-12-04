<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>
</head>

<body>

<h1><?= $title ?></h1>

<form action="<?= site_url('admin/layanan/update/'.$layanan->id) ?>" 
      method="post" enctype="multipart/form-data">

    <input type="hidden" name="gambar_lama" value="<?= $layanan->gambar ?>">

    <label>Judul Layanan</label>
    <input type="text" name="judul" value="<?= $layanan->judul ?>" required>

    <label>Deskripsi</label>
    <textarea name="deskripsi" rows="5" required><?= $layanan->deskripsi ?></textarea>

    <label>Icon (opsional)</label>
    <input type="text" name="icon" value="<?= $layanan->icon ?>">

    <label>Gambar Saat Ini</label><br>
    <?php if ($layanan->gambar): ?>
        <img src="<?= base_url('uploads/layanan/'.$layanan->gambar) ?>" class="img-thumb">
    <?php endif; ?>

    <br><br>
    <label>Ganti Gambar (opsional)</label>
    <input type="file" name="gambar">

    <button type="submit" class="btn">Update</button>
</form>

<br>
<a href="<?= site_url('layanan') ?>">Kembali</a>

</body>
</html>
