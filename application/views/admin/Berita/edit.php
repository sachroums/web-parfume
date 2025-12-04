<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>
</head>
<body>
    <h1><?= $title ?></h1>
    <form method="post" action="<?= site_url('admin/berita/update/'.$b->id) ?>" enctype="multipart/form-data">
        <p>Judul: <input type="text" name="judul" value="<?= $b->judul ?>" required></p>
        <p>Isi: <textarea name="isi" rows="5" cols="40" required><?= $b->isi ?></textarea></p>
        <p>Gambar lama:
            <?php if($b->gambar): ?>
                <img src="<?= base_url('uploads/'.$b->gambar) ?>" width="100"><br>
            <?php else: ?>
                (Belum ada)
            <?php endif; ?>
        </p>
        <input type="hidden" name="gambar_lama" value="<?= $b->gambar ?>">
        <p>Ganti Gambar: <input type="file" name="gambar" accept="image/*"></p>
        <button type="submit">Update</button>
    </form>
    <a href="<?= site_url('berita') ?>">Kembali</a>
</body>
</html>
