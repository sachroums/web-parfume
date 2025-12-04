<!DOCTYPE html>
<html>
<head>
</head>
<body>

    <h1><?= $title ?></h1>

    <a href="<?= site_url('admin/videoo/tambah') ?>" class="btn-add">+ Tambah Video</a>
    <br><br>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Thumbnail</th>
            <th>Judul Video</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>

        <?php $no = 1; foreach ($videoo as $v): ?>
        <tr>
            <td><?= $no++ ?></td>

            <td>
                <?php if ($v->thumbnail): ?>
                    <img src="<?= base_url('uploads/thumbnail/'.$v->thumbnail) ?>" class="img-thumb">
                <?php else: ?>
                    (Tidak ada)
                <?php endif; ?>
            </td>

            <td><?= $v->judul ?></td>

            <td>
                <?= ($v->status == 1) ? "Aktif" : "Tidak Aktif" ?>
            </td>

            <td>
                <a href="<?= site_url('admin/videoo/edit/'.$v->id) ?>">Edit</a> |
                <a href="<?= site_url('admin/videoo/delete/'.$v->id) ?>" onclick="return confirm('Hapus video ini?')">Hapus</a>

            </td>
        </tr>
    <?php endforeach; ?>
    </table>

    </body>
</html>
