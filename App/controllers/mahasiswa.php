<?php

class Mahasiswa extends Controllers
{
    public function index()
    {
        $data['judul'] = 'Daftar Pengembalian Buku';
        $data['pengembalian'] = $this->model('pengembalian')->getAllPengembalian();

        $this->view('templates/header', $data);
        $this->view('pengembalian/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Pengembalian Buku';
        $data['mhs'] = $this->model('Pengembalian_model')->getPengembalianById($id);
        $this->view('templates/header', $data);
        $this->view('pengembalian/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Pengembalian_model')->tambahDataPengembalian($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location:' . BASEURL . '/pengembalian');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/pengembalian');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Pengembalian_model')->hapusDataPengembalian($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location:' . BASEURL . '/pengembalian');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/pengembalian');
            exit;
        }
    }

    public function getUbah()
    {
        echo json_encode($this->model('Pengembalian_model')->getMahasiswaById($_POST['id']));
    }

    public function ubah()
    {
        if ($this->model('Pengembalian_model')->ubahDataPengembalian($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location:' . BASEURL . '/pengembalian');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/pengembalian');
            exit;
        }
    }
}