<?php

namespace app\admin\controller;


class Index extends Base{

    public function index(){
        return $this->fetch();
    }

    public function list(){
        return $this->fetch();
    }
}