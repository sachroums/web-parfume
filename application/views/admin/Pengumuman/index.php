<!DOCTYPE html>
<html>
<head>
</head>
<body>

    <h1><?= $title ?></h1>
    <a href="<?= site_url('/admin/pengumuman/tambah') ?>">+ Tambah Pengumuman</a><br><br>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>

        <?php $no=1; foreach ($pengumuman as $p): ?>
        <tr>
            <td><?= $no++ ?></td>

            <td>
                <?php if($p->gambar): ?>
                    <img src="<?= base_url('uploads/pengumuman/'.$p->gambar) ?>" class="img-thumb">
                <?php else: ?>
                    (Tidak ada)
                <?php endif; ?>
            </td>

            <td><?= $p->judul ?></td>
            <td><?= $p->tanggal ?></td>

            <td>
                <a href="<?= site_url('admin/pengumuman/edit/'.$p->id) ?>">Edit</a> |
                <a href="<?= site_url('admin/pengumuman/hapus/'.$p->id) ?>" onclick="return confirm('Hapus berita ini?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>
