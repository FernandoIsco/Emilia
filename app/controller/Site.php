<?php

namespace app\controller;

use Emilia\mvc\Controller;

class Site extends Controller
{
    public function index()
    {
        return '<div style="width: 100%;height: 100%;display: table;"><div style="text-align: center;display: table-cell;vertical-align: middle;font-weight: 300;font-size: 48px;">EMILIA FRAMEWORK<br>AUTHOR ISCO<br>JUST FOR FUNNY</div></div>';
    }
}