<div class="catalog-container">

    <h1>Katalog Produk Sérén - Parfume</h1>

    <!-- FILTER KATEGORI -->
    <div class="filter-box">
        <button class="filter-btn" onclick="filterCategory('all')">Semua</button>
        <button class="filter-btn" onclick="filterCategory('feminim')">Feminim</button>
        <button class="filter-btn" onclick="filterCategory('masculin')">Masculin</button>
        <button class="filter-btn" onclick="filterCategory('unisex')">Unisex</button>
    </div>

    <!-- GRID PRODUK -->
    <div class="product-grid">

        <?php foreach ($produk as $p): ?>
        <div class="product-item category-<?= $p->kategori ?>">

            <a href="<?= site_url('shop/detail/'.$p->id) ?>">
                <img src="<?= base_url('uploads/produk/'.$p->gambar) ?>" alt="">
            </a>

            <div class="product-name"><?= $p->nama ?></div>
            <div class="product-price">Rp <?= number_format($p->harga, 0, ',', '.') ?></div>

            <!-- TOMBOL ADD TO CART -->
            <a href="<?= site_url('cart/add/'.$p->id) ?>" class="add-cart-btn">
                <i class="bi bi-cart-plus"></i> Add to Cart
            </a>

        </div>
        <?php endforeach; ?>

    </div>

</div>

<script>
function filterCategory(cat) {
    let items = document.getElementsByClassName('product-item');

    for (let i = 0; i < items.length; i++) {
        if (cat === 'all') {
            items[i].style.display = 'block';
        } else {
            if (items[i].classList.contains('category-' + cat)) {
                items[i].style.display = 'block';
            } else {
                items[i].style.display = 'none';
            }
        }
    }
}
</script>
