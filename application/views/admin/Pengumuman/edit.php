<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>
</head>
<body>
    <h1><?= $title ?></h1>
    <form method="post" action="<?= site_url('admin/pengumuman/update/'.$p->id) ?>" enctype="multipart/form-data">
        <p>Judul: <input type="text" name="judul" value="<?= $p->judul ?>" required></p>
        <p>Isi: <textarea name="isi" rows="5" cols="40" required><?= $p->isi ?></textarea></p>
        <p>Gambar lama:
            <?php if($p->gambar): ?>
                <img src="<?= base_url('uploads/'.$p->gambar) ?>" width="100"><br>
            <?php else: ?>
                (Belum ada)
            <?php endif; ?>
        </p>
        <input type="hidden" name="gambar_lama" value="<?= $p->gambar ?>">
        <p>Ganti Gambar: <input type="file" name="gambar" accept="image/*"></p>
        <button type="submit">Update</button>
    </form>
    <a href="<?= site_url('berita') ?>">Kembali</a>
</body>
</html>
