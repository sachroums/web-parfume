<h1><?= $title ?></h1>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Subjek</th>
        <th>Pesan</th>
        <th>Dikirim Pada</th>
        <th>Aksi</th>
    </tr>

    <?php $no=1; foreach($pesan as $p): ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $p->nama ?></td>
        <td><?= $p->email ?></td>
        <td><?= $p->subjek ?></td>
        <td><?= $p->pesan ?></td>
        <td><?= $p->created_at ?></td>
        <td>
            <a href="<?= site_url('admin/contact/'.$p->id) ?>" onclick="return confirm('Hapus pesan ini?')">
                Hapus
            </a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
