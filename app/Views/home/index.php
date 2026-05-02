<section class="container py-4">
<div class="alert alert-success">Same-day delivery in Vizag | Offers: FLORA10</div>
<div id="hero" class="carousel slide mb-4" data-bs-ride="carousel"><div class="carousel-inner"><div class="carousel-item active"><img class="d-block w-100 rounded" src="https://images.unsplash.com/photo-1525310072745-f49212b5ac6d?q=80&w=1200" alt=""></div></div></div>
<h2>Featured Products</h2><div class="row"><?php foreach($featured as $p): ?><div class="col-6 col-md-3 mb-3"><div class="card"><div class="card-body"><h6><?= htmlspecialchars($p['name']) ?></h6><p>₹<?= number_format((float)$p['price'],2) ?></p></div></div></div><?php endforeach; ?></div>
<h2>Bestsellers</h2><div class="row"><?php foreach($bestsellers as $p): ?><div class="col-6 col-md-3 mb-3"><div class="card"><div class="card-body"><h6><?= htmlspecialchars($p['name']) ?></h6></div></div></div><?php endforeach; ?></div>
</section>
