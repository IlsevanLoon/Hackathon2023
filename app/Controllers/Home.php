<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger){
        parent::initController($request, $response, $logger);
    }

    public function index()
    {
        $this->add_js('Home/home.js');
        $this->viewData['view'] = "home.php";
        $this->viewData['title'] = "Home";

        return view('template', $this->viewData);
    }
}

