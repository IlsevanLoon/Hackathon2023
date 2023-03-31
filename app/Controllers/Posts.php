<?php

namespace App\Controllers;

class Posts extends BaseController
{
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger){
        parent::initController($request, $response, $logger);
        $this->post = model(post::class);
    }

    public function index(){

        $this->viewData['categories'] = $this->post->get_categories();
        $this->viewData['posts'] = $this->post->get_all();
        $this->viewData['view'] = "posts/overview.php";
        $this->viewData['title'] = "Sterk Huis | Verhalen";

        return view('template', $this->viewData);
    }

    public function add(){
        $this->viewData['categories'] = $this->post->get_categories();
        $this->viewData['view'] = "posts/add.php";
        $this->viewData['title'] = "Sterk Huis | Verhaal toevoegen";

        return view('template', $this->viewData);
    }

    public function add_save(){
        $title = $this->request->getPost('title');
        $categories = $this->request->getPost('categories');
        $content = $this->request->getPost('content');

        $this->post->add_save($title, $categories, $content);

        return redirect()->to('Posts/index');
    }
}

