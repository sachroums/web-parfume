<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>
</head>

<body>

<h1><?= $title ?></h1>

<form action="<?= site_url('admin/produk/simpan') ?>" method="post" enctype="multipart/form-data">

    <label>Nama Produk</label>
    <input type="text" name="nama" required>

    <label>Kategori</label>
    <select name="kategori" required>
        <option value="">-- pilih kategori --</option>
        <option value="feminim">Feminine</option>
        <option value="masculin">Masculine</option>
        <option value="unisex">Unisex</option>
    </select>

    <label>Harga</label>
    <input type="number" name="harga" required>

    <label>Stok</label>
    <input type="number" name="stok" required>

    <label>Deskripsi</label>
    <textarea name="deskripsi" rows="5"></textarea>

    <label>Gambar Produk</label>
    <input type="file" name="gambar" required>

    <label>Gambar Tambahan (Opsional)</label>
    <input type="file" name="gambar_lain[]" multiple>
    <small>Bisa upload lebih dari 1 gambar, contoh untuk gallery produk.</small>


    <button type="submit" class="btn">Simpan</button>
    </form>
    <a href="<?= site_url('produk') ?>">Kembali</a>
</body>
</html>