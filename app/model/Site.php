<?php

namespace app\model;




use Emilia\mvc\Model;

class Site extends Model
{
    public function getList()
    {
        return $this->select();
    }
}