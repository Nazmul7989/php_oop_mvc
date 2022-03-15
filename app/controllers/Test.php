<?php


class Test extends ParentController
{

    public function __construct()
    {
//        parent::__construct();

    }

    public function test($name)
    {
        echo 'My name is Md Nazmul '.$name;
    }

}