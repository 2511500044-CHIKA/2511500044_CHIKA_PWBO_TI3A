
<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $data['pengembalian']['NmMhs044']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $data['pengembalian']['Kd_kembalian044']; ?></h6>
            <p class="card-text">NIM: <?php echo $data['pengembalian']['NimMhs044']; ?></p>
            <p class="card-text">Nama Buku: <?php echo $data['pengembalian']['NmBuku044']; ?></p>
            <p class="card-text">Jumlah Buku: <?php echo $data['pengembalian']['JumBuku044']; ?></p>
            <p class="card-text">Tanggal Kembali: <?php echo $data['pengembalian']['TglKembali044']; ?></p>
            <p class="card-text">Denda: <?php echo $data['pengembalian']['Denda044']; ?></p>
            <a href="<?php echo BASEURL; ?>/pengembalian" class="card-link">Kembali</a>
        </div>
    </div>
</div>