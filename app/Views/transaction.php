<?= $this->extend('/Layout/base'); ?>

<?= $this->section('title'); ?>
    <title>My Transaction | Vendorin.aja!</title>
<?= $this->endSection('title'); ?>

<?= $this->section('custom_css'); ?>
    <link rel="stylesheet" href="/assets/css/transaction.css">
<?= $this->endSection('custom_css'); ?>

<?= $this->section('content'); ?>
    <div class="container mt-5">
        <h1>My Transaction</h1>
        <hr>
        <div class="card">
                <div class="row no-gutters">
                    <div class="col-sm-4">
                        <img class="card-img" src="/assets/img/kaos.jpg" alt="Suresh Dasari Card">
                    </div>
                    <div class="col-sm-7">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">T-Shirt</h5>
                                    <p class="card-text">
                                        S &nbsp;&nbsp;&nbsp;&nbsp;x30<br>
                                        M &nbsp;&nbsp;&nbsp;x30<br>
                                        L &nbsp;&nbsp;&nbsp;&nbsp;x30<br>
                                        XL &nbsp;&nbsp;x30<br>
                                    </p>
                                    <p>
                                        <span style="color: red"> Harap Lunasi Sebelum : </span><br>
                                        21/10/2020 &nbsp; &nbsp; 23:59 WIB
                                    </p>
                                </div>
                                <div class="col2">
                                    <p>Tanggal Pembelian : 20/10/2020</p>
                                    <br>
                                    <p>
                                        <strong>
                                        Harga Total <span class="ml-3">: $500</span> <br>
                                        Dana Awal  <span class="ml-3">&nbsp;&nbsp;: $250</span> <br>
                                        Sisa Bayar  <span class="ml-3">&nbsp;&nbsp;: $250</span> <br>
                                        </strong>
                                    </p>
                                    <button type="button" class="col-sm-10 btn btn-warning" data-toggle="modal" data-target="#modalUploadBukti">
                                        Pay Now
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modalUploadBukti" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaran</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            Coming Soon Upload disini!
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-warning">Save changes</button>
        </div>
        </div>
    </div>
    </div>
<?= $this->endSection('content'); ?>