<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>
</head>

<body>

<h1><?= $title ?></h1>

<form action="<?= site_url('admin/team/simpan') ?>" method="post" enctype="multipart/form-data">

    <label>Nama</label>
    <input type="text" name="nama" required>

    <label>Jabatan</label>
    <input type="text" name="jabatan" required>

    <label>Deskripsi</label>
    <textarea name="deskripsi" rows="5"></textarea>

    <label>Foto</label>
    <input type="file" name="foto">

    <button type="submit">Simpan</button>
</form>

<a href="<?= site_url('team') ?>">Kembali</a>

</body>
</html>
