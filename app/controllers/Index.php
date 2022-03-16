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
}