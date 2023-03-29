<?php

namespace App\Controllers;

class Posts extends BaseController
{
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger){
        parent::initController($request, $response, $logger);
        $this->post = model(post::class);
    }

    public function index()
    {
        $this->viewData['posts'] = $this->post->get_all();
        $this->viewData['view'] = "posts/overview.php";
        $this->viewData['title'] = "Home";

        return view('template', $this->viewData);
    }
}

