<?php

class App {
    protected $controllers = 'home';
    protected $method = 'index';
    protected $params = [];

    public function __construct() 
    {
        $url = $this->parseUrl();
        
        if (file_exists('../App/controllers/' . $url[0] . '.php')) {
            $this->controllers = $url[0];
            unset($url[0]);
        }

        require_once '../App/controllers/' . $this->controllers . '.php';
        $this->controllers = new $this->controllers;

        if (isset($url[1])) {
            if (method_exists($this->controllers, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }

            if (!empty($url)) {
                $this->params = array_values($url);
            }
        }

        call_user_func_array([$this->controllers, $this->method], $this->params);
    }

    public function parseUrl() 
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }

        return ['home'];
    } 
}
?>