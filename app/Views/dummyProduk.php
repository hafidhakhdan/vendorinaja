<body>
    <div class="container">
        <h3>Produk</h3>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID Produk</th>
                    <th>Kategori Produk</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($produk as $row) : ?>
                    <tr>
                        <td><?= $row->id_produk; ?></td>
                        <td><?= $row->kategori_produk; ?></td>
                    </tr>
                <?php endforeach; ?>
                <thead>
                    <tr>
                        <th>Bahan Produk</th>
                        <th>Deskripsi Bahan</th>
                        <th>Ukuran</th>
                        <th>Harga</th>

                    </tr>
                </thead>
                <?php foreach ($detail_produk as $row) : ?>
                    <tr>
                        <td><?= $row->bahan_produk; ?></td>
                        <td><?= $row->deskripsi_bahan; ?></td>
                        <td><?= $row->ukuran; ?></td>
                        <td><?= $row->harga; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>