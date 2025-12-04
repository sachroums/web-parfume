<form action="<?= site_url('admin/videoo/update/'.$video->id) ?>" method="post" enctype="multipart/form-data">

    <label>Judul Video</label>
    <input type="text" name="judul" value="<?= $video->judul ?>" required>

    <br><br>

    <label>Video Saat Ini:</label><br>
    <video width="300" controls>
        <source src="<?= base_url('uploads/video/'.$video->file_video) ?>" type="video/mp4">
    </video>

    <br><br>

    <input type="hidden" name="video_lama" value="<?= $video->file_video ?>">

    <label>Ganti Video (opsional)</label>
    <input type="file" name="file_video">

    <br><br>

    <!-- 👇 Bagian Status Video ditambahkan di sini -->
    <label>Status Video</label>
    <select name="status" required>
        <option value="1" <?= $video->status == 1 ? 'selected' : '' ?>>Tampilkan</option>
        <option value="0" <?= $video->status == 0 ? 'selected' : '' ?>>Sembunyikan</option>
    </select>

    <br><br>

    <button type="submit">Update</button>

</form>
