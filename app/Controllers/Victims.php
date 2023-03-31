<?php

namespace App\Controllers;

class Victims extends BaseController
{
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger){
        parent::initController($request, $response, $logger);
    }

    public function index(){
        $this->viewData['view'] = "victims/overview.php";
        $this->viewData['title'] = "Sterk Huis | Slachtoffers";

        return view('template', $this->viewData);
    }
}