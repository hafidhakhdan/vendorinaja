<?= $this->extend('/Layout/base'); ?>

<?= $this->section('title'); ?>
<title>checkout Vendorin.aja!</title>
<?= $this->endSection('title'); ?>

<?= $this->section('custom_css'); ?>
<link rel="stylesheet" href="/assets/css/checkout.css">
<?= $this->endSection('custom_css'); ?>

<?= $this->section('content'); ?>
<!-- checkout -->
<div class="container mb-5">
    <div class="row mt-5">
        <div class="col-md-12">
            <h1>Check Out</h1>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-8">
            <div class="price-list p-3 pb-5">
                <div class="header d-flex ">
                    <h6 class="mr-auto pl-4">ITEMS</h6>
                    <H6 class="mr-5">QTY</H6>
                    <H6 class="">PRICE</H6>
                </div>
                <div class="td mt-3 p-2 d-flex">
                    <div class="mr-auto pl-2 d-flex">
                        <img src="/assets/img/image.png" width="40%" height="95px" alt="">
                        <div class="barang ml-4 ">
                            <h6>T-Shirt #322</h6>
                            <div class="detail d-flex flex-column">
                                <span>Costum design,</span>
                                <span>Cotton Combed,</span>
                                <span>S/L/XL</span>
                            </div>
                        </div>
                    </div>
                    <h6 class="qty pr-5">300</h6>
                    <h6 class="price">$500</h6>
                </div>
                <div class="td mt-3 p-2 d-flex">
                    <div class="mr-auto pl-2 d-flex">
                        <img src="/assets/img/image.png" width="40%" height="95px" alt="">
                        <div class="barang ml-4 ">
                            <h6>T-Shirt #322</h6>
                            <div class="detail d-flex flex-column">
                                <span>Costum design,</span>
                                <span>Cotton Combed,</span>
                                <span>S/L/XL</span>
                            </div>
                        </div>
                    </div>
                    <h6 class="qty pr-5">300</h6>
                    <h6 class="price">$500</h6>
                </div>
                <div class="td mt-3 p-2 d-flex">
                    <div class="mr-auto pl-2 d-flex">
                        <img src="/assets/img/image.png" width="40%" height="95px" alt="">
                        <div class="barang ml-4 ">
                            <h6>T-Shirt #322</h6>
                            <div class="detail d-flex flex-column">
                                <span>Costum design,</span>
                                <span>Cotton Combed,</span>
                                <span>S/L/XL</span>
                            </div>
                        </div>
                    </div>
                    <h6 class="qty pr-5">300</h6>
                    <h6 class="price">$500</h6>
                </div>
            </div>
        </div>
        <div class="col-md-4 ">
            <div class=" pb-2 content content-1 p-3 d-flex flex-column justify-content-around">
                <div class="delivery-option">
                    <h6>Delivery Option</h6>
                    <select class="form-control mt-4">
                        <option>Choose a delivery service</option>
                        <option>JNT</option>
                        <option>JNE</option>
                        <option>COD</option>
                    </select>
                </div>
                <div class="line-checkout"></div>
                <div class="Payment-option">
                    <h6>Payment Option</h6>
                    <select class="form-control mt-3">
                        <option>Choose a payment service</option>
                        <option>DP</option>
                        <option>Lunas</option>
                    </select>
                </div>
            </div>
            <div class=" content content-2 p-3 mt-4">
                <h5>TOTAL</h5>
                <div class="total">$xxx.xx</div>
                <button class="btn btn-checkout mt-4">Pay Now!</button>
            </div>
        </div>
    </div>
</div>
<!-- end of card Product -->

<?= $this->endSection('content'); ?>