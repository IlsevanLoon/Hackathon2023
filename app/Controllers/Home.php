<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger){
        parent::initController($request, $response, $logger);
        $this->test = model(test::class);
    }

    public function index()
    {
        $this->viewData['test'] = $this->test->get();
        $this->viewData['view'] = "home.php";
        $this->viewData['title'] = "Home";

        return view('template', $this->viewData);
    }
}
