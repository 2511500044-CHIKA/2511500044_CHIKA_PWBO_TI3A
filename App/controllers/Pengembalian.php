
<?php

class Pengembalian extends Controllers
{
    public function index()
    {
        $data['judul'] = 'Daftar Pengembalian Buku';
        $data['pengembalian'] = $this->model('Pengembalian_model')->getAllPengembalian();

        $this->view('templates/header', $data);
        $this->view('pengembalian Buku/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Pengembalian';
        $data['pengembalian'] = $this->model('Pengembalian_model')->getPengembalianById($id);

        $this->view('templates/header', $data);
        $this->view('pengembalian Buku/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Pengembalian_model')->tambahDataPengembalian($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
        }

        header('Location: ' . BASEURL . '/pengembalian');
        exit;
    }

    public function hapus($id)
    {
        if ($this->model('Pengembalian_model')->hapusDataPengembalian($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
        }

        header('Location: ' . BASEURL . '/pengembalian');
        exit;
    }

    public function getubah()
    {
        echo json_encode(
            $this->model('Pengembalian_model')->getPengembalianById(
                $_POST['Kd_kembalian044']
            )
        );
    }

    public function ubah()
    {
        if ($this->model('Pengembalian_model')->ubahDataPengembalian($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
        }

        header('Location: ' . BASEURL . '/pengembalian');
        exit;
    }
}
