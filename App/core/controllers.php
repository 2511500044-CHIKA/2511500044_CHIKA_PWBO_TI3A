<?php
class Controllers {

    public function view($view, $data = [])
    {
        require_once '../App/views/' . $view . '.php';
    }
}