<h3>Barang Masuk</h3>

<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="col-lg-12">
        <button type="button" class="mb-3 btn btn-primary tombolTambahData" data-toggle="modal" data-target="#exampleModal">
            Tambah
        </button>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Suplier</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['inb'] as $inb) : ?>
                    <tr>
                        <td><?= $inb['nama_barang']; ?></td>
                        <td><?= $inb['kategori']; ?></td>
                        <td><?= $inb['qty']; ?></td>
                        <td><?= $inb['suplier']; ?></td>
                        <td>
                            <a href="<?= base_url; ?>/inbound/hapus/<?= $inb['id']; ?>" class="badge badge-danger" onclick="return confirm('Konfirmasi Hapus data.');">Hapus</a>
                            <a href="<?= base_url; ?>/inbound/ubah/<?= $inb['id']; ?>" class="badge badge-warning tampilModalUbah" data-toggle="modal" data-target="#exampleModal" data-id="<?= $inb['id']; ?>">Ubah</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url; ?>/inbound/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang">
                    </div>

                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <input type="text" class="form-control" id="kategori" name="kategori">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="qty">Jumlah Barang</label>
                            <input type="number" class="form-control" id="qty" name="qty" placeholder="0">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="suplier">Suplier</label>
                            <select class="form-control" id="suplier" name="suplier">
                                <option>-</option>
                                <option>IDL</option>
                                <option>IDG</option>
                                <option>IDH</option>
                            </select>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>