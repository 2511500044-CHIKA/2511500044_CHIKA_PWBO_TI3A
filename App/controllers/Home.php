<?php

class Home extends Controllers {
    public function index() {

        $data['judul'] = 'Home';
        $data['nama'] = 'Chika Zayin Salsabilla';
        $data['pekerjaan'] = 'Mahasiswa';

        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}