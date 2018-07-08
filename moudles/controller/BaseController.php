<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-7-4
 * Time: 上午9:34
 */

namespace moudles\controller;


class BaseController
{
    public $view;
    public $smarty;

    public function construct__(){

    }

    public function smarty(){

    }

    public function view(){
        return $this->smarty();
    }

    public function echoJson($request,$response){
        return $response->getBody()->write(json_encode($request));
    }
}