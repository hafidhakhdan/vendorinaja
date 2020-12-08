<?= $this->extend('/Layout/base'); ?>

<?= $this->section('title'); ?>
<title>Vendorin.aja!</title>
<?= $this->endSection('title'); ?>

<?= $this->section('custom_css'); ?>
<link rel="stylesheet" href="/assets/css/homepage.css">
<?= $this->endSection('custom_css'); ?>

<?= $this->section('content'); ?>
<!-- Banner -->
<div id="bannerCarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active banner">
      <img class="d-block w-100 bannerImg" src="/assets/img/rakbaju-1.jpg" alt="First slide">
      <div class="carousel-caption d-flex align-items-center justify-content-center d-none d-md-block">
        <h1>Halo?</h1>
      </div>
    </div>
    <div class="carousel-item banner">
      <img class="d-block w-100 bannerImg" src="/assets/img/rakbaju-2.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-flex align-items-center justify-content-center d-md-block">
        <h1>Custom Sepuasnya.</h1>
      </div>
    </div>
    <div class="carousel-item banner">
      <img class="d-block w-100 bannerImg" src="/assets/img/rakbaju-3.jpg" alt="Third slide">
      <div class="carousel-caption d-flex align-items-center justify-content-center d-none d-md-block">
        <h1>disini aja.</h1>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#bannerCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#bannerCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--end of Banner -->

<!-- card Product -->
<div class="container mt-5">
  <div class="card-deck">
    <div class="card">
    <a href="/Home/custom" class="stretched-link"></a>
      <img class="card-img-top" src="/assets/img/kaos.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">T-Shirts</h5>
        <hr class="col-4">
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit et eget viver</p>
      </div>
    </div>
    <div class="card">
    <a href="/Home/custom" class="stretched-link"></a>
      <img class="card-img-top" src="/assets/img/PDH.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">PDH</h5>
        <hr class="col-4">
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit et eget viver</p>
      </div>
    </div>
    <div class="card">
    <a href="/Home/custom" class="stretched-link"></a>
      <img class="card-img-top" src="/assets/img/jaket.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Jacket</h5>
        <hr class="col-4">
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit et eget viver</p>
      </div>
    </div>
  </div>
</div>
<!-- end of card Product -->

<?= $this->endSection('content'); ?>