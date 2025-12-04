<style>
body { 
    background:#f7f2fa; 
    font-family: 'Poppins', sans-serif;
}

.contact-section {
    max-width: 1100px;
    margin: 50px auto;
    padding: 40px;
    background: white;
    border-radius: 16px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.08);
    display: flex;
    gap: 40px;
}

.contact-left {
    flex: 1;
}

.contact-left h2 {
    font-size: 32px;
    font-weight: 700;
    color: #222;
    margin-bottom: 10px;
}

.contact-left p {
    color: #555;
    line-height: 1.6;
    margin-bottom: 20px;
}

.info-item {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
    color: #444;
}

.info-item i {
    font-size: 20px;
    color: #c2185b;
    margin-right: 12px;
}

.map-container {
    width: 100%; 
    height: 300px; 
    margin-top: 20px;
    border-radius: 12px; 
    overflow: hidden; 
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
}

.contact-right {
    flex: 1.1;
}

input, textarea {
    width: 100%;
    padding: 12px;
    margin-top: 8px;
    margin-bottom: 18px;
    border: 1px solid #ddd;
    border-radius: 10px;
    font-size: 15px;
}

input:focus, textarea:focus {
    border-color: #c2185b;
    outline: none;
}

label {
    font-weight: 600;
    color: #333;
}

.btn-submit {
    width: 100%;
    padding: 14px;
    border: none;
    border-radius: 10px;
    color: white;
    font-size: 16px;
    cursor: pointer;
    background: linear-gradient(45deg, #c2185b, #ff7d5c);
    transition: 0.3s;
}

.btn-submit:hover {
    opacity: 0.9;
}

@media (max-width: 768px) {
    .contact-section {
        flex-direction: column;
        padding: 25px;
    }

    .map-container {
        height: 250px;
    }
}
</style>

<div class="contact-section">

    <!-- LEFT SECTION -->
    <div class="contact-left">
        <h2>Contact Us</h2>
        <p>Kami siap membantu Anda dan memproses pesan yang Anda kirimkan secepat mungkin.</p>

        <div class="info-item">
            <i class="fa fa-envelope"></i> 
            admin.serenparfume@gmail.com
        </div>

        <div class="info-item">
            <i class="fa fa-map-marker"></i> 
            Jln.Budi Utomo, Lrg.Mangga No.08
        </div>

        <div class="info-item">
            <i class="fa fa-phone"></i> 
            +62 81356588567
        </div>

        <!-- GOOGLE MAPS TAMBAHAN DI SINI -->
        <div class="map-container">
            <iframe 
                width="100%" 
                height="100%" 
                style="border:0;" 
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.1685868418276!2d122.50089177367079!3d-3.985715544532522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d98f2d20b2b32d7%3A0xae0fe97c7dcf294b!2sLrg.%20Mangga%2C%20Kota%20Kendari%2C%20Sulawesi%20Tenggara!5e0!3m2!1sid!2sid!4v1764000075258!5m2!1sid!2sid">
            </iframe>
        </div>

    </div>

    <!-- RIGHT SECTION (FORM) -->
    <div class="contact-right">

        <?php if ($this->session->flashdata('success')): ?>
            <p style="color:green;"><?= $this->session->flashdata('success'); ?></p>
        <?php endif; ?>

        <form action="<?= site_url('contact/kirim') ?>" method="post">

            <label>Nama</label>
            <input type="text" name="nama" required>

            <label>Email</label>
            <input type="email" name="email" required>

            <label>Subjek</label>
            <input type="text" name="subjek">

            <label>Pesan</label>
            <textarea name="pesan" rows="5" required></textarea>

            <button type="submit" class="btn-submit">Submit</button>
        </form>
    </div>

</div>

<!-- Icon dari Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
