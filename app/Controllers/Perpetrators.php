<?php

namespace App\Controllers;

class Perpetrators extends BaseController
{
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger){
        parent::initController($request, $response, $logger);
    }

    public function index(){
        $this->viewData['view'] = "predetrators/overview.php";
        $this->viewData['title'] = "Sterk Huis | Daders";

        return view('template', $this->viewData);
    }
}