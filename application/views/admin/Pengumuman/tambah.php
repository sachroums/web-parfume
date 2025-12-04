<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>
</head>
<body>
    <h1><?= $title ?></h1>
    <form method="post" action="<?= site_url('admin/pengumuman/simpan') ?>" enctype="multipart/form-data">
        <p>Judul: <input type="text" name="judul" required></p>
        <p>Isi: <textarea name="isi" rows="5" cols="40" required></textarea></p>
        <p>Gambar: <input type="file" name="gambar" accept="image/*"></p>
        <button type="submit">Simpan</button>
    </form>
    <a href="<?= site_url('berita') ?>">Kembali</a>
</body>
</html>
