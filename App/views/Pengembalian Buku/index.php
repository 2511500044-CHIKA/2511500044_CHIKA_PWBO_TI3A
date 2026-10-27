<div class="container mt-4">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#exampleModal">
                Tambah Data Pengembalian Buku
            </button>
            <br><br>
            <h3>Daftar Pengambilan Buku</h3>
            <ul class="list-group">
                <?php foreach ($data['pengembalian'] as $pengembalian) : ?>
                    <li class="list-group-item">
                        <?php echo $pengembalian['NmMhs044']; ?>
                        <a href="<?php echo BASEURL; ?>/pengembalian/hapus/<?php echo $pengembalian['Kd_kembalian044']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin?');">
                            hapus
                        </a>
                        <a href="<?php echo BASEURL; ?>/pengembalian/ubah/<?php echo $pengembalian['Kd_kembalian044']; ?>" class="badge badge-success float-right ml-1 tampilModalUbah"
                            data-toggle="modal" data-target="#exampleModal" data-id="<?php echo $pengembalian['Kd_kembalian044']; ?>">
                            ubah
                        </a>
                        <a href="<?php echo BASEURL; ?>/pengembalian/detail/<?php echo $pengembalian['Kd_kembalian044']; ?>" class="badge badge-primary float-right ml-1">
                            detail
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambah Data Pengembalian</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo BASEURL; ?>/pengembalian/tambah"
                    method="post">

                    <div class="form-group">
                        <label for="Kd_kembalian044">Kode Pengembalian</label>
                        <input type="text" class="form-control" id="Kd_kembalian044" name="Kd_kembalian044">
                    </div>
                    <div class="form-group">
                        <label for="NimMhs044m">NIM Mahasiswa</label>
                        <input type="text" class="form-control" id="NimMhs044" name="NimMhs044">
                    </div>

                     <div class="form-group">   
                        <label for="NmMhs044">Nama Mahasiswa</label>
                        <input type="text" class="form-control" id="NmMhs044" name="NmMhs044">
                    </div>

                     <div class="form-group">
                        <label for="NmBuku044">Nama Buku</label>
                        <input type="text" class="form-control" id="NmBuku044" name="NmBuku044">
                    </div>

                     <div class="form-group">
                        <label for="JumBuku044">Jumlah Buku</label>
                        <input type="text" class="form-control" id="JumBuku044" name="JumBuku044">
                    </div>

                    <div class="form-group">
                        <label for="TglKembali044">Tanggal Kembal</label>
                        <input type="text" class="form-control" id="TglKembali044" name="TglKembali044">
                    </div>

                    <div class="form-group">
                        <label for="Denda044">Denda</label>
                        <input type="text" class="form-control" id="Denda044" name="Denda044">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data Pengembalia</button>
                </form>
            </div>
        </div>
    </div>
</div>