<?php


class Category extends MainModel
{

    public function __construct()
    {
        parent::__construct();
    }

    public function allCategory()
    {
        $selectSql = "SELECT * FROM `categories`";
        $runSelectSql = $this->db->query($selectSql);
        $results = $runSelectSql->fetchAll();
        return $results;
    }

}