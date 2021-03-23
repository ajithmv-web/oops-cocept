<?php
include 'includes/autoload.inc.php';

?>

<?php
$obj1=new person\person("Appu",23);
echo $obj1->getperson();
echo "<br/>";
$obj=new home("ajith",23);
echo $obj->getname();
echo "<br/>";
?>
