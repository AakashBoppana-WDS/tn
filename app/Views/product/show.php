<section class="container py-4"><div class="row"><div class="col-md-6"><img class="img-fluid rounded" src="<?= htmlspecialchars($product['image_url']) ?>"></div>
<div class="col-md-6"><h1><?= htmlspecialchars($product['name']) ?></h1><h4>₹<span id="basePrice"><?= number_format((float)$product['price'],2) ?></span></h4>
<label>Message on cake</label><input class="form-control mb-2" name="message_on_cake">
<h5>Add-ons</h5><?php foreach($addons as $a): ?><div class="form-check"><input class="form-check-input addon" type="checkbox" data-price="<?= (float)$a['price'] ?>"><label class="form-check-label"><?= htmlspecialchars($a['name']) ?> (+₹<?= number_format((float)$a['price'],2) ?>)</label></div><?php endforeach; ?>
<div class="mt-3">Total: ₹<span id="dynamicTotal"><?= number_format((float)$product['price'],2) ?></span></div><button class="btn btn-success mt-2">Add to Cart</button></div></div></section>
