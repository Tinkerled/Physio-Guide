<?php


class Programme
{
  private $prog;
  private $nom;
  private $desc;
  
  public function _construct(){
    $this->prog = array();
  }
  
  public function add($exe){
    array_push($this->prog, $exe);
    
  }
  
  public function setIndexes(){
    foreach ($this->prog as $key => $exe){
      $exe->setIndex($key);
    }
    
  }
}
