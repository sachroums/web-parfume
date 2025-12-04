<h1><?= $title ?></h1>
<a href="<?= site_url('admin/team/tambah') ?>" class="btn">+ Tambah Anggota</a>
<br><br>

<table border="1" cellpadding="8">
    <tr>
        <th>No</th>
        <th>Foto</th>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Aksi</th>
    </tr>

    <?php $no=1; foreach($team as $t): ?>
    <tr>
        <td><?= $no++ ?></td>
        <td>
            <?php if($t->foto): ?>
                <img src="<?= base_url('uploads/team/'.$t->foto) ?>" width="80">
            <?php endif; ?>
        </td>
        <td><?= $t->nama ?></td>
        <td><?= $t->jabatan ?></td>
        <td>
            <a href="<?= site_url('admin/team/edit/'.$t->id) ?>">Edit</a> |
            <a href="<?= site_url('admin/team/hapus/'.$t->id) ?>" onclick="return confirm('Hapus?')">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
