<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>
</head>
<body>
<h1><?= $title ?></h1>
<form action="<?= site_url('admin/layanan/simpan') ?>" method="post" enctype="multipart/form-data">


<label>Judul Layanan</label>
<input type="text" name="judul" required>


<label>Deskripsi</label>
<textarea name="deskripsi" rows="5"></textarea>


<label>Icon (opsional)</label>
<input type="text" name="icon" placeholder="misal: bi bi-gift">


<label>Gambar Layanan</label>
<input type="file" name="gambar">


<button type="submit">Simpan</button>
</form>

<a href="<?= site_url('layanan') ?>">Kembali</a>
</body>
</html>