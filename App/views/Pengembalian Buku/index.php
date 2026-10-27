<?php /** @var array $data */ ?>
<div class="container mt-4">
    <div class="row">
        <div class="col-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary
            tombolTambahData" data-toggle="modal" data-target="#formModal">
                Tambah Data Pengembalian Buku
            </button>
            <br><br>
            <h3>Daftar Pengembalian Buku</h3>
            <ul class="list-group">
                <?php foreach ($data['pengembalian'] as $mhs) : ?>
                    <li class="list-group-item">
                        <?php echo $mhs['NmMhs044']; ?>
                        <a href="<?php echo BASEURL; ?>/pengembalian/hapus/<?php echo $mhs['id']; ?>" class="
                        badge badge-danger float-right ml-1" onclick="return confirm('Yakin?'); ">
                            hapus
                        </a>
                        <a href="<?php echo BASEURL; ?>/pengembalian/ubah/<?php echo $mhs['id']; ?>" class="badge 
                        badge-success float-right ml-1
                        tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?php echo
                                                                    $mhs['id']; ?>">
                            ubah
                        </a>
                        <a href="<?php echo BASEURL; ?>/pengembalian/detail/<?php echo $mhs['id']; ?>" 
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
<div class="modal fade" id="formModal" tabindex="-1" role="dialog"
    aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambah Data Pengembalian Buku</h5>

                <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= BASEURL; ?>/pengembalian/tambah" method="POST" id="forPengembalian">
                <input type="hidden" name="id" id="id">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>

                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control"
                            id="jurusan" name="jurusan" required>
                            <option value=""> Pilih Jurusan </option>
                            <option value="Teknik Informatika">Tekni Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Manajemen Informatika">Manajemen Infomatika</option>
                        </select>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">Close</button>

                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
            </form>

        </div>
    </div>
</div>