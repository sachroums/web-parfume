<div class="container">
    <h3><?= $title ?></h3>

    <form action="<?= base_url('admin/videoo/store') ?>" method="post" enctype="multipart/form-data">

        <label>Judul Video</label>
        <input type="text" name="judul" class="form-control" required>

        <label>Deskripsi</label>
        <textarea name="deskripsi" class="form-control"></textarea>

        <label>Upload Video (MP4/WEBM)</label>
        <input type="file" name="file_video" class="form-control" required>

        <label>Thumbnail</label>
        <input type="file" name="thumbnail" class="form-control" required>

        <label>Status</label>
        <select name="status" class="form-control">
            <option value="1">Tampil</option>
            <option value="0">Sembunyikan</option>
        </select>

        <button class="btn btn-primary mt-3">Simpan</button>
        <a href="<?= site_url('admin/videoo') ?>">Kembali</a>
    </form>
</div>
