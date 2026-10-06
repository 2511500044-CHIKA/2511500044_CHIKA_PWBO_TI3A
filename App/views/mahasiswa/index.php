<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3>Daftar Mahasiswa</h3>
            <?php foreach ($data['mhs'] as $mhs) : ?>
                <ul>
                    <Li>
                        <?php echo $mhs['nama']; ?></Li>
                    <Li>
                        <?php echo $mhs['nim']; ?></Li>
                    <Li>
                        <?php echo $mhs['email']; ?></Li>
                    <Li>
                        <?php echo $mhs['jurusan']; ?></Li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>