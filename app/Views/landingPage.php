<?= $this->extend('/Layout/base'); ?>

<?= $this->section('title'); ?>
<title>Landing Page Vendorin.aja!</title>
<?= $this->endSection('title'); ?>

<?= $this->section('custom_css'); ?>
<link rel="stylesheet" href="/assets/css/landingPage.css">
<?= $this->endSection('custom_css'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
    <!-- content 1 -->
    <div class="row content-1 m-1">
        <div class="col-lg-6 col-md-5 section ">
            <img class="mr-3" width="100%" src="/assets/img/landingPage/huuman.svg" alt="image1">
        </div>
        <div class="col-lg-6 col-md-7 pr-5">
            <h1 class="mt-5">Make your own <br> <span>identity here!</span></h1>
            <p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. A tempore doloremque, quae impedit, ipsa rerum dolorem eveniet est, harum voluptatibus ut illum dolor assumenda cumque expedita perspiciatis laboriosam reiciendis quibusdam?</p>
            <button class="btnc btn-warning mt-5"> Learn More</button>
        </div>
    </div>
    <!-- content 2 -->
    <div class="row content-2 mr-1">
        <div class="col-lg-6 col-md-7  pl-5">
            <h1 style="font-weight: 900;" class="mt-5 ml-4 ">HOW IT WORKS?</h1>
            <h1 class="ml-4 "><span>Choose<br>Products.</span></h1>
            <p class="mt-5 ml-4 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. A tempore doloremque, quae impedit, ipsa rerum dolorem eveniet est, harum voluptatibus ut illum dolor assumenda cumque expedita perspiciatis laboriosam reiciendis quibusdam?</p>
        </div>
        <div class="col-lg-6 col-md-5 section d-flex ">
            <img class="mr-3" width="30%" height="85%" src="/assets/img/landingPage/sitting.png" alt="image2">
            <img class="mr-3" width="30%" height="85%" src="/assets/img/landingPage/standing2.png" alt="image2">
            <img class="mr-3" width="30%" height="85%" src="/assets/img/landingPage/standing1.png" alt="image2">
        </div>
    </div>
    <!-- content 3 -->
    <div class="row content-3 pt-0">
        <div class="col-lg-12">
            <img width="100%" height="80%" src="/assets/img/landingPage/DIVIDER.png" alt="">
        </div>
    </div>
    <!-- content 4 -->
    <div class="row content-4 ml-4">
        <div class="col-lg-6 col-md-5 section ">
            <img class="ml-5" width="70%" src="/assets/img/landingPage/vector3.svg" alt="image1">
        </div>
        <div class="col-lg-6 col-md-7 pr-5 d-flex flex-column ">
            <h1 class="ml-4">Sell it on your<br> <span>market.</span></h1>
            <p class="mt-4 ml-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. A tempore doloremque, quae impedit, ipsa rerum dolorem eveniet est, harum voluptatibus ut illum dolor assumenda cumque expedita perspiciatis laboriosam reiciendis quibusdam?</p>
        </div>
        <div class="w-100"></div>
        <div class="col-lg-6 col-md-7 mt-5">
            <h1 class="mt-5 ml-4 mr-5">We sent it to <br> <span>your frontdoor!</span></h1>
            <p class="mt-5 ml-4 mr-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. A tempore doloremque, quae impedit, ipsa rerum dolorem eveniet est, harum voluptatibus ut illum dolor assumenda cumque expedita perspiciatis laboriosam reiciendis quibusdam?</p>
        </div>
        <div class="col-lg-6 col-md-5 section d-flex ">
            <img class="ml-3" width="80%" src="/assets/img/landingPage/vector4.svg" alt="image1">
        </div>
    </div>
    <!-- end of landing Page -->

    <?= $this->endSection('content'); ?>