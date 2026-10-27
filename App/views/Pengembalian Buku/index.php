<?php
/** @var array $data */ ?>
<div class="container mt-4">
    <div class="row">
        <div class="col-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">

            <button type="button"
                class="btn btn-primary tombolTambahData"
                data-toggle="modal"
                data-target="#formModal">
                Tambah Data Pengembalian Buku
            </button>

            <br><br>

            <h3>Daftar Pengembalian Buku</h3>

            <ul class="list-group">
                <?php foreach ($data['pengembalian'] as $pengembalian) : ?>
                    <li class="list-group-item">
                        <?= $pengembalian['NmMhs044']; ?>

                        <a href="<?= BASEURL; ?>/pengembalian/hapus/<?= $pengembalian['Kd_kembalian044']; ?>"
                            class="badge badge-danger float-right ml-1"
                            onclick="return confirm('Yakin ingin menghapus data ini?');">
                            hapus
                        </a>

                        <a href="<?= BASEURL; ?>/pengembalian/detail/<?= $pengembalian['Kd_kembalian044']; ?>"
                            class="badge badge-primary float-right ml-1">
                            detail
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>

        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1"
    role="dialog" aria-labelledby="judulModal" aria-hidden="true">

    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">
                    Tambah Data Pengembalian Buku
                </h5>

                <button type="button" class="close"
                    data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="<?= BASEURL; ?>/pengembalian/tambah"
                method="POST" id="forPengembalian">

                <div class="modal-body">

                    <div class="form-group">
                        <label for="Kd_kembalian044">Kode Pengembalian</label>
                        <input type="text" class="form-control"
                            id="Kd_kembalian044" name="Kd_kembalian044"
                            maxlength="5" required>
                    </div>

                    <div class="form-group">
                        <label for="NimMhs044">NIM Mahasiswa</label>
                        <input type="text" class="form-control"
                            id="NimMhs044" name="NimMhs044"
                            maxlength="10" required>
                    </div>

                    <div class="form-group">
                        <label for="NmMhs044">Nama Mahasiswa</label>
                        <input type="text" class="form-control"
                            id="NmMhs044" name="NmMhs044"
                            maxlength="30" required>
                    </div>

                    <div class="form-group">
                        <label for="NmBuku044">Nama Buku</label>
                        <input type="text" class="form-control"
                            id="NmBuku044" name="NmBuku044"
                            maxlength="20" required>
                    </div>

                    <div class="form-group">
                        <label for="JumBuku044">Jumlah Buku</label>
                        <input type="number" class="form-control"
                            id="JumBuku044" name="JumBuku044"
                            min="1" required>
                    </div>

                    <div class="form-group">
                        <label for="TglKembali044">Tanggal Kembali</label>
                        <input type="date" class="form-control"
                            id="TglKembali044" name="TglKembali044"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="Denda044">Denda</label>
                        <input type="number" class="form-control"
                            id="Denda044" name="Denda044"
                            min="0" required>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">
                        Close
                    </button>

                    <button type="submit" class="btn btn-primary">
                        Tambah Data Pengembalian Buku
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>