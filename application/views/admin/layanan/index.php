<!DOCTYPE html>
<html>
<head>
</head>
<body>

<h1><?= $title ?></h1>
<a href="<?= site_url('admin/layanan/tambah') ?>" class="btn">+ Tambah Layanan</a>
<br><br>
<table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Icon</th>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
<?php $no = 1; foreach ($layanan as $l): ?>
<tr>
<td><?= $no++ ?></td>
<td><?= $l->icon ?></td>
<td>
<?php if ($l->gambar): ?>
<img src="<?= base_url('uploads/layanan/'.$l->gambar) ?>" width="100">
<?php endif; ?>
</td>
<td><?= $l->judul ?></td>
<td><?= $l->deskripsi ?></td>
<td>
<a href="<?= site_url('admin/layanan/edit/'.$l->id) ?>">Edit</a> |
<a href="<?= site_url('admin/layanan/hapus/'.$l->id) ?>" onclick="return confirm('Hapus layanan ini?')">Hapus</a>
</td>
</tr>
<?php endforeach; ?>
</table>