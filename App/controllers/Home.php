<?php

class Home extends Controllers {
    public function index() 
    {
        $data['judul'] = 'Home';
        $this->view('templates/header', $data);     
        $this->view('Home/index');
        $this->view('templates/footer');
    }

}       