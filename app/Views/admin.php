<?= $this->extend('/Layout/base'); ?>

<?= $this->section('title'); ?>
    <title>Vendorin.aja!</title>
<?= $this->endSection('title'); ?>

<?= $this->section('custom_css'); ?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/admin.css">
<?= $this->endSection('custom_css'); ?>

<?= $this->section('custom_headScript'); ?>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="/assets/js/adminTable.js"></script>
<?= $this->section('custom_headScript'); ?>

<?= $this->section('content'); ?>
<div class="container-lg">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Status <b>Pelanggan</b></h2></div>
                    <div class="col-sm-4">
                        <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Produk</th>
                        <th>Total Pembayaran</th>
                        <th>Status</th>
                        <th>Bukti</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Difa</td>
                        <td>PDH</td>
                        <td>Rp500.000</td>
                        <td>Belum Lunas</td>
                        <td>
                        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#buktibayar">
                            <i class="fa fa-camera" aria-hidden="true"></i> <b>Lihat Nota</b> 
                        </button>
                        </td>
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Hapit</td>
                        <td>Kaos</td>
                        <td>Rp300.000</td>
                        <td>Ngutang</td>
                        <td>
                        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#buktibayar">
                            <i class="fa fa-camera" aria-hidden="true"></i> <b>Lihat Nota</b> 
                        </button>
                        </td>
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dew</td>
                        <td>Jaket</td>
                        <td>Rp1.000.000</td>
                        <td>Bayar Teruss</td>
                        <td>
                        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#buktibayar">
                            <i class="fa fa-camera" aria-hidden="true"></i> <b>Lihat Nota</b> 
                        </button>
                        </td>
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>      
                </tbody>
            </table>
        </div>
    </div>
</div>

<!--Gambar-->
<div class="modal fade" id="buktibayar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Bukti Pembayaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="/assets/img/bukti.jpg" alt="conto" class="gambar">
      </div>
    </div>
  </div>
</div>

<?= $this->endSection('content'); ?>