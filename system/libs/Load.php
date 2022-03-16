<?php


class Load
{
    public function __construct(){}

    public function view($fileName){
        include 'app/views/'.$fileName.".php";
    }

}