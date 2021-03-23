<?php
class person{
    public $name;
    public $age;
     
     public static $drinkingage= 21;
     public static function setdrinkingage($newDA){
         self::$drinkingage = $newDA;
     }
     public function getDA(){
         return self::$drinkingage;
     }
}
// echo person::$drinkingage;
// person::setdrinkingage(18);

// echo person::$drinkingage;
$person1=new person();
echo "DringkingAge is :" .$person1->getDA();

?>