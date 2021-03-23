<?php
class persons{
    public $fname="appu";
   public $lname="ajith";
     private $age="23";

  public function owner(){
    $a = $this->fname;
    return $a; 
  }}
class pet{
    public function owner(){
        $a="hi bro";
        return $a; 
  }
}
class pets extends persons{
    public function owner(){
        $a=$this->lname;
        return $a; 
  }
}
?>
