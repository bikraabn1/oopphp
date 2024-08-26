<?php 

class A{
    protected $str;
    public function __construct(){

    }

    protected function getStr($str){
        $this->str = $str;
        echo $str;
    }
}

class B extends A{
    public function __construct(){
    
    }

    public function getStr($str){
        parent::getStr($str);
    }
}

$b = new B();
$b->getStr("hehe");