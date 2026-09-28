<?php

class About extends Controllers {
    public function index($nama = 'Dono', $pekerjaan = 'Pelawak') 
    {
        $data['nama'] =$nama;
        $data['pekerjaan'] =$pekerjaan;
        $data['judul'] = 'About Me';
        $this->view('templates/header', $data);
       $this->view('About/index', $data);
       $this->view('templates/footer');
    }

    public function page() 
    {
        $data['judul'] = 'About Page';
        $this->view('templates/header',$data);
        $this->view('About/page', $data);
        $this->view('templates/footer');
    }

}