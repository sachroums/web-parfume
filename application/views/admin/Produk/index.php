<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>
</head>
<body>

<h1><?= $title ?></h1>

<a href="<?= site_url('admin/produk/tambah') ?>">+ Tambah Produk</a>
<br><br>

<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kategori</th>
        <th>Harga</th>
        <th>Gambar</th>
        <th>Aksi</th>
    </tr>

    <?php $no=1; foreach ($produk as $p): ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $p->nama ?></td>
        <td><?= ucfirst($p->kategori) ?></td>
        <td>Rp <?= number_format($p->harga,0,',','.') ?></td>
        <td>
            <?php if($p->gambar): ?>
                <img src="<?= base_url('uploads/produk/'.$p->gambar) ?>" class="img-thumb">
            <?php else: ?>
                (Tidak ada)
            <?php endif; ?>
        </td>
        <td>
            <a href="<?= site_url('admin/produk/edit/'.$p->id) ?>">Edit</a> |
            <a href="<?= site_url('admin/produk/hapus/'.$p->id) ?>" onclick="return confirm('Hapus produk ini?')">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>
