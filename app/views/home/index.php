<div class="alert alert-info" role="alert">
    SELAMAT DATANG <?= $data['nama']; ?> DI WMS ( WAREHOUSE MANAGEMENT SYSTEM )
</div>

<h3>Daftar Barang</h3>

<div class="container mb-5">
    <div class="col-4">
        <ul class="list-group">
            <?php foreach ($data['inb'] as $inb) : ?>
                <li class="list-group-item list-group-item d-flex justify-content-between align-items-center">
                    <?= $inb['nama_barang']; ?>
                    <a href="<?= base_url; ?>/home/detail/<?= $inb['id']; ?>" class="badge badge-primary">Detail</a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

<!-- <h3>Barang keluar (Overhand)</h3>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Kategori</th>
                <th scope="col">Qty</th>
                <th scope="col">Suplier</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>NIVEA Body Serum</td>
                <td>Perawatan & Kecantikan</td>
                <td>150</td>
                <td>IDL</td>
            </tr>
        </tbody>
    </table>
</div> -->

</div>