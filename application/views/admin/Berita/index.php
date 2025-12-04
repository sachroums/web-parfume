<!DOCTYPE html>
<html>
<head>
</head>
<body>

    <h1><?= $title ?></h1>
    <a href="<?= site_url('admin/berita/tambah') ?>">+ Tambah Berita</a><br><br>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>

        <?php $no=1; foreach ($berita as $b): ?>
        <tr>
            <td><?= $no++ ?></td>

            <td>
                <?php if($b->gambar): ?>
                    <img src="<?= base_url('uploads/berita/'.$b->gambar) ?>" class="img-thumb">
                <?php else: ?>
                    (Tidak ada)
                <?php endif; ?>
            </td>

            <td><?= $b->judul ?></td>
            <td><?= $b->tanggal ?></td>

            <td>
                <a href="<?= site_url('admin/berita/edit/'.$b->id) ?>">Edit</a> |
                <a href="<?= site_url('admin/berita/hapus/'.$b->id) ?>" onclick="return confirm('Hapus berita ini?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>
