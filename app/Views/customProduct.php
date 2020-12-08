<?= $this->extend('/Layout/base'); ?>

<?= $this->section('title'); ?>
<title>Costum Product Vendorin.aja!</title>
<?= $this->endSection('title'); ?>

<?= $this->section('custom_css'); ?>
<link rel="stylesheet" href="/assets/css/costum.css">
<?= $this->endSection('custom_css'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid ">
    <form method="post" action="../customProduk/save" enctype="multipart/form-data">
        <div class="row">
            <div class="col-lg-6 mt-5">
                <div class="content-1 d-flex flex-column align-items-center">
                    <img class="jumbo" src="/assets/img/costum/Kaos5.jpg" alt="">
                    <div class="section mt-4 d-flex justify-content-between">
                        <img class="thumb" src="/assets/img/costum/Kaos.jpg" alt="baju">
                        <img class="thumb" src="/assets/img/costum/Kaos5.jpg" alt="baju">
                        <img class="thumb" src="/assets/img/costum/Kaos.jpg" alt="baju">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
            <div class="content col-lg-6 d-flex flex-column ">
                <div class="content-2  text">
                    <h1 class="jacket">Kaos</h1>
                    <p class="">Kaus oblong atau disebut juga sebagai T-shirt adalah jenis pakaian yang menutupi sebagian lengan, seluruh dada, bahu, dan perut. Kaus oblong biasanya tidak memiliki kancing, kerah, ataupun saku. Pada umumnya, kaus oblong berlengan pendek dan berleher bundar.</p>
                </div>
                <div class="details">
                    <div class="content-2 material ">
                        <h5>Choose Your Material</h5>
                        <div class="material-choose containers  d-flex justify-content-between mt-4">
                            <div class="mini-thumbnail" style="background-image:url('/assets/img/costum/cb30.jpg');">
                                <input class="thumbs" type="radio" name="bahan_produk" id="bahan_satu" value="bahan satu" checked>
                            </div>
                            <div class="mini-thumbnail" style="background-image:url('/assets/img/costum/bb30.jpg');">
                                <input class="thumbs" type="radio" name="bahan_produk" id="bahan_dua" value="bahan dua" checked>
                            </div>
                            <div class="mini-thumbnail" style="background-image:url('/assets/img/costum/cb30.jpg');">
                                <input class="thumbs" type="radio" name="bahan_produk" id="bahan_tiga" value="bahan tiga" checked>
                            </div>
                            <div class="mini-thumbnail" style="background-image:url('/assets/img/costum/bb30.jpg');">
                                <input class="thumbs" type="radio" name="bahan_produk" id="bahan_empat" value="bahan empat" checked>
                            </div>
                            <div class="mini-thumbnail" style="background-image:url('/assets/img/costum/cb30.jpg');">
                                <input class="thumbs" type="radio" name="bahan_produk" id="bahan_lima" value="bahan lima" checked>
                            </div>
                        </div>
                    </div>
                    <div class="content-2  color ">
                        <h5 class="mt-4">Choose Your Color</h5>
                        <div class="color-choose containers2  d-flex justify-content-between mt-4">
                            <div class="mini-thumbnail" style="background-color: maroon;">
                                <input class="thumbs2" type="radio" name="warna_produk" id="maroon" value="maroon" checked>
                            </div>
                            <div class="mini-thumbnail" style="background-color: rgb(17, 17, 104);">
                                <input class="thumbs2" type="radio" name="warna_produk" id="blue" value="blue" checked>
                            </div>
                            <div class="mini-thumbnail" style="background-color: orange;">
                                <input class="thumbs2" type="radio" name="warna_produk" id="orange" value="orange" checked>
                            </div>
                            <div class="mini-thumbnail" style="background-color: rgb(10, 82, 10);">
                                <input class="thumbs2 " type="radio" name="warna_produk" id="green" value="green" checked>
                            </div>
                            <div class="mini-thumbnail" style="background-color: black;">
                                <input class="thumbs2" type="radio" name="warna_produk" id="black" value="black" checked>
                            </div>
                        </div>
                    </div>
                    <div class=" content-2 size ">
                        <h5 class="mt-4">Total Size You Need</h5>
                        <div class="formclass mt-4 d-flex justify-content-between">
                            <div class="form-group d-flex ">
                                <label class="align-self-center mr-2" for="">S</label>
                                <input placeholder="QTY" class="mini-thumbnail thumb-qty" name="ukuranS" type="number">
                            </div>
                            <div class="form-group d-flex">
                                <label class="align-self-center mr-2" for="">M</label>
                                <input placeholder="QTY" class="mini-thumbnail thumb-qty" name="ukuranM" type="number">
                            </div>
                            <div class="form-group d-flex ">
                                <label class="align-self-center mr-2" for="">L</label>
                                <input placeholder="QTY" class="mini-thumbnail thumb-qty" name="ukuranL" type="number">
                            </div>
                            <div class="form-group d-flex">
                                <label class="align-self-center mr-2" for="">XL</label>
                                <input placeholder="QTY" class="mb-2 mini-thumbnail thumb-qty" name="ukuranXL" type="number">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-2 mt-4 ">
            <div class="col-md-12 d-flex flex-column content-3">
                <div class="text">
                    <h1>Choose Your Design!</h1>
                    <div class="lines"></div>
                </div>
                <div class="section-2 d-flex justify-content-around mt-5">
                    <div class="section-1">
                        <div class="thumbnail-3"><button type="button" class="btn" data-toggle="modal" data-target="#exampleModall"><img src="/assets/img/costum/cloud.svg" alt=""></button></div>
                        <span>Upload Your Own Design</span>
                    </div>
                    <div class="section-1">
                        <div class="thumbnail-3"><img src="/assets/img/costum/lamp.svg" alt=""></div>
                        <span>Choose Our Template</span>
                    </div>
                    <div class="section-1">
                        <div class="thumbnail-3"><a href="https://linktr.ee/facultymerch"><img src="/assets/img/costum/phone.svg" alt=""></a></div>
                        <span>Call Our Staff</span>
                    </div>
                </div>
                <button class="btn btn-warning mt-5" type="submit">Confirm Your Design</button>
            </div>
        </div>
</div>
<div class="modal fade" id="exampleModall" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload Your Desain</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body d-flex flex-column align-content-center">
                <input class="btn btn-warning" style="color: white;" name="gambar_design" id="gambar_design" type='file' onchange="readURL(this);" />
                <img id="blah" class="align-self-center mt-3" alt="Upload your Design" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Confirm</button>
                <!--<button type="button" class="btn btn-warning" style="color: white;">Save changes</button>-->
            </div>
        </div>
    </div>
</div>
</form>
<!-- end of Costum Product -->

<?= $this->endSection('content'); ?>

<!-- JS Costum Product -->
<?= $this->section('custom_bodyScript'); ?>
<script src="/assets/js/costum/previewUpload.js"></script>
<script src="/assets/js/costum/thumbnail.js"></script>
<?= $this->endSection('custom_bodyScript'); ?>