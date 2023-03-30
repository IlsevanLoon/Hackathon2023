<?php

namespace App\Controllers;

class Contacts extends BaseController
{
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger){
        parent::initController($request, $response, $logger);
    }

    public function index(){
        $this->viewData['view'] = "contacts/overview.php";
        $this->viewData['title'] = "Home";

        return view('template', $this->viewData);
    }
}