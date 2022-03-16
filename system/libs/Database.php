<?php


class Database extends PDO
{

    public function __construct()
    {
        $dsn = 'mysql:dbname=php_mvc; host=localhost';
        $user = 'root';
        $pass = '';

//        $db = new PDO($dsn,$user,$pass);
        parent::__construct($dsn,$user,$pass);

    }



}

