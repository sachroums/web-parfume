<h1><?= $title ?></h1>

<form action="<?= site_url('admin/team/update/'.$team->id) ?>" method="post" enctype="multipart/form-data">

<input type="hidden" name="foto_lama" value="<?= $team->foto ?>">

<label>Nama</label>
<input type="text" name="nama" value="<?= $team->nama ?>" required>

<label>Jabatan</label>
<input type="text" name="jabatan" value="<?= $team->jabatan ?>" required>

<label>Deskripsi</label>
<textarea name="deskripsi" rows="5"><?= $team->deskripsi ?></textarea>

<label>Foto</label><br>
<?php if($team->foto): ?>
    <img src="<?= base_url('uploads/team/'.$team->foto) ?>" width="80"><br>
<?php endif; ?>

<input type="file" name="foto">

<button type="submit">Update</button>
</form>
