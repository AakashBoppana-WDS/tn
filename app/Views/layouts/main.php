<!doctype html><html lang="en"><head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Vizag Florist</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="/assets/css/style.css" rel="stylesheet"></head><body>
<header class="sticky-top bg-white shadow-sm">
<nav class="navbar navbar-expand-lg container py-2">
<a class="navbar-brand text-success fw-bold" href="/">Vizag Florist</a>
<form class="d-none d-lg-flex flex-grow-1 mx-3"><input class="form-control" placeholder="Search flowers, cakes, combos..."></form>
<ul class="navbar-nav ms-auto"><li class="nav-item me-3"><a class="nav-link" href="#">Login</a></li><li class="nav-item"><a class="nav-link" href="/cart">🛒 <span id="cartCount" class="badge bg-success">0</span></a></li></ul>
</nav>
<div class="bg-light border-top"><div class="container d-flex gap-4 py-2 small"><span>Flowers</span><span>Cakes</span><span>Combos</span><span>Gifts</span><span>Plants</span></div></div>
</header>
<main><?php include $view; ?></main>
<footer class="bg-dark text-white mt-5 p-4"><div class="container">© <?= date('Y') ?> Vizag Florist</div></footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script><script src="/assets/js/app.js"></script>
</body></html>
