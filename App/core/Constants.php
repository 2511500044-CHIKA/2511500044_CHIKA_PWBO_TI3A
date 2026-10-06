<?php

class constants
{

public function view($view, $data = [])
    {
        require_once '../App/views/' . $view . '.php';
    }
    public function model($model)
    {
        require_once '../App/models/' . $model . '.php';
        return new $model;
    }
}
define('BASEURL', 'http://localhost/CHIKA_PWBO_2511500044/Public/');
