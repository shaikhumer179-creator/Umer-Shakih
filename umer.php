<?php
class circle{
    public $radius;
    public function __construct($radius){
        $this->radius=$radius;
    }
    public function area(){
        return 3.14*$this->radius*$this->radius;

    }public function circumferences(){
        return 2*3.14*$this->radius;

    }
}
$c=new circle(4);
echo"area".$c->area();
echo"br";
echo"circumferences=".$c->circumferences();
?>
