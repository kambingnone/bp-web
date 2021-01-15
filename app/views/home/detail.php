<div class="container">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['inb']['nama_barang']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['inb']['kategori'] ?></h6>
            <p class="card-text">Jumlah : <?= $data['inb']['qty']; ?> <br>
                Suplier : <?= $data['inb']['suplier']; ?>
            </p>
            <a href="<?= base_url; ?>/home" class="card-link">Kembali</a>
        </div>
    </div>
</div>