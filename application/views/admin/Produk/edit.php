<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>

</head>

<body>

<h1><?= $title ?></h1>

<form action="<?= site_url('/admin/produk/update/'.$produk->id) ?>" method="post" enctype="multipart/form-data">

    <input type="hidden" name="gambar_lama" value="<?= $produk->gambar ?>">

    <label>Nama Produk</label>
    <input type="text" name="nama" value="<?= $produk->nama ?>" required>

    <label>Kategori</label>
    <select name="kategori" required>
        <option value="feminim" <?= $produk->kategori=='feminim'?'selected':'' ?>>Feminim</option>
        <option value="masculin" <?= $produk->kategori=='masculin'?'selected':'' ?>>Masculin</option>
        <option value="unisex" <?= $produk->kategori=='unisex'?'selected':'' ?>>Unisex</option>
    </select>

    <label>Harga</label>
    <input type="number" name="harga" value="<?= $produk->harga ?>" required>

    <label>Stok</label>
    <input type="number" name="stok" value="<?= $produk->stok ?>" required>

    <label>Deskripsi</label>
    <textarea name="deskripsi" rows="5"><?= $produk->deskripsi ?></textarea>

    <label>Gambar Produk</label><br>

    <?php if($produk->gambar): ?>
        <img src="<?= base_url('uploads/produk/'.$produk->gambar) ?>" class="img-thumb">
    <?php endif; ?>
    
    <input type="file" name="gambar">

    <button type="submit" class="btn">Update</button>
</form>
</body>
</html>
