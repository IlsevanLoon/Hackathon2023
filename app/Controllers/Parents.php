<?php

namespace App\Controllers;

class Parents extends BaseController
{
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger){
        parent::initController($request, $response, $logger);
    }

    public function index(){
        $this->viewData['view'] = "parents/overview.php";
        $this->viewData['title'] = "Sterk Huis | Ouders";

        return view('template', $this->viewData);
    }
}