<?php


class Index extends ParentController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function home()
    {
        $this->load->view('home');
    }

    public function category()
    {
        $data = array();
        $categoryModel = $this->load->model('Category');
        $data['categories'] = $categoryModel->allCategory();
        $this->load->view('category',$data);
    }
}