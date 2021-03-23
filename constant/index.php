<!-- 
------------scope resolution op--------------- -->
<?php
class firstclass{
    const Example="you can't change this";
    public static function test(){
        echo parent::Example;

        }
     }
    
    class secondclass extends firstclass{
        public static $staticproperty=" static property!";

    

public static function anotherTest(){
    echo self::$staticproperty;
    } 
}
$b=firstclass::Example;
echo $b;

$a=secondclass::anotherTest();
echo $a;
?>