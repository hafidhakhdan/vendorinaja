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
            </tbody>
        </table>

    </div>