<div class="catalog-container">

    <h1>Video Produk Sérén - Parfume</h1>

    <div class="video-grid">

        <?php foreach ($videoo as $v): ?>
        <div class="video-item" onclick="openVideo('<?= base_url('uploads/videoo/'.$v->file_video) ?>')">

            <img src="<?= base_url('uploads/thumbnail/'.$v->thumbnail) ?>" class="video-thumb">

            <div class="video-title"><?= $v->judul ?></div>

        </div>
        <?php endforeach; ?>

    </div>

</div>



<!-- POPUP PLAYER -->
<div class="video-popup-bg" id="videoPopup">
    <div class="video-popup-box">
        <video id="popupVideo" controls></video>
        <button class="close-btn" onclick="closeVideo()">Tutup</button>
    </div>
</div>


<script>
function openVideo(src) {
    document.getElementById('popupVideo').src = src;
    document.getElementById('videoPopup').style.display = "flex";
}

function closeVideo() {
    let v = document.getElementById('popupVideo');
    v.pause();
    v.currentTime = 0;
    document.getElementById('videoPopup').style.display = "none";
}
</script>
